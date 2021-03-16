<?php
/* Define ABCF7 captcha */

class ABCF7_captcha {
    /* set the default constuctor of ABCL comment */

    function __construct() {

        add_action('init', array($this, 'ABCF7_check_captcha_active'));
    }

    /* check google captcha_active */

    public function ABCF7_check_captcha_active() {
        $wpcf7 = get_option('wpcf7');

        if (isset($wpcf7['recaptcha']) && !empty($wpcf7['recaptcha'])) {

            $sitekey = $this->ABCF7_get_sitekey($wpcf7['recaptcha']);
            $secret = $this->ABCF7_get_secret($sitekey, $wpcf7['recaptcha']);

            if (!empty($sitekey) && !empty($secret)) {
                /* store sitekey value SITEKEY variable */
                define('SITEKEY', $sitekey);
                add_action('wp_enqueue_scripts', array($this, 'ABCF7_remove_google_captcha_js'));
                add_action('wp_footer', array($this, 'ABCF7_footer_script'));
            }
        }
    }

    /* get sitekey from  wpcf7 option */

    public function ABCF7_get_sitekey($sitekeys) {
        if (empty($sitekeys)
                or ! is_array($sitekeys)) {
            return false;
        }
        $sitekeys = array_keys($sitekeys);
        return $sitekeys[0];
    }

    /* get sitesecret from  wpcf7 option */

    public function ABCF7_get_secret($sitekey, $sitekeys) {
        if (isset($sitekeys[$sitekey])) {
            return $sitekeys[$sitekey];
        } else {
            return false;
        }
    }

    /* remove default google-recaptcha js file */

    public function ABCF7_remove_google_captcha_js() {
        wp_dequeue_script('google-recaptcha');
    }

    /* add new google-recaptcha in footer */

    public function ABCF7_footer_script() {
        ?>
        <script>
            console.log('initial js');
            var fired = false;
            window.addEventListener("scroll", function () {
                if ((document.documentElement.scrollTop != 0 && fired === false) || (document.body.scrollTop != 0 && fired === false)) {
                    console.log('initial js 2');
                    var abcf7head = document.getElementsByTagName('head')[0];
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.src = 'https://www.google.com/recaptcha/api.js?render=<?php echo SITEKEY; ?>&ver=3.0';
                    abcf7head.appendChild(script);


                    setTimeout(function () {
                        (function (grecaptcha, sitekey) {

                            var wpcf7recaptcha = {
                                execute: function () {
                                    grecaptcha.execute(
                                            sitekey,
                                            {action: 'homepage'}
                                    ).then(function (token) {
                                        var forms = document.getElementsByTagName('form');

                                        for (var i = 0; i < forms.length; i++) {
                                            var fields = forms[ i ].getElementsByTagName('input');

                                            for (var j = 0; j < fields.length; j++) {
                                                var field = fields[ j ];

                                                if ('g-recaptcha-response' === field.getAttribute('name')) {
                                                    field.setAttribute('value', token);
                                                    break;
                                                }
                                            }
                                        }
                                    });
                                }
                            };

                            grecaptcha.ready(wpcf7recaptcha.execute);

                            document.addEventListener('wpcf7submit', wpcf7recaptcha.execute, false);

                        })(grecaptcha, '<?php echo SITEKEY; ?>');
                    }, 4000);

                    fired = true;
                }
            }, true)
        </script>
        <?php
    }

}

/*
 * Instantiate the class.
 */
$abcf7 = new ABCF7_captcha(); // go
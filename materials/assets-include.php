<?php

if (is_admin()) {
    wp_enqueue_script('jquery-36-js-plugin', TOOLS_PLUGIN_URL . 'js/jquery36.js');
    wp_enqueue_style('general-tools-md5-css-plugin', TOOLS_PLUGIN_URL . 'css/general-tools.css'); 
    ?>

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>


<!--    wp_enqueue_style('bootstrap-5-css-plugin', TOOLS_PLUGIN_URL . 'css/bootstrap.min.css');
    
    wp_enqueue_style('general-tools-4-css-plugin', TOOLS_PLUGIN_URL . 'css/general-tools.css');    
    
    wp_enqueue_script('jquery-36-js-plugin', TOOLS_PLUGIN_URL . 'js/jquery36.js');
    wp_enqueue_script('bootstrap-5-js-plugin', TOOLS_PLUGIN_URL . 'js/bootstrap.min.js');
    wp_enqueue_script('custom-js-plugin', TOOLS_PLUGIN_URL . 'js/customjs.js');-->
    <?php
}

?>


<!-- LOADER -->
<div id="nr_main_loader" class="nr_main_loader">
    <img class="loader-inner" src="https://newsreach.in/wp-content/uploads/2019/04/NR_Animated_logo_Looder-min-compress.gif" height="65">
</div>
<section class="filter">
    <input type="hidden" id="page" value="1"/>
    <input type="hidden" id="count" value="3"/>
</section>
<div class="container"> 
    <div class="row">
        <div class="col-sm-12 col-md-12 sidebar mx-auto p-3">
            <div class="list-group">
                <span class="list-group-item text-center">                    
                    <img class="loader-inner text-center" src="<?php echo esc_url(plugins_url('images/logo.png', __FILE__)); ?>" height="65">
                </span>   
            </div>
        </div>
    </div>
    <div class="row"> 
        <div class="col-sm-3" id="nr_left_sidebar">
            <div class="list-group">
                <a href="#" data-id="1" class="list-group-item header_panel nr_left_panel">Header</a>                                              
                <a href="#" data-id="2" class="list-group-item social_panel nr_left_panel">Social</a>                                              
                <a href="#" data-id="3" class="list-group-item footer_panel nr_left_panel">Footer</a>
                <a href="#" data-id="4" class="list-group-item footer_panel nr_left_panel">Display</a>
                <a href="#" data-id="5" class="list-group-item footer_panel nr_left_panel">Color Scheme</a>
                <a href="#" data-id="6" class="list-group-item footer_panel nr_left_panel" onclick="get_advertise_option()">Ads Display</a>
                <a href="#" data-id="7" class="list-group-item footer_panel nr_left_panel">Language</a>
            </div> 
        </div>
        <div class="col-sm-9" id="nr_right_sidebar"> 
            <ul class="list-group">
                <li class="list-group-item nr_right_panel nr_first_right_panel">
                    <div class="section_title"><strong style="font-size: 16px;">Header Logo</strong></div> 
                    <table class="form-table header_table" id="header_table">
                        <tbody>          
                            <tr class="user-url-wrap">                            
                                <td>
                                    <div class="bk_main">
                                        <div class="default-screen">
                                            <div class="imdiv img_bk_center">
                                                <div class="pr-image pr-change image_bkend" style="background: url('<?php echo $header_logo; ?>') center/cover;"></div>
                                            </div>
                                            <div class="bk_div">
                                                <input type="button" class="btn btn-primary usr_btn_edit" onclick="nr_header_logo_edit();" data-image="<?php echo $header_logo; ?>" value="Edit Picture" style="margin-right: 10px;">
                                                <input type="button" class="btn btn-danger usr_btn_delete" onclick="header_logo_delete();" data-image="<?php echo $header_logo; ?>" value="Delete Picture" <?php echo $disabled_header; ?>>
                                            </div>                                              
                                        </div>
                                        <div class="edit-screen" style="display:none;">            
                                            <div class="imdiv img_bk_center">
                                                <div class="avatar-preview">
                                                    <div class="pr-image pr-change image_bkend imagePreview_profile" style="background: url('<?php echo $header_logo; ?>')center/cover;"></div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input type="file" name="header_logo_image" id="file" class="inputfile" accept=".png, .jpg, .jpeg"/>
                                                    <label for="file" class="btn btn-success" style="margin-right:13px;">Choose a file</label> 
                                                    <label class="submit_profile_btn btn btn-primary" style="display:none;" onclick="header_logo_submit();">Submit</label>  
                                                    <div class="notification" style="display: none; font-size: 20px; font-weight: 700; color: green; margin-top: 20px;"></div>                        
                                                </div>
                                            </div>            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </li> 

                <li class="list-group-item nr_right_panel social_right">
                    <table class="form-table" role="presentation">
                        <tbody>
                            <tr class="user-first-name-wrap">
                                <th><label for="nr_facebook">Facebook</label></th>
                                <td><input type="text" name="nr_facebook" id="nr_facebook" value="<?php
                                    if (!empty($social_nr_facebook)) {
                                        echo $social_nr_facebook;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Facebook Url"></td>
                            </tr>

                            <tr class="user-last-name-wrap">
                                <th><label for="nr_gplus">Google Plus</label></th>
                                <td><input type="text" name="nr_gplus" id="nr_gplus" value="<?php
                                    if (!empty($social_nr_gplus)) {
                                        echo $social_nr_gplus;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Google Plus Url"></td>
                            </tr>
                            <tr class="user-last-name-wrap">
                                <th><label for="nr_youtube">Youtube</label></th>
                                <td><input type="text" name="nr_youtube" id="nr_youtube" value="<?php
                                    if (!empty($social_nr_youtube)) {
                                        echo $social_nr_youtube;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Youtube Url"></td>
                            </tr>
                            <tr class="user-last-name-wrap">
                                <th><label for="nr_twitter">Twitter</label></th>
                                <td><input type="text" name="nr_twitter" id="nr_twitter" value="<?php
                                    if (!empty($social_nr_twitter)) {
                                        echo $social_nr_twitter;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Twitter Url"></td>
                            </tr>
                            <tr class="user-last-name-wrap">
                                <th><label for="nr_linkedin">Linked In</label></th>
                                <td><input type="text" name="nr_linkedin" id="nr_linkedin" value="<?php
                                    if (!empty($social_nr_linkedin)) {
                                        echo $social_nr_linkedin;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Linked In Url"></td>
                            </tr>
                            <tr class="user-last-name-wrap">
                                <th><label for="nr_pinterest">Pinterest</label></th>
                                <td><input type="text" name="nr_pinterest" id="nr_pinterest" value="<?php
                                    if (!empty($social_nr_pinterest)) {
                                        echo $social_nr_pinterest;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Pinterest Url"></td>
                            </tr>
                            <tr class="user-last-name-wrap">
                                <th><label for="nr_mail">Mail</label></th>
                                <td><input type="text" name="nr_mail" id="nr_mail" value="<?php
                                    if (!empty($social_nr_mail)) {
                                        echo $social_nr_mail;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Email"></td>
                            </tr>
                            <tr class="user-last-name-wrap">
                                <th></th>
                                <td><label class="submit_profile_btn_footer btn btn-primary" onclick="social_submit();">Submit</label></td>
                            </tr>

                        </tbody>

                    </table>

                </li>

                <li class="list-group-item nr_right_panel">
                    <div class="section_title"><strong style="font-size: 16px;">Footer Logo</strong></div> 
                    <table class="form-table footer_table" id="footer_table">
                        <tbody>          
                            <tr class="user-url-wrap">                            
                                <td>
                                    <div class="bk_main">
                                        <div class="default-screen">
                                            <div class="imdiv img_bk_center">
                                                <div class="pr-image pr-change image_bkend" style="background: url('<?php echo $footer_logo; ?>') center/cover;"></div>
                                            </div>
                                            <div class="bk_div">
                                                <input type="button" class="btn btn-primary usr_btn_edit" onclick="nr_footer_logo_edit();" data-image="<?php echo $footer_logo; ?>" value="Edit Picture" style="margin-right: 10px;">
                                                <input type="button" class="btn btn-danger usr_btn_delete" onclick="footer_logo_delete();" data-image="<?php echo $footer_logo; ?>" value="Delete Picture" <?php echo $disabled_footer; ?>>
                                            </div>                                              
                                        </div>
                                        <div class="edit-screen" style="display:none;">            
                                            <div class="imdiv img_bk_center">
                                                <div class="avatar-preview">
                                                    <div class="pr-image pr-change image_bkend imagePreview_profile" style="background: url('<?php echo $footer_logo; ?>')center/cover;"></div>
                                                </div>
                                                <div class="avatar-edit">
                                                    <input type="file" name="footer_logo_image" id="f_file" class="inputfile" accept=".png, .jpg, .jpeg"/>
                                                    <label for="f_file" class="btn btn-success" style="margin-right:13px;">Choose a file</label> 
                                                    <label class="submit_profile_btn_footer btn btn-primary" style="display:none;" onclick="footer_logo_submit();">Submit</label>  
                                                    <div class="notification" style="display: block; font-size: 20px; font-weight: 700; color: green; margin-top: 20px;"></div>                        
                                                </div>
                                            </div>            
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> 

                    <hr style="border-top: 1px solid #ccc;">


                    <table class="form-table bottm_footer" role="presentation">
                        <tbody>
                            <tr class="user-first-name-wrap">
                                <th><label for="footer_bottom_text">Footer Bottom Text</label></th>
                                <td>
                                    <!--<textarea name="footer_bottom_text" rows="4" cols="90" maxlength="20" id="description" placeholder="Enter Facebook Url"><?php
                                    if (!empty($social_nr_facebook)) {
                                        echo $social_nr_facebook;
                                    }
                                    ?></textarea>-->                                    
                                    <textarea name="nr_footer_bottom_text" id="nr_footer_bottom_text" rows="5" cols="90" maxlength="500" placeholder="Footer bootm text....."><?php
                                        if (!empty($nr_footer_bottom_text)) {
                                            echo $nr_footer_bottom_text;
                                        }
                                        ?></textarea>
                                </td>
                            </tr>
                            <tr class="user-first-name-wrap">
                                <th><label for="footer_bottom_text">Footer Email</label></th>
                                <td>                                    
                                    <input type="text" name="nr_footer_email" id="nr_footer_email" value="<?php
                                    if (!empty($nr_footer_email)) {
                                        echo $nr_footer_email;
                                    }
                                    ?>" class="regular-text" placeholder="Enter Email">
                                </td>
                            </tr>

                            <tr class="user-last-name-wrap">
                                <th></th>
                                <td><label class="submit_profile_btn_footer btn btn-primary" onclick="footer_bottom_submit();">Submit</label></td>
                            </tr>
                        </tbody>
                    </table>

                </li> 

                <li class="list-group-item nr_right_panel">
                    <table class="form-table" role="presentation">
                        <tbody class="show_front">
                            <tr class="user-first-name-wrap">
                                <th><label for="e_paper">E-Paper</label></th>
                                <td><input type="checkbox" name="e_paper" id="e_paper" onchange="display_front()" <?php
                                    if ($e_paper == 1) {
                                        echo "checked";
                                    }
                                    ?> class="regular-text"></td>

                            </tr>

                            <tr class="user-first-name-wrap">
                                <th><label for="video_section">Video Section</label></th>
                                <td><input type="checkbox" name="video_section" onchange="display_front()" id="video_section" <?php
                                    if ($video_section == 1) {
                                        echo "checked";
                                    }
                                    ?> class="regular-text"></td>
                            </tr>

                            <tr class="user-first-name-wrap">
                                <th><label for="content_section">Content Prevention</label></th>
                                <td><input type="checkbox" name="content_section" onchange="content_section()" id="content_section" <?php
                                    if ($content_section == 1) {
                                        echo "checked";
                                    }
                                    ?> class="regular-text"></td>
                            </tr>

                        </tbody>

                    </table>

                </li>

                <li class="list-group-item nr_right_panel">

                    <div class="section_title"><strong style="font-size: 16px;">Color Scheme</strong></div>
                    <table class="form-table" role="presentation">
                        <tbody class="show_front">
                            <tr class="user-first-name-wrap">
                                <th><label for="e_paper">Main Color</label></th>
                                <td>
                                    <!--<input name="color" id="color" type="text" value="" onchange="display_color()" class="regular-text">-->  
                                    <input class="color" value="<?php
                                    if (!empty($main_color)) {
                                        echo $main_color;
                                    }
                                    ?>" id="nr_main_color"/>
                                </td>                                                                
                            </tr>
                            <tr class="user-last-name-wrap">
                                <th></th>
                                <td><label class="btn btn-primary" id="color_submit" onclick="display_color();">Submit</label></td>
                            </tr>
                        </tbody>
                    </table>
                </li>

                <li class="list-group-item nr_right_panel ads_display_li">

                    <div class="section_title"><strong style="font-size: 16px;">Ads Display</strong><button class="btn btn-primary" id="add_new_section" style="float:right;">Add New</button></div>

                    <table class="form-table" role="presentation">
                        <tbody class="show_front section_loc append_display_ads">


                            <tr class="user-first-name-wrap add_new_section_loc" data-number="1">
<!--                                <th><label for="ads_display">Ads 1</label></th>
                                <td>
                                    <div class="col-sm-6">
                                        <select class="form-control ads_display_box" >
                                            <option value="">--Select Location--</option>
                                            <option value="header">header</option>
                                        </select>                                        
                                    </div>

                                </td>                                                                -->
                            </tr>


                        </tbody>
                        <tfoot>
                            <tr class="user-last-name-wrap">
                                <th></th>
                                <td><label class="btn btn-primary" id="display_ads_submit" onclick="display_ads_submit();">Submit</label></td>
                            </tr>
                        </tfoot>
                    </table>
                </li>

                <li class="list-group-item nr_right_panel language_setting">

                    <div class="section_title"><strong style="font-size: 16px;">Site Language Setting</strong></div>
                    <label class="container_radio">English
                        <input type="radio" name="pub_site_language" <?php
                        if ($language_selected == 'english') {
                            echo "checked='checked'";
                        }
                        ?> id="english" value="english" onclick="site_language_select(this.value)">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container_radio">Gujarati
                        <input type="radio" name="pub_site_language" <?php
                        if ($language_selected == 'gujarati') {
                            echo "checked='checked'";
                        }
                        ?>  id="gujarati" value="gujarati" onclick="site_language_select(this.value)">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container_radio">Hindi
                        <input type="radio" name="pub_site_language" <?php
                        if ($language_selected == 'hindi') {
                            echo "checked='checked'";
                        }
                        ?> id="hindi" value="hindi" onclick="site_language_select(this.value)">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container_radio">Marathi
                        <input type="radio" name="pub_site_language" <?php
                        if ($language_selected == 'marathi') {
                            echo "checked='checked'";
                        }
                        ?> id="marathi" value="marathi" onclick="site_language_select(this.value)">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container_radio">Bengali
                        <input type="radio" name="pub_site_language" <?php
                        if ($language_selected == 'bengali') {
                            echo "checked='checked'";
                        }
                        ?> id="bengali" value="bengali" onclick="site_language_select(this.value)">
                        <span class="checkmark"></span>
                    </label>



                </li>
            </ul>
        </div>
    </div> 
</div>




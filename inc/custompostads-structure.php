<?php
defined('ABSPATH') || die("Nice try");
global $wpdb;


$postads = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}vfcustompostads WHERE id ='1'", OBJECT );
foreach ($postads as $key => $value) {
    $a = $postads[$key]->advertiserinfo;
    $b = $postads[$key]->advertiserimg;
    $c = $postads[$key]->pagename;
    $d = $postads[$key]->sponsorname;
    $e = $postads[$key]->messageads;
    $f = $postads[$key]->imageshow;
    $g = $postads[$key]->imgurl;
    $h = $postads[$key]->calltoaction;
    $i = $postads[$key]->ctacustom;
    $j = $postads[$key]->linkshow;
    $k = $postads[$key]->linkheadline;
    $l = $postads[$key]->linkdescr;
    $m = $postads[$key]->linkcaption;
    $n = $postads[$key]->applyonlyfor;
    $o = $postads[$key]->postcategory;
    $p = $postads[$key]->adwidth;
    $q = $postads[$key]->adheight;
    $r = $postads[$key]->linkurl;
    $s = $postads[$key]->setasactive;
    $t = $postads[$key]->addad;
}

?>
<script>
jQuery(function($){
    $(document).ready(function(){
        if('<?php echo esc_html($c); ?>'!=''){
            $('#changeme1').html('<?php echo esc_html($c); ?>');
        }
        if('<?php echo esc_html($e); ?>'!=''){
            $('#changeme2').html('<?php echo esc_html($e); ?>');
        }
        if('<?php echo esc_html($h); ?>'!=''){
            $('#changeme3').html('<?php echo esc_html($h); ?>');
        }
        if('<?php echo esc_html($i); ?>'!=''){
            if('<?php echo esc_html($h); ?>'=='custom'){
                $('#changeme3').html('<?php echo esc_html($i); ?>');
                $('#onlybtname').show();
            }else{
                $('#onlybtname').hide();
            }
        }
        
        if('<?php echo esc_html($k); ?>'!=''){
            $('#changeme4').html('<?php echo esc_html($k); ?>');
        }
        if('<?php echo esc_html($l); ?>'!=''){
            $('#changeme5').html('<?php echo esc_html($l); ?>');
        }
        if('<?php echo esc_html($m); ?>'!=''){
            $('#changeme6').html('<?php echo esc_html($m); ?>');
        }
        if('<?php echo esc_html($d); ?>'!=''){
            $('#changeme7').html('<?php echo esc_html($d); ?>');
        }
        if('<?php echo esc_html($b); ?>'!=''){
            $('#changeimg1').attr('src','<?php echo esc_html($b); ?>');
        }
        if('<?php echo esc_html($g); ?>'!=''){
            $('#changeimg2').attr('src','<?php echo esc_html($g); ?>');
        }

        if('<?php echo esc_html($a); ?>'!=''){
            if(<?php echo esc_html($a)=='no'?'true':'false'; ?>){
                $('.head_prev').hide();
            }else{
                $('.head_prev').show();
            }
        }
        if('<?php echo esc_html($j); ?>'!=''){
            if(<?php echo esc_html($j)=='no'?'true':'false'; ?>){
                $('.under_spon').hide();
            }else{
                $('.under_spon').show();
            }
        }

        if('<?php echo esc_html($f); ?>'!=''){
            if(<?php echo esc_html($f)=='no'?'true':'false'; ?>){
                $('.img_result').hide();
            }else{
                $('.img_result').show();
            }
        }

    });
});
</script>
<div class="wrap" id="vfcustompostads-structure">

    <div id="social_exemp_rek">
        <section id="head_social">
            <div class="container">
                <div class="txt_area">
                    <h1>Design Your<br>Custom Ad</h1>
                </div>
                <div class="image_area">
                    <img width="476" height="359"
                        src="<?php echo VFCPSADS_PLUGIN_URL; ?>assets/images/head_img.svg">
                </div>
            </div>
        </section>

        <section id="option_view">
            <div class="container">
                <div class="main_options">
                    <form action="javascript:void(0)" method="get" id="mycustomform">
                         <?php wp_nonce_field('mycustompostadssave','cpads-nonce'); ?>
                        <div class="website_click">
                            <div class="row_option title_options">
                                <h2>Website Clicks</h2>
                                <p>Send people to important sections of your website, or get them to take specific actions
                                    such as buying a product.</p>
                            </div>
                            <div class="row_option three_option">
                                <div class="option_element_prev active" data-spontype="0">
                                    <div class="spon_prev_img">
                                        <img width="125" height="137"
                                            src="<?php echo VFCPSADS_PLUGIN_URL; ?>assets/images/3spon_prev.svg" class=" lazyloaded">
                                    </div>
                                    <p>Image</p>
                                </div>
                                <div class="option_element_prev" data-spontype="1">
                                    <div class="spon_prev_img">
                                        <span class="onlyinpremium">PREMIUM</span>
                                        <img width="108" height="95"
                                            src="<?php echo VFCPSADS_PLUGIN_URL; ?>assets/images/3video_prev.svg" class=" lazyloaded">
                                    </div>
                                    <p>Video</p>
                                </div>
                                <div class="option_element_prev" data-spontype="2">
                                    <div class="spon_prev_img">
                                    <span class="onlyinpremium">PREMIUM</span>
                                    <img width="97" height="103"
                                    src="<?php echo VFCPSADS_PLUGIN_URL; ?>assets/images/3carusel_prev.svg" class=" lazyloaded">
                                </div>
                                <p>Carousel</p>
                            </div>
                            <div class="option_element_prev" data-spontype="3">
                                <div class="spon_prev_img">
                                        <span class="onlyinpremium">PREMIUM</span>
                                        <img width="125" height="137"
                                            src="<?php echo VFCPSADS_PLUGIN_URL; ?>assets/images/3spon_prev.svg" class=" lazyloaded">
                                    </div>
                                    <p>Event</p>
                                </div>
                            </div>
                            <div class="row_option advertiser_option">
                                <div class="label_text">
                                    <h3>Advertiser Info</h3>
                                    <div class="button b2" id="button-10">
                                        <input type="checkbox" <?php echo esc_html($a)=='no'?'checked':''; ?> class="checkbox" id="advertiserinfo">
                                        <div class="knobs">
                                            <span>YES</span>
                                        </div>
                                        <div class="layer"></div>
                                    </div>
                                    <input type="hidden" name="advertiserinfo" value="<?php echo esc_html($a)!=''?esc_html($a):'yes'; ?>">
                                    <p>Specify your ads will be associated with.</p>
                                </div>
                                <div class="photo_element">
                                    <div class="file_input">
                                        <label id="cs-image" for="imgInp">
                                            <figure>
                                                <svg viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.5326 8.74859C14.6554 9.87139 14.6554 11.6918 13.5326 12.8146C12.4098 13.9374 10.5894 13.9374 9.46661 12.8146C8.34381 11.6918 8.34381 9.87139 9.46661 8.74859C10.5894 7.6258 12.4098 7.6258 13.5326 8.74859"
                                                        fill="white"></path>
                                                    <path
                                                        d="M20.1249 2.8751H18.1385L16.7002 0H6.29839L4.86152 2.87651L2.87788 2.88004C1.29645 2.88287 0.00908784 4.1716 0.00772231 5.75373L0 17.2498C0 18.8355 1.28944 20.1257 2.8751 20.1257H20.1249C21.7106 20.1257 23 18.8362 23 17.2506V5.75015C23 4.16454 21.7106 2.8751 20.1249 2.8751V2.8751ZM11.4996 16.5318C8.32903 16.5318 5.74945 13.9522 5.74945 10.7816C5.74945 7.61095 8.32903 5.03137 11.4996 5.03137C14.6703 5.03137 17.2498 7.61095 17.2498 10.7816C17.2498 13.9522 14.6703 16.5318 11.4996 16.5318V16.5318Z"
                                                        fill="white"></path>
                                                </svg>
                                            </figure>
                                        </label>
                                    </div>
                                    <input type="hidden" name="advrimg" value="<?php echo esc_html($b)!=''?esc_html($b):''; ?>">
                                    <div class="text_input">
                                        <input type="text" name="page_name" placeholder="Page Name" value="<?php echo esc_html($c)!=''?esc_html($c):''; ?>" >
                                    </div>
                                    <input type="text" name="sponsored" value="<?php echo esc_html($d)!=''?esc_html($d):''; ?>" placeholder="Sponsored" >
                                </div>
                            </div>
                            <div class="row_option message_option">
                                <div class="label_text">
                                    <h3>Message</h3>
                                </div>
                                <div class="textarea_element">
                                    <textarea placeholder="Message" name="mymessage"><?php echo esc_html($e)!=''?esc_html($e):''; ?></textarea>
                                </div>
                            </div>
                            <div class="row_option image_option">
                                <div class="label_text">
                                    <h3>Image</h3>
                                    <div class="button b2" id="button-10">
                                        <input type="checkbox" <?php echo esc_html($f)=='no'?'checked':''; ?> class="checkbox" id="imageinfo">
                                        <div class="knobs">
                                            <span>YES</span>
                                        </div>
                                        <div class="layer"></div>
                                    </div>
                                    <input type="hidden" name="imagebkshow" value="<?php echo esc_html($f)!=''?esc_html($f):'yes'; ?>">
                                    <p>Compelling images will encourage your target audience to engage.</p>
                                </div>
                                <div class="photo_area mina_photo_area">
                                    <label id="cs-image2" for="main_photo">
                                        <figure>
                                            <svg viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.1237 18.1573C26.1252 20.1588 26.1252 23.4038 24.1237 25.4053C22.1222 27.4068 18.8771 27.4068 16.8756 25.4053C14.8741 23.4038 14.8741 20.1588 16.8756 18.1573C18.8771 16.1558 22.1222 16.1558 24.1237 18.1573"
                                                    fill="#B2CFFF"></path>
                                                <path
                                                    d="M35.8749 7.68719H32.3338L29.77 2.56201H11.2276L8.66619 7.68971L5.13013 7.696C2.31107 7.70104 0.0162001 9.99834 0.0137659 12.8187L0 33.3117C0 36.1384 2.29856 38.4382 5.12518 38.4382H35.8749C38.7015 38.4382 41.0001 36.1396 41.0001 33.313V12.8123C41 9.98575 38.7014 7.68719 35.8749 7.68719V7.68719ZM20.4994 32.0317C14.8474 32.0317 10.249 27.4333 10.249 21.7813C10.249 16.1294 14.8474 11.531 20.4994 11.531C26.1513 11.531 30.7497 16.1294 30.7497 21.7813C30.7497 27.4333 26.1513 32.0317 20.4994 32.0317V32.0317Z"
                                                    fill="#B2CFFF"></path>
                                            </svg>
                                        </figure>
                                        <span><span style="color: #B2CFFF;">Click</span> to upload or select an image</span>
                                    </label>
                                </div>
                                <input type="hidden" name="mainimg" value="<?php echo esc_html($g)!=''?esc_html($g):''; ?>">
                                <div class="photo_area carousel_items" style="display: none;">
                                    <div class="label_text ">
                                        <h3>Card 1</h3>
                                    </div>
                                    <div class="carousel_items_row">
                                        <div class="upl_carousel_photo">
                                            <input type="file" name="main_photo" id="main_photo_carusel_1">
                                            <label for="main_photo_carusel_1">
                                                <figure>
                                                    <svg viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24.1237 18.1573C26.1252 20.1588 26.1252 23.4038 24.1237 25.4053C22.1222 27.4068 18.8771 27.4068 16.8756 25.4053C14.8741 23.4038 14.8741 20.1588 16.8756 18.1573C18.8771 16.1558 22.1222 16.1558 24.1237 18.1573"
                                                            fill="#B2CFFF"></path>
                                                        <path
                                                            d="M35.8749 7.68719H32.3338L29.77 2.56201H11.2276L8.66619 7.68971L5.13013 7.696C2.31107 7.70104 0.0162001 9.99834 0.0137659 12.8187L0 33.3117C0 36.1384 2.29856 38.4382 5.12518 38.4382H35.8749C38.7015 38.4382 41.0001 36.1396 41.0001 33.313V12.8123C41 9.98575 38.7014 7.68719 35.8749 7.68719V7.68719ZM20.4994 32.0317C14.8474 32.0317 10.249 27.4333 10.249 21.7813C10.249 16.1294 14.8474 11.531 20.4994 11.531C26.1513 11.531 30.7497 16.1294 30.7497 21.7813C30.7497 27.4333 26.1513 32.0317 20.4994 32.0317V32.0317Z"
                                                            fill="#B2CFFF"></path>
                                                    </svg>
                                                </figure>
                                                <span><span style="color: #B2CFFF;">Attach Image</span></span>
                                            </label>
                                        </div>
                                        <div class="text_inputs">
                                            <input type="text" name="headline_1" placeholder="Headline"
                                                id="change_head_line_1" onkeyup="change_head_line_1();">
                                            <input type="text" name="description_1" placeholder="Description"
                                                id="change_head_line_2" onkeyup="change_head_line_2();">
                                            <select id="change_head_line_3" onchange="change_head_line_3();">
                                                <option value="">None</option>
                                                <option value="Apply Now">Apply Now</option>
                                                <option value="Book Now">Book Now</option>
                                                <option value="Contact Us">Contact Us</option>
                                                <option value="Donate Now">Donate Now</option>
                                                <option value="Download">Download</option>
                                                <option value="Install Now">Install Now</option>
                                                <option value="Use App">Use App</option>
                                                <option value="Learn More">Learn More</option>
                                                <option value="Shop Now">Shop Now</option>
                                                <option value="Sign Up">Sign Up</option>
                                                <option value="Watch More">Watch More</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="label_text ">
                                        <h3>Card 2</h3>
                                    </div>
                                    <div class="carousel_items_row">
                                        <div class="upl_carousel_photo">
                                            <input type="file" name="main_photo" id="main_photo_carusel_2">
                                            <label for="main_photo_carusel_2">
                                                <figure>
                                                    <svg viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M24.1237 18.1573C26.1252 20.1588 26.1252 23.4038 24.1237 25.4053C22.1222 27.4068 18.8771 27.4068 16.8756 25.4053C14.8741 23.4038 14.8741 20.1588 16.8756 18.1573C18.8771 16.1558 22.1222 16.1558 24.1237 18.1573"
                                                            fill="#B2CFFF"></path>
                                                        <path
                                                            d="M35.8749 7.68719H32.3338L29.77 2.56201H11.2276L8.66619 7.68971L5.13013 7.696C2.31107 7.70104 0.0162001 9.99834 0.0137659 12.8187L0 33.3117C0 36.1384 2.29856 38.4382 5.12518 38.4382H35.8749C38.7015 38.4382 41.0001 36.1396 41.0001 33.313V12.8123C41 9.98575 38.7014 7.68719 35.8749 7.68719V7.68719ZM20.4994 32.0317C14.8474 32.0317 10.249 27.4333 10.249 21.7813C10.249 16.1294 14.8474 11.531 20.4994 11.531C26.1513 11.531 30.7497 16.1294 30.7497 21.7813C30.7497 27.4333 26.1513 32.0317 20.4994 32.0317V32.0317Z"
                                                            fill="#B2CFFF"></path>
                                                    </svg>
                                                </figure>
                                                <span><span style="color: #B2CFFF;">Attach Image</span></span>
                                            </label>
                                        </div>
                                        <div class="text_inputs">
                                            <input type="text" name="headline_1" placeholder="Headline"
                                                id="change_head_line_4" onkeyup="change_head_line_4();">
                                            <input type="text" name="description_1" placeholder="Description"
                                                id="change_head_line_5" onkeyup="change_head_line_5();">
                                            <select id="change_head_line_6" onchange="change_head_line_6();">
                                                <option value="">None</option>
                                                <option value="Apply Now">Apply Now</option>
                                                <option value="Book Now">Book Now</option>
                                                <option value="Contact Us">Contact Us</option>
                                                <option value="Donate Now">Donate Now</option>
                                                <option value="Download">Download</option>
                                                <option value="Install Now">Install Now</option>
                                                <option value="Use App">Use App</option>
                                                <option value="Learn More">Learn More</option>
                                                <option value="Shop Now">Shop Now</option>
                                                <option value="Sign Up">Sign Up</option>
                                                <option value="Watch More">Watch More</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row_option cta_option">
                                <div class="label_text">
                                    <h3>Call to Action</h3>
                                    <p>Encourage people to click with an explicit call to action button.</p>
                                </div>
                                <div class="dropdown_element">
                                    <select name="vfselectone" >
                                        <option value="">None</option>
                                        <option value="Apply Now" <?php echo esc_html($h)=='Apply Now'?'selected':''; ?> >Apply Now</option>
                                        <option value="Book Now" <?php echo esc_html($h)=='Book Now'?'selected':''; ?> >Book Now</option>
                                        <option value="Contact Us" <?php echo esc_html($h)=='Contact Us'?'selected':''; ?> >Contact Us</option>
                                        <option value="Donate Now" <?php echo esc_html($h)=='Donate Now'?'selected':''; ?> >Donate Now</option>
                                        <option value="Download" <?php echo esc_html($h)=='Download'?'selected':''; ?> >Download</option>
                                        <option value="Install Now" <?php echo esc_html($h)=='Install Now'?'selected':''; ?> >Install Now</option>
                                        <option value="Use App" <?php echo esc_html($h)=='Use App'?'selected':''; ?> >Use App</option>
                                        <option value="Learn More" <?php echo esc_html($h)=='Learn More'?'selected':''; ?> >Learn More</option>
                                        <option value="Shop Now" <?php echo esc_html($h)=='Shop Now'?'selected':''; ?> >Shop Now</option>
                                        <option value="Sign Up" <?php echo esc_html($h)=='Sign Up'?'selected':''; ?> >Sign Up</option>
                                        <option value="Watch More" <?php echo esc_html($h)=='Watch More'?'selected':''; ?> >Watch More</option>
                                        <option value="custom" <?php echo esc_html($h)=='custom'?'selected':''; ?> >Custom</option>
                                    </select>
                                    <input type="text" value="<?php echo esc_html($i)!=''?esc_html($i):''; ?>" name="custombtname" id="onlybtname" style="display:none;" placeholder="Custom Button Name Here">
                                </div>
                            </div>
                            <div class="row_option link_option">
                                <div class="label_text">
                                    <h3>Link</h3>
                                    <div class="button b2" id="button-10">
                                        <input type="checkbox" <?php echo esc_html($j)=='no'?'checked':''; ?> class="checkbox" id="linkinfo">
                                        <div class="knobs">
                                            <span>YES</span>
                                        </div>
                                        <div class="layer"></div>
                                    </div>
                                    <input type="hidden" name="linkshow" value="<?php echo esc_html($j)!=''?esc_html($j):'yes'; ?>">
                                    <p>Write a descriptive headline, description and caption for your URL.</p>
                                </div>
                                <div class="dropdown_element">
                                    <input type="text" name="link_1" placeholder="Link Headline" value="<?php echo esc_html($k)!=''?esc_html($k):''; ?>" >
                                    <input type="text" name="link_2" placeholder="Link Description" value="<?php echo esc_html($l)!=''?esc_html($l):''; ?>" >
                                    <input type="text" name="link_3" placeholder="Link Caption" value="<?php echo esc_html($m)!=''?esc_html($m):''; ?>" >
                                </div>
                            </div>

                            <!-- Second options -->

                            <div class="row_option advertiser_option">
                                <div class="label_text">
                                    <h3>Actions Info</h3>
                                    <br>
                                </div>
                                <div class="wpactionsme">
                                    <label for="">Apply Only For <abbr class="tooltip tooltip--right" data-tooltip="Select where you want to show the ads!"><svg height="10px" id="Capa_1" style="enable-background:new 0 0 91.999 92;" version="1.1" viewBox="0 0 91.999 92" width="10px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.385,0.004C19.982,0.344-0.334,21.215,0.004,46.619c0.34,25.393,21.209,45.715,46.611,45.377  c25.398-0.342,45.718-21.213,45.38-46.615C91.655,19.986,70.785-0.335,45.385,0.004z M45.249,74l-0.254-0.004  c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937  C51.903,71.346,49.122,74,45.249,74z M61.704,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938  c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.429l0.031-0.907  c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936  c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993  c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.935l0.02-0.477  c0.285-6.769,2.701-11.643,7.178-14.487C37.946,18.918,41.446,18,45.53,18c5.346,0,9.859,1.299,13.412,3.861  c3.6,2.596,5.426,6.484,5.426,11.556C64.368,36.254,63.472,38.919,61.704,41.341z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></abbr></label>
                                    <select name="applyonlyfor" id="">
                                        <option value="page" <?php echo esc_html($n)=='page'?'selected':''; ?> >Pages</option>
                                        <option value="post" <?php echo esc_html($n)=='post'?'selected':''; ?> >Posts</option>
                                        <option value="both" <?php echo esc_html($n)=='both'?'selected':''; ?> >Both (Pages & Post)</option>
                                    </select>



                                    <label for="">Post Category <abbr class="tooltip tooltip--right" data-tooltip="It applicable if post type selected! This feature help you to show ads only perticular category!"><svg height="10px" id="Capa_1" style="enable-background:new 0 0 91.999 92;" version="1.1" viewBox="0 0 91.999 92" width="10px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.385,0.004C19.982,0.344-0.334,21.215,0.004,46.619c0.34,25.393,21.209,45.715,46.611,45.377  c25.398-0.342,45.718-21.213,45.38-46.615C91.655,19.986,70.785-0.335,45.385,0.004z M45.249,74l-0.254-0.004  c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937  C51.903,71.346,49.122,74,45.249,74z M61.704,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938  c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.429l0.031-0.907  c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936  c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993  c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.935l0.02-0.477  c0.285-6.769,2.701-11.643,7.178-14.487C37.946,18.918,41.446,18,45.53,18c5.346,0,9.859,1.299,13.412,3.861  c3.6,2.596,5.426,6.484,5.426,11.556C64.368,36.254,63.472,38.919,61.704,41.341z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></abbr></label>
                                    <select name="postcategory" id="">
                                    <option value="">Select category</option>
                                    <option value="all" <?php echo esc_html($o)=='all'?'selected':''; ?> >All categories</option>
                                    <?php 
                                        $categories = get_categories();
                                        foreach($categories as $category) {
                                          $isselect =  $o==$category->slug?'selected':'';
                                        echo '<option value="' . esc_html($category->slug) . '" '.esc_html($isselect).' >' . esc_html($category->name) . '</option>';
                                        }
                                    ?>
                                    </select>
                                    <div class="vfadjusthalf">
                                        <label for="">Ad Width <abbr class="tooltip tooltip--right" data-tooltip="Your ad Size default as Shown in Preview. Custom width height has not been reflect in preview, you can check it to the live pages.!"><svg height="10px" id="Capa_1" style="enable-background:new 0 0 91.999 92;" version="1.1" viewBox="0 0 91.999 92" width="10px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.385,0.004C19.982,0.344-0.334,21.215,0.004,46.619c0.34,25.393,21.209,45.715,46.611,45.377  c25.398-0.342,45.718-21.213,45.38-46.615C91.655,19.986,70.785-0.335,45.385,0.004z M45.249,74l-0.254-0.004  c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937  C51.903,71.346,49.122,74,45.249,74z M61.704,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938  c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.429l0.031-0.907  c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936  c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993  c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.935l0.02-0.477  c0.285-6.769,2.701-11.643,7.178-14.487C37.946,18.918,41.446,18,45.53,18c5.346,0,9.859,1.299,13.412,3.861  c3.6,2.596,5.426,6.484,5.426,11.556C64.368,36.254,63.472,38.919,61.704,41.341z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></abbr></label>
                                        <input type="text" name="adwidth" value="<?php echo esc_html($p)!=''?esc_html($p):''; ?>"  placeholder="Ex: 20px OR 20%" >
                                    </div>
                                    
                                    <div class="vfadjusthalf">
                                        <label for="">Ad Height</label>
                                        <input type="text" name="adheight" value="<?php echo esc_html($q)!=''?esc_html($q):''; ?>" placeholder="Ex: 20px OR 20%" >
                                    </div>

                                    <label for="">Add Ad <abbr class="tooltip tooltip--right" data-tooltip="Where your ads has been shows on page or post!"><svg height="10px" id="Capa_1" style="enable-background:new 0 0 91.999 92;" version="1.1" viewBox="0 0 91.999 92" width="10px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.385,0.004C19.982,0.344-0.334,21.215,0.004,46.619c0.34,25.393,21.209,45.715,46.611,45.377  c25.398-0.342,45.718-21.213,45.38-46.615C91.655,19.986,70.785-0.335,45.385,0.004z M45.249,74l-0.254-0.004  c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937  C51.903,71.346,49.122,74,45.249,74z M61.704,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938  c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.429l0.031-0.907  c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936  c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993  c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.935l0.02-0.477  c0.285-6.769,2.701-11.643,7.178-14.487C37.946,18.918,41.446,18,45.53,18c5.346,0,9.859,1.299,13.412,3.861  c3.6,2.596,5.426,6.484,5.426,11.556C64.368,36.254,63.472,38.919,61.704,41.341z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></abbr></label>
                                    <select name="addad" id="">
                                        <option value="after" <?php echo esc_html($t)=='after'?'selected':''; ?> >After</option>
                                        <option value="before" <?php echo esc_html($t)=='before'?'selected':''; ?> >Before</option>
                                        <option value="both" <?php echo esc_html($t)=='both'?'selected':''; ?> >Both (After & Before)</option>
                                    </select>

                                    <label for="">Link/Url <abbr class="tooltip tooltip--right" data-tooltip="If you want to redirect your user to a different url when they click on your ads!"><svg height="10px" id="Capa_1" style="enable-background:new 0 0 91.999 92;" version="1.1" viewBox="0 0 91.999 92" width="10px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.385,0.004C19.982,0.344-0.334,21.215,0.004,46.619c0.34,25.393,21.209,45.715,46.611,45.377  c25.398-0.342,45.718-21.213,45.38-46.615C91.655,19.986,70.785-0.335,45.385,0.004z M45.249,74l-0.254-0.004  c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937  C51.903,71.346,49.122,74,45.249,74z M61.704,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938  c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.429l0.031-0.907  c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936  c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993  c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.935l0.02-0.477  c0.285-6.769,2.701-11.643,7.178-14.487C37.946,18.918,41.446,18,45.53,18c5.346,0,9.859,1.299,13.412,3.861  c3.6,2.596,5.426,6.484,5.426,11.556C64.368,36.254,63.472,38.919,61.704,41.341z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></abbr></label>
                                    <input type="text" name="linkurl" value="<?php echo esc_html($r)!=''?esc_html($r):''; ?>" placeholder="Ex: https://www.abc.com/go">
                                </div>
                            </div>

                            </div>
                            <div class="row_option button_options clear_fields">
                            <label for="">Set As Active</label>
                            <div class="button b2" id="button-10">
                                <input type="checkbox" <?php echo esc_html($s)=='no' || esc_html($s)==''?'checked':''; ?> class="checkbox" id="setactive">
                                <div class="knobs">
                                    <span>YES</span>
                                </div>
                                <div class="layer"></div>
                            </div>
                            <input type="hidden" name="setactive" value="<?php echo esc_html($s)!=''?esc_html($s):'no'; ?>">
                            <br>
                            <br>
                            <br>
                            <button id="updatemyads">Update</button>
                        </div>
                    </form>
                </div>
                <div class="result_options">
                    <div class="result_parent wclick_result">
                        <div class="headline">
                        <a class="onlyinpremium" style="position: relative;display: inline-block;" href="mailto:vforminfo@gmail.com">GET PREMIUM BENEFITS NOW</a>
                        <label for="">Why Premium <abbr class="tooltip tooltip--right" data-tooltip="Add Multiple Ads, Video Ads, Carousel Ads, Event Ads and Many more feature! Just email us at : vforminfo@gmail.com for any query | feedback | Premium | Addon."><svg height="10px" id="Capa_1" style="enable-background:new 0 0 91.999 92;" version="1.1" viewBox="0 0 91.999 92" width="10px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M45.385,0.004C19.982,0.344-0.334,21.215,0.004,46.619c0.34,25.393,21.209,45.715,46.611,45.377  c25.398-0.342,45.718-21.213,45.38-46.615C91.655,19.986,70.785-0.335,45.385,0.004z M45.249,74l-0.254-0.004  c-3.912-0.116-6.67-2.998-6.559-6.852c0.109-3.788,2.934-6.538,6.717-6.538l0.227,0.004c4.021,0.119,6.748,2.972,6.635,6.937  C51.903,71.346,49.122,74,45.249,74z M61.704,41.341c-0.92,1.307-2.943,2.93-5.492,4.916l-2.807,1.938  c-1.541,1.198-2.471,2.325-2.82,3.434c-0.275,0.873-0.41,1.104-0.434,2.88l-0.004,0.451H39.429l0.031-0.907  c0.131-3.728,0.223-5.921,1.768-7.733c2.424-2.846,7.771-6.289,7.998-6.435c0.766-0.577,1.412-1.234,1.893-1.936  c1.125-1.551,1.623-2.772,1.623-3.972c0-1.665-0.494-3.205-1.471-4.576c-0.939-1.323-2.723-1.993-5.303-1.993  c-2.559,0-4.311,0.812-5.359,2.478c-1.078,1.713-1.623,3.512-1.623,5.35v0.457H27.935l0.02-0.477  c0.285-6.769,2.701-11.643,7.178-14.487C37.946,18.918,41.446,18,45.53,18c5.346,0,9.859,1.299,13.412,3.861  c3.6,2.596,5.426,6.484,5.426,11.556C64.368,36.254,63.472,38.919,61.704,41.341z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></abbr></label>
                            <br>
                            <h2>Preview</h2>

                        </div>

                        <div class="resultprev">
                            <div class="result_row head_prev">
                                <div class="prev_icons">
                                    <div class="logo">
                                        <img width="300" height="300" id="changeimg1"
                                            src="<?php echo VFCPSADS_PLUGIN_URL; ?>assets/images/ylogo.svg" class=" lazyloaded">
                                    </div>
                                    <div class="txt_prev">
                                        <h4 id="changeme1">Your Page Here</h4>
                                        <p id="changeme7">Sponsored</p>
                                    </div>
                                </div>

                            </div>
                            <div class="result_row">
                                <div class="txt_msg wrapped-textarea-value" id="changeme2">Your Message Here</div>
                            </div>
                            <div class="prev_body">
                                <div class="prev_overflow">
                                    <div class="result_row msg_area msg_first">
                                        <div class="img_result">
                                            <img width="1200" height="628" id="changeimg2"
                                                src="<?php echo VFCPSADS_PLUGIN_URL; ?>assets/images/yimg.svg" class=" lazyloaded">
                                        </div>
                                        <div class="under_spon">
                                            <div class="spon_row">
                                                <h5 id="changeme4">Your Headline Here</h5>
                                                <p id="changeme5">Your Description Here</p>
                                            </div>
                                            <div class="spon_footer">
                                                <p id="changeme6">Your Caption Here</p>
                                                <button id="changeme3">Learn More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



</div>

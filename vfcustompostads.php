<?php
/*
 * Plugin Name:       Custom Post Ads
 * Plugin URI:        /
 * Description:       Create Your Custom post ads after paragraphs of your posts.
 * Version:           1.0
 * Requires at least: 5.6
 * Author:            Vikas Ratudi
 * Author URI:        https://www.instagram.com/ratudi_vikas/?r=nametag
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       vfcustompostads
 * Tags:              ads, custom ads, post ads, wordpress ads, google ads, adwrods, facebook ads
*/

defined('ABSPATH') || die("You Can't Access this File Directly");

define('VFCPSADS_PLUGIN_PATH',plugin_dir_path(__FILE__));
define('VFCPSADS_PLUGIN_URL',plugin_dir_url(__FILE__));
define('VFCPSADS_PLUGIN_FILE', __FILE__);
include VFCPSADS_PLUGIN_PATH."inc/db.php";


	add_action('wp_enqueue_scripts','vfcpsads_wp_scripts');

	function vfcpsads_wp_scripts(){
		wp_enqueue_style('vfcpsads_dev_style', VFCPSADS_PLUGIN_URL."assets/css/frontendads.css");
		// wp_enqueue_script('jquery');
		// wp_localize_script('vfcpsads_dev_script','ajax_object',admin_url("admin-ajax.php"));
	}

	add_action('admin_enqueue_scripts','vfcpsads_admin_enqueue_scripts');

	function vfcpsads_admin_enqueue_scripts(){
			wp_enqueue_script('jquery');
			wp_enqueue_media();

		// wp_enqueue_style('vfcpsads_dev_style1', VFCPSADS_PLUGIN_URL."assets/css/style.css");
			wp_enqueue_script('vfcpsads_dev_script', VFCPSADS_PLUGIN_URL."assets/js/custom.js",
				array(),'1.0.0',false);

			wp_localize_script('vfcpsads_dev_script','ajax_object',admin_url("admin-ajax.php"));
	}

	//ADMIN MENU
	add_action('admin_menu','vfcpsads_plugin_menu');
	function vfcpsads_plugin_menu(){

		add_menu_page('vfcustompostads','Custom Post Ads','manage_options','vfcustompostads','vfcpsads_options_func','dashicons-clock',$position=null);
		add_submenu_page('vfcustompostads','More','More','manage_options','vfcustompostads-more','vfcpsads_comingsoon_func');

	}

	function vfcpsads_options_func(){

		include VFCPSADS_PLUGIN_PATH."inc/custompostads-structure.php";
		wp_enqueue_style('vfcpsads_dev_style', VFCPSADS_PLUGIN_URL."assets/css/style.css");

		
	}

	function vfcpsads_comingsoon_func(){
		include VFCPSADS_PLUGIN_PATH."inc/vfcustompostads-cmsoon.php";
	}

	add_filter('the_content', 'vfcpsads_add');

	function vfcpsads_add($content) {
		
		global $wpdb;
		$postads = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}vfcustompostads where id='1'", OBJECT );
		foreach ($postads as $key => $value) {
			$a = $postads[$key]->advertiserinfo=='no'?'display:none;':'';
			$b = $postads[$key]->advertiserimg!=''?$postads[$key]->advertiserimg:VFCPSADS_PLUGIN_URL.'assets/images/ylogo.svg';
			$c = $postads[$key]->pagename!=''?$postads[$key]->pagename : 'Your Page Here';
			$d = $postads[$key]->sponsorname!=''?$postads[$key]->sponsorname : 'Sponsored';
			$e = $postads[$key]->messageads!=''?str_replace("\'","'",$postads[$key]->messageads): 'Your Message Here';
			$f = $postads[$key]->imageshow=='no'?'display:none;':'';
			$g = $postads[$key]->imgurl!=''? $postads[$key]->imgurl:VFCPSADS_PLUGIN_URL.'assets/images/yimg.svg';
			$h = $postads[$key]->calltoaction;
			$i = $postads[$key]->ctacustom;
			$j = $postads[$key]->linkshow=='no'?'display:none;':'';
			$k = $postads[$key]->linkheadline!=''? $postads[$key]->linkheadline:'Your Headline Here';
			$l = $postads[$key]->linkdescr!=''? $postads[$key]->linkdescr:'Your Description Here';
			$m = $postads[$key]->linkcaption!=''? $postads[$key]->linkcaption :'Your Caption Here';
			$n = $postads[$key]->applyonlyfor;
			$o = $postads[$key]->postcategory;
			$p = $postads[$key]->adwidth!=''? $postads[$key]->adwidth: '100%';
			$q = $postads[$key]->adheight!=''? $postads[$key]->adheight: '100%';;
			$r = $postads[$key]->linkurl;
			$s = $postads[$key]->setasactive;
			$t = $postads[$key]->addad;

			if($h=='custom'){
				$createbtn = $i;
			}else if($h!=''){
				$createbtn = $h;
			}else{
				$createbtn = 'Learn More';
			}
			if($r!=''){
				$url = "window.open('".$r."','_self')";
			}else{
				$url = '';
			}

			
		}

		if($s!='' && $s=='yes'){
			$fulldata = '<div id="option_view" onclick="'.$url.'" style="width:'.$p.'; height:'.$q.';"><div class="result_options"><div class="resultprev"><div class="result_row head_prev" style="'.$a.'"><div class="prev_icons"><div class="logo"><img width="300" height="300" id="changeimg1" src="'.$b.'" class=" lazyloaded"></div><div class="txt_prev"><h4 id="changeme1">'.$c.'</h4><p id="changeme7">'.$d.'</p></div></div></div><div class="result_row"><div class="txt_msg wrapped-textarea-value" id="changeme2">'.$e.'</div></div><div class="prev_body"><div class="prev_overflow"><div class="result_row msg_area msg_first"><div class="img_result" style="'.$f.'"><img width="1200" height="628" id="changeimg2" src="'.$g.'" class="lazyloaded"></div><div class="under_spon" style="'.$j.'"><div class="spon_row"><h5 id="changeme4">'.$k.'</h5><p id="changeme5">'.$l.'</p></div><div class="spon_footer"><p id="changeme6">'.$m.'</p><button id="changeme3">'.$createbtn.'</button></div></div></div></div></div></div></div></div>';

			if($n!=''){

				if($n=='post' || $n=='both'){
					if($o!='all'){
						$bool = has_category( $o, $post );
					}
				}

				if($n=='post'){
					if (is_single() && $bool==true){

						if($t=='after'){
							$fullcontent = $content . $fulldata;
						}else if($t=='before'){
							$fullcontent = $fulldata . $content;
						}else if($t=='both'){
							$fullcontent = $fulldata . $content . $fulldata;
						}else{
							$fullcontent = $content . $fulldata;
						}
			
						return $fullcontent;
			
					}else{
			
						return $content;
					
					}
				}else if($n=='page'){
					if (is_page()){
			
						if($t=='after'){
							$fullcontent = $content . $fulldata;
						}else if($t=='before'){
							$fullcontent = $fulldata . $content;
						}else if($t=='both'){
							$fullcontent = $fulldata . $content . $fulldata;
						}else{
							$fullcontent = $content . $fulldata;
						}
			
						return $fullcontent;
			
					}else{
			
						return $content;
					
					}
				}else{
				
						if($t=='after'){
							$fullcontent = $content . $fulldata;
						}else if($t=='before'){
							$fullcontent = $fulldata . $content;
						}else if($t=='both'){
							$fullcontent = $fulldata . $content . $fulldata;
						}else{
							$fullcontent = $content . $fulldata;
						}
			
					}

			}
		}else{
			return $content;
		}


	

	}

	// update
	add_action('wp_ajax_chkgroupedit','vfcpsads_edit');

	function vfcpsads_edit(){

		if(!isset($_REQUEST['cpads-nonce']) || !wp_verify_nonce($_REQUEST['cpads-nonce'],'mycustompostadssave') ){
			wp_send_json_error([
				'status'=>'0'
			]);
		}

		if($_REQUEST['param']=='save_vfcps'){

			global $wpdb;
			$prefix = $wpdb->prefix;
			$table = $prefix.'vfcustompostads';
			
			$data = array(
				"advertiserinfo"=>sanitize_text_field($_REQUEST['advertiserinfo']),
				"advertiserimg"=>sanitize_text_field($_REQUEST['advrimg']),
				"pagename"=>sanitize_text_field($_REQUEST['page_name']),
				"sponsorname"=>sanitize_text_field($_REQUEST['sponsored']),
				"messageads"=>sanitize_text_field($_REQUEST['mymessage']),
				"imageshow"=>sanitize_text_field($_REQUEST['imagebkshow']),
				"imgurl"=>sanitize_text_field($_REQUEST['mainimg']),
				"calltoaction"=>sanitize_text_field($_REQUEST['vfselectone']),
				"ctacustom"=>sanitize_text_field($_REQUEST['custombtname']),
				"linkshow"=>sanitize_text_field($_REQUEST['linkshow']),
				"linkheadline"=>sanitize_text_field($_REQUEST['link_1']),
				"linkdescr"=>sanitize_text_field($_REQUEST['link_2']),
				"linkcaption"=>sanitize_text_field($_REQUEST['link_3']),
				"applyonlyfor"=>sanitize_text_field($_REQUEST['applyonlyfor']),
				"postcategory"=>sanitize_text_field($_REQUEST['postcategory']),
				"adwidth"=>sanitize_text_field($_REQUEST['adwidth']),
				"adheight"=>sanitize_text_field($_REQUEST['adheight']),
				"linkurl"=>sanitize_text_field($_REQUEST['linkurl']),
				"setasactive"=>sanitize_text_field($_REQUEST['setactive']),
				"addad"=>sanitize_text_field($_REQUEST['addad']),
			);

			$where = array( 'id' => '1' );
			$wpdb->update($table, $data, $where);

			echo json_encode(array("status"=>1,"message"=>"Data inserted successful"));
		}
		wp_die();

	}
	// update

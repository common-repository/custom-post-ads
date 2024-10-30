<?php
defined('ABSPATH') || die("Nice try");


register_activation_hook(VFCPSADS_PLUGIN_FILE, function(){
	global $wpdb;

	$table_name = $wpdb->prefix . 'vfcustompostads';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id int(11) NOT NULL AUTO_INCREMENT,
		advertiserinfo varchar(50) NULL NULL,
		advertiserimg varchar(400) NULL NULL,
		pagename varchar(300) NULL NULL,
		sponsorname varchar(200) NULL NULL,
		messageads mediumtext NULL NULL,
		imageshow varchar(50) NULL NULL,
		imgurl mediumtext NULL NULL,
		calltoaction varchar(50) NULL NULL,
		ctacustom varchar(300) NULL NULL,
		linkshow varchar(50) NULL NULL,
		linkheadline varchar(400) NULL NULL,
		linkdescr mediumtext NULL NULL,
		linkcaption varchar(300) NULL NULL,
		applyonlyfor varchar(50) NULL NULL,
		postcategory varchar(100) NULL NULL,
		adwidth varchar(50) NULL NULL,
		adheight varchar(50) NULL NULL,
		linkurl varchar(300) NULL NULL,
		setasactive varchar(50) NULL NULL,
		addad varchar(50) NULL NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";


	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );


	global $wpdb;
	$table = $wpdb->prefix.'vfcustompostads';
	$data = array(
		"advertiserinfo"=>'',
		"advertiserimg"=>'',
		"pagename"=>'',
		"sponsorname"=>'',
		"messageads"=>'',
		"imageshow"=>'',
		"imgurl"=>'',
		"calltoaction"=>'',
		"ctacustom"=>'',
		"linkshow"=>'',
		"linkheadline"=>'',
		"linkdescr"=>'',
		"linkcaption"=>'',
		"applyonlyfor"=>'',
		"postcategory"=>'',
		"adwidth"=>'',
		"adheight"=>'',
		"linkurl"=>'',
		"setasactive"=>'',
		"addad"=>''
	);
	$wpdb->insert($table, $data);

});
register_deactivation_hook(VFCPSADS_PLUGIN_FILE,function(){
	// global $wpdb;
	// $prefix = $wpdb->prefix;
	// $table = $prefix.'vfcustompostads';
	// $sql = "TRUNCATE TABLE $table;";
	// $wpdb->query($sql);
});

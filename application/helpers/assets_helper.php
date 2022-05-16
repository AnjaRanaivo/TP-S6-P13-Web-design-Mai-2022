<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('assets_url')) {
	function assets_url($file) {
		return site_url("assets".$file);
	}
}


if ( ! function_exists('assetsBack_url')) {
	function assetsBack_url($file) {
		return site_url("assetsBack".$file);
	}
}
?>
<?php
/**
 * 
 * 
 * 
 */

/**
 * include Control...
 * include Model...
 * include View...
 */
set_include_path( get_include_path() . PATH_SEPARATOR . "/Core/" 	);

/*
 * 
 * 
 * */
function  __autoload( $class ){
	$file = 'class.' . $class . '.php';
	//if ( file_exists( $file ) ){
		require_once ( $file );
	//}
}
?>
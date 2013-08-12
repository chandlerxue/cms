<?php
/**
 * 
 * @author chandler
 * @dec set path
 */
class Initialize
{
	public  static function init(){
		set_include_path( get_include_path() .PATH_SEPARATOR . "Core" );
		set_include_path( get_include_path() .PATH_SEPARATOR . "Lib" );
		set_include_path( get_include_path() .PATH_SEPARATOR . "Model" );
		set_include_path( get_include_path() .PATH_SEPARATOR . "View" );
		if ( function_exists( 'showError' ) )
		{
			echo 'showError';
		}
		
		Error::init();
	}	
}
?>
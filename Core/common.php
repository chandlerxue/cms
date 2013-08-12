<?php
/*
 * @Author 道心空
 * @file commonphp
 * @dec system common function
 * 
 */

/*--------------------------------
 * @functionname showError
 * @dec 错误提示
 *-------------------------------－
 */
function showError( $val, $errornum )
{
	$error =array(
			'001' => 'error00001'
	);
	if ( in_array( $errornum , $error ) ){
		echo $errornum . ' :: ' . $val . $error[$errornum];
	}
			
}
?>
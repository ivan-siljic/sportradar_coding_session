<?php

class GeneralService
{
	function goBack()	// back-link
	{
		$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
		
		echo $url;
	}


	function checkMultiArr( $arr ) // checks if array is multidimensional, used in table.php
	{ 
	    rsort( $arr ); 
	    
	    return isset( $arr[0] ) && is_array( $arr[0] ); 
	} 
}

?>
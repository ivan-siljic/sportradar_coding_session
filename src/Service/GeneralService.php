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


	function calcAge($row)
	{
		$date_birth = new Datetime($row);

		$today = new Datetime();

		$diff = $today->diff($date_birth);

		$result = $diff->y;
		
		return $result;
	}
}


function goBack()	// back-link
{
	echo (new GeneralService)->goBack();
}

function checkMultiArr( $arr ) // checks if array is multidimensional, used in table.php
{ 
	   return (new GeneralService)->checkMultiArr( $arr ); 
} 

function calcAge($row)
{
	return (new GeneralService)->calcAge($row);
}

?>
<?php 

include_once 'Database.php';


class Country extends Database
{
	function fetchCountry()
	{
		$obj = new Database($table);
		
		$table = 'country';

		$result = $obj->read($table);

		return $result;
	}
}

?>
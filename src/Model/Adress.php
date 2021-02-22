<?php 

include_once 'Database.php';


class Adress extends Database
{
	function fetchAdress()
	{
		$obj = new Database($table);
		
		$table = 'adress';

		$result = $obj->read($table);

		return $result;
	}
}

?>
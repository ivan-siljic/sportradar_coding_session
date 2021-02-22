<?php 

include_once 'Database.php';


class League extends Database
{
	function fetchLeague()
	{
		$obj = new Database($table);
		
		$table = 'league';

		$result = $obj->read($table);

		return $result;
	}
}

?>
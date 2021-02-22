<?php 

include_once 'Database.php';


class Arena extends Database
{
	function fetchArena()
	{
		$obj = new Database($table);
		
		$table = 'arena';

		$result = $obj->read($table);

		return $result;
	}
}

?>
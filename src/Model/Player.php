<?php 

include_once 'Database.php';
						

class Player extends Database
{
	function fetchPlayersHome() 
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'player';

		$fields = '*';

		$join[]	 =	('JOIN team ON team.team_id = player._fk_team_id');
		$join[]	.=	('JOIN sport_event ON team.team_id = sport_event._fk_team_home');

		$where = 'WHERE sport_event_id = "' . $_GET['id'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}


	function fetchPlayersGuest() 
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'player';

		$fields = '*';

		$join[]  =	('JOIN team ON team.team_id = player._fk_team_id');
		$join[] .=	('JOIN sport_event ON team.team_id = sport_event._fk_team_guest');
		
		$where = 'WHERE sport_event_id = "' . $_GET['id'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}
}

?>
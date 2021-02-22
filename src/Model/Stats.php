<?php 

include_once 'Database.php';


class Stats extends Database
{
	function fetchStatsHome() 
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'stats';

		$fields = '*';

		$join[]  =	('JOIN team ON team.team_id = stats._fk_team_id');
		$join[] .=	('JOIN league ON league.league_id = stats._fk_league_id');
		$join[] .=	('JOIN sport_event ON team.team_id = sport_event._fk_team_home');

		$where = 'WHERE sport_event_id = "' . $_GET['id'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}	


	function fetchStatsGuest() 
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'stats';

		$fields = '*';

		$join[]  =	('JOIN team ON team.team_id = stats._fk_team_id');
		$join[] .=	('JOIN league ON league.league_id = stats._fk_league_id');
		$join[] .=	('JOIN sport_event ON team.team_id = sport_event._fk_team_guest');

		$where = 'WHERE sport_event_id = "' . $_GET['id'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}	
}

?>
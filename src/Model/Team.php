<?php

include_once 'Database.php';


class Team extends Database
{
	function fetchTeams($sport)		// $sport variable to use teams sidebar without GET from sport sidebar
	{
		$obj = new Database($table, $fields, $join, $where, $orderBy);
		
		$table = 'team';

		$fields = 'team_id, team_name';

		$join[]  = ('JOIN league ON team._fk_league_id = league.league_id');
		$join[] .= ('JOIN sport ON league._fk_sport_id = sport.sport_id');

		$sport = isset($sport) ? $sport : $_GET['sport'];

		$where = 'WHERE sport.sport_name = "' . $sport . '"';

		$orderBy = 'ORDER BY team_name';

		$result = $obj->read($table, $fields, $join, $where, $orderBy);

		return $result;
	}
}

?>
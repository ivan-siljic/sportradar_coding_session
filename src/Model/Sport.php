<?php 

include_once 'Database.php';


class Sport extends Database
{
	function fetchSport()
	{
		$obj = new Database($table, $fields, $orderBy);
		
		$table = 'sport';

		$fields = 'sport_name';

		$orderBy = 'ORDER BY sport_name';

		$result = $obj->read($table, $fields, $orderBy);

		return $result;
	}

	function fetchSportOfTeam()
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'sport';

		$fields = 'sport_name';


		$join[] = ('JOIN league ON sport.sport_id = league._fk_sport_id');

		$join[] .= ('JOIN team ON league.league_id = team._fk_league_id');
		
				
		$where = 'WHERE team.team_name = "' . $_GET['team'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}
}

?>
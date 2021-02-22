<?php

include_once 'Database.php';

class SportEvent extends Database
{
	function fetchSportEvent() 
	{
		$obj = new Database();
		
		$table = 'sport_event';

		$fields[]  = ('sport_event.sport_event_id, sport_event.start_date_time');
		$fields[] .= ('sport.sport_name');
		$fields[] .= ('t.team_name home, f.team_name guest');

		$join[]  = ('JOIN team t ON t.team_id = sport_event._fk_team_home');
		$join[] .= ('JOIN team f ON f.team_id = sport_event._fk_team_guest');
		$join[] .= ('JOIN league ON t._fk_league_id = league.league_id');
		$join[] .= ('JOIN sport ON league._fk_sport_id = sport.sport_id');

		$orderBy = 'ORDER BY sport_event.start_date_time';

		$result = $obj->read($table, $fields, $join, $orderBy);

		return $result;
	}


	function filterSport() 
	{	
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'sport_event';

		$fields[]  = ('sport_event.sport_event_id, sport_event.start_date_time');
		$fields[] .= ('sport.sport_name');
		$fields[] .= ('t.team_name home, f.team_name guest');

		$join[]  = ('JOIN team t ON t.team_id = sport_event._fk_team_home');
		$join[] .= ('JOIN team f ON f.team_id = sport_event._fk_team_guest');
		$join[] .= ('JOIN league ON f._fk_league_id = league.league_id');
		$join[] .= ('JOIN sport ON league._fk_sport_id = sport.sport_id');

		$where = 'WHERE sport.sport_name = "' . $_GET['sport'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}


	function filterTeam() 
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'sport_event';

		$fields[]  = ('sport_event.sport_event_id, sport_event.start_date_time');
		$fields[] .= ('sport.sport_name');
		$fields[] .= ('t.team_name home, f.team_name guest');

		$join[]  = ('JOIN team t ON t.team_id = sport_event._fk_team_home');
		$join[] .= ('JOIN team f ON f.team_id = sport_event._fk_team_guest');
		$join[] .= ('JOIN league ON f._fk_league_id = league.league_id');
		$join[] .= ('JOIN sport ON league._fk_sport_id = sport.sport_id');

		$where = 'WHERE t.team_name = "' . $_GET['team'] . '" OR f.team_name = "' . $_GET['team'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}


	function searchDate() 
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'sport_event';

		$fields[]  = ('sport_event.sport_event_id, sport_event.start_date_time');
		$fields[] .= ('sport.sport_name');
		$fields[] .= ('t.team_name home, f.team_name guest');

		$join[]  = ('JOIN team t ON t.team_id = sport_event._fk_team_home');
		$join[] .= ('JOIN team f ON f.team_id = sport_event._fk_team_guest');
		$join[] .= ('JOIN league ON f._fk_league_id = league.league_id');
		$join[] .= ('JOIN sport ON league._fk_sport_id = sport.sport_id');

		$where = 'WHERE DATE(sport_event.start_date_time) = "' . $_POST['date'] . '"';		// DATE() returns all events from chosen day regardless of time

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}

// seperated queries for event.php for readability and usability
	function filterEvent() 
	{
		$obj = new Database($table, $fields, $join, $where);
		
		$table = 'sport_event';

		$fields = '*, t.team_name home, f.team_name guest, sport_name';

		$join[] .=	('JOIN team t ON t.team_id = sport_event._fk_team_home');
		$join[] .=	('JOIN team f ON f.team_id = sport_event._fk_team_guest');
		$join[] .=	('JOIN league ON t._fk_league_id = league.league_id');
		$join[] .=	('JOIN sport ON league._fk_sport_id = sport.sport_id');

		$where = 'WHERE sport_event_id = "' . $_GET['id'] . '"';

		$result = $obj->read($table, $fields, $join, $where);

		return $result;
	}


	function createSportEvent()
	{
		$obj = new Database($table, $fields, $values);

		$table = 'sport_event';

		$fields = array('start_date_time, _fk_team_home, _fk_team_guest, _fk_arena_id');

		
		$date = $_POST['date'];
		
		$time = $_POST['time'];

		
		$values = array("$date $time", $_POST['home_team'], $_POST['guest_team'], $_POST['home_team']);

		$result = $obj->insert($table, $fields, $values);

		return $result;
	}


	function updateSportEvent()
	{
		$obj = new Database($table, $set, $condition);

		$table = 'sport_event';

		
		$date = $_POST['date'];
		
		$time = $_POST['time'];


		$set 	= ['start_date_time' => "$date $time",
		$set[] .= '_fk_team_home' => $_POST['home_team'],
		$set[] .= '_fk_team_guest' => $_POST['guest_team'],
		$set[] .= '_fk_arena_id' => $_POST['home_team']];
		
		$condition = ['sport_event_id' => $_POST['id']];

		$result = $obj->update($table, $set, $condition);

		return $result;
	}


	function deleteSportEvent()
	{
		$obj = new Database($table, $condition);

		$table = 'sport_event';

		$condition = ['sport_event_id' => $_POST['id']];

		$result = $obj->delete($table, $condition);

		return $result;
	}
}

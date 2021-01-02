<?php

function index() 
{
	$obj = new Read($table, $fields, $join, $orderBy);
	
	$table = 'sport_event';

	$fields = array('sport_event.sport_event_id, sport_event.start_date_time, sport.sport_name, t.team_name home, 					f.team_name guest');

	$join = array('JOIN team t ON t.team_id = sport_event._fk_team_home',
					'JOIN team f ON f.team_id = sport_event._fk_team_guest',
					'JOIN league ON f._fk_league_id = league.league_id',
					'JOIN sport ON league._fk_sport_id = sport.sport_id');

	$orderBy = 'ORDER BY sport_event.start_date_time';

	$result = $obj->read($table, $fields, $join, $orderBy);

	return $result;
}


function sport() 
{
	$obj = new Read($table, $fields, $join, $where);
	
	$table = 'sport_event';

	$fields = array('sport_event.sport_event_id, sport_event.start_date_time, sport.sport_name, t.team_name home, 					f.team_name guest');

	$join = array('JOIN team t ON t.team_id = sport_event._fk_team_home',
					'JOIN team f ON f.team_id = sport_event._fk_team_guest',
					'JOIN league ON f._fk_league_id = league.league_id',
					'JOIN sport ON league._fk_sport_id = sport.sport_id');

	$where = 'WHERE sport.sport_name = "' . $_GET['sport'] . '"';

	$result = $obj->read($table, $fields, $join, $where);

	return $result;
}


function team() 
{
	$obj = new Read($table, $fields, $join, $where);
	
	$table = 'sport_event';

	$fields = array('sport_event.sport_event_id, sport_event.start_date_time, sport.sport_name, t.team_name home, 					f.team_name guest');

	$join = array('JOIN team t ON t.team_id = sport_event._fk_team_home',
					'JOIN team f ON f.team_id = sport_event._fk_team_guest',
					'JOIN league ON f._fk_league_id = league.league_id',
					'JOIN sport ON league._fk_sport_id = sport.sport_id');

	$where = 'WHERE t.team_name = "' . $_GET['team'] . '" OR f.team_name = "' . $_GET['team'] . '"';

	$result = $obj->read($table, $fields, $join, $where);

	return $result;
}


function date_search() 
{
	$obj = new Read($table, $fields, $join, $where);
	
	$table = 'sport_event';

	$fields = array('sport_event.sport_event_id, sport_event.start_date_time, sport.sport_name, t.team_name home, 					f.team_name guest');

	$join = array('JOIN team t ON t.team_id = sport_event._fk_team_home',
					'JOIN team f ON f.team_id = sport_event._fk_team_guest',
					'JOIN league ON f._fk_league_id = league.league_id',
					'JOIN sport ON league._fk_sport_id = sport.sport_id');

	$where = 'WHERE DATE(sport_event.start_date_time) = "' . $_POST['date'] . '"';

	$result = $obj->read($table, $fields, $join, $where);

	return $result;
}


function form_create()
{
	$obj = new Read($table);
	
	$table = 'team';

	$result = $obj->read($table);

	return $result;
}


function sidebar_sport()
{
	$obj = new Read($table, $fields, $orderBy);
	
	$table = 'sport';

	$fields = 'sport_name';

	$orderBy = 'ORDER BY sport_name';

	$result = $obj->read($table, $fields, $orderBy);

	return $result;
}


function sidebar_teams()
{
	$obj = new Read($table, $fields, $join, $where, $orderBy);
	
	$table = 'team';

	$fields = 'team_name';

	$join = array('JOIN league ON team._fk_league_id = league.league_id',
					'JOIN sport ON league._fk_sport_id = sport.sport_id');

	$where = 'WHERE sport.sport_name = "' . $_GET['sport'] . '"';

	$orderBy = 'ORDER BY team_name';

	$result = $obj->read($table, $fields, $join, $where, $orderBy);

	return $result;
}


function a_create()
{
	$obj = new Insert($table, $fields, $values);

	$table = 'sport_event';

	$fields = array('start_date_time, _fk_team_home, _fk_team_guest');

	$date = $_POST['date'];
	
	$time = $_POST['time'];

	$values = array("$date $time", $_POST['home_team'], $_POST['guest_team']);

	$result = $obj->insert($table, $fields, $values);

	return $result;
 
}


function back()
{
	$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
	
	echo $url;
}


function multi( $arr ) 
{ 
    rsort( $arr ); 
    
    return isset( $arr[0] ) && is_array( $arr[0] ); 
} 


function succes( $type )
{
	echo '<div class="row">';
	echo '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle my-5 text-muted" viewBox="0 0 16 16">';
	echo '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>';
	echo '<path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>';
	echo '</svg>';
	echo '';
	echo '</div>';
	echo '<div class="row">';
	echo '<h1 class="text-center text-muted mt-3 mb-5">Succesfull ' . $type . ' input!</h1></div>';
}


function fail( $type )
{
	echo '<div class="row">';
	echo '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-x-circle my-5 text-muted" viewBox="0 0 16 16">';
	echo '<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>';
	echo '<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>';
	echo '</svg>';
	echo '</div>';
	echo '<div class="row">';
	echo '<h1 class="text-center text-muted mt-3 mb-5">Unsuccesfull ' . $type . ' input!</h1></div>';
}


?>
<?php include_once 'Router.php';


class SportController extends Sport
{
	function fetchSport()
	{
		$fetchSport = parent::fetchSport();

		return $fetchSport;
	}

	function fetchSportOfTeam()
	{
		$fetchSportOfTeam = parent::fetchSportOfTeam();

		return $fetchSportOfTeam;
	}
}

(new Router)->add_route('/', $sidebarSport = (new SportController)->fetchSport());

(new Router)->add_route('/team.php', $sidebarSport = (new SportController)->fetchSport());

(new Router)->add_route('/team.php', $fetchSportOfTeam = (new SportController)->fetchSportOfTeam());

(new Router)->add_route('/date.php', $sidebarSport = (new SportController)->fetchSport());

(new Router)->add_route('/create.php', $fetchSport = (new SportController)->fetchSport());

(new Router)->add_route('/update.php', $fetchSport = (new SportController)->fetchSport());

?>
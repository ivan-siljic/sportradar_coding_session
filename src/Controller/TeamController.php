<?php include_once 'Router.php';


class TeamController extends Team
{
	function fetchTeams($sport)
	{
		$fetchTeams = parent::fetchTeams($sport);

		return $fetchTeams;
	}
}


function fetchTeams($sport)
	{
		return (new TeamController)->fetchTeams($sport);
	}


(new Router)->add_route('/create.php', $fetchTeams = (new TeamController)->fetchTeams($sport));

(new Router)->add_route('/sport.php', $sidebarTeams = (new TeamController)->fetchTeams($sport));

?>
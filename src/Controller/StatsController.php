<?php include_once 'Router.php';


class StatsController extends Stats
{
	function fetchStatsHome()
	{
		$fetchStatsHome = parent::fetchStatsHome();

		return $fetchStatsHome;
	}

	function fetchStatsGuest()
	{
		$fetchStatsGuest = parent::fetchStatsGuest();

		return $fetchStatsGuest;
	}
}


(new Router)->add_route('/event.php', $fetchStatsHome = (new StatsController)->fetchStatsHome());

(new Router)->add_route('/event.php', $fetchStatsGuest = (new StatsController)->fetchStatsGuest());


?>
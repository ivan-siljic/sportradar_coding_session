<?php include_once 'Router.php';


class PlayerController extends Player
{
	function fetchPlayersHome()
	{
		$fetchPlayersHome = parent::fetchPlayersHome();

		return $fetchPlayersHome;
	}

	function fetchPlayersGuest()
	{
		$fetchPlayersGuest = parent::fetchPlayersGuest();

		return $fetchPlayersGuest;
	}
}


(new Router)->add_route('/event.php', $fetchPlayersHome = (new PlayerController)->fetchPlayersHome());

(new Router)->add_route('/event.php', $fetchPlayersGuest = (new PlayerController)->fetchPlayersGuest());

?>
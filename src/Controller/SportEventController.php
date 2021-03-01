<?php include_once 'Router.php';


class SportEventController extends SportEvent
{
	function fetchSportEvent()
	{
		$fetchSportEvent = parent::fetchSportEvent();

		return $fetchSportEvent;
	}

	function filterSport()
	{
		$filterSport = parent::filterSport();

		return $filterSport;
	}	

	function filterTeam()
	{
		$filterTeam = parent::filterTeam();

		return $filterTeam;
	}	

	function filterEvent()
	{
		$filterEvent = parent::filterEvent();

		return $filterEvent;
	}

	function searchDate()
	{
		$searchDate = parent::searchDate();

		return $searchDate;
	}

	function createSportEvent()
	{
		$createSportEvent = parent::createSportEvent();

		return $createSportEvent;
	}

	function updateSportEvent()
	{
		$updateSportEvent = parent::updateSportEvent();

		return $updateSportEvent;
	}

	function deleteSportEvent()
	{
		$deleteSportEvent = parent::deleteSportEvent();

		return $deleteSportEvent;
	}

}


(new Router)->add_route('/', $fetchSportEvent = (new SportEventController)->fetchSportEvent());

(new Router)->add_route('/sport.php', $filterSport = (new SportEventController)->filterSport());

(new Router)->add_route('/team.php', $filterTeam = (new SportEventController)->filterTeam());

(new Router)->add_route('/event.php', $filterEvent = (new SportEventController)->filterEvent());

(new Router)->add_route('/update.php', $sport = (new SportEventController)->filterEvent());

(new Router)->add_route('/delete.php', $sport = (new SportEventController)->filterEvent());

(new Router)->add_route('/date.php', $searchDate = (new SportEventController)->searchDate());

(new Router)->add_route('/actions/a_create.php', $createSportEvent = (new SportEventController)->createSportEvent());

(new Router)->add_route('/actions/a_update.php', $updateSportEvent = (new SportEventController)->updateSportEvent());

(new Router)->add_route('/actions/a_delete.php', $deleteSportEvent = (new SportEventController)->deleteSportEvent());

?>
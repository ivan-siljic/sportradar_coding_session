<?php

	$sidebar_rows = (new Sport)->fetchSport();

	foreach ($sidebar_rows as $row)
	{
		echo "<a href='". BASE_URL . "view/filters/sport.php?sport=" . $row['sport_name'] . "' class='link-secondary'>" . $row['sport_name'] . "</a><br>";
	}

?>


				
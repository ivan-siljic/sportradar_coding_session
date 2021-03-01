<?php	

	foreach ($sidebarTeams as $row)
	{
		echo "<a href='". BASE_URL . "view/filters/team.php?team=" . $row['team_name'] . "' class='link-secondary'>" . $row['team_name'] . "</a><br>";
	}

?>
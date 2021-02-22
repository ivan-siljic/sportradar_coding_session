<?php	

	$sidebar_rows = (new Team)->fetchTeams($sport);

	foreach ($sidebar_rows as $row)
	{
		echo "<a href='". BASE_URL . "view/filters/team.php?team=" . $row['team_name'] . "' class='link-secondary'>" . $row['team_name'] . "</a><br>";
	}

?>
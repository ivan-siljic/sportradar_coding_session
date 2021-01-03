<?php	

	function sidebar_teams_top($sport)
	{
		$sidebar_teams_top = '<div class="row">
							<div class="d-lg-none col-5 col-md-4 mt-5">
								<div class="border rounded p-3">
									<h4>Teams</h4>';
									
									$rows = sidebar_teams($sport);

									foreach ($rows as $row)
									{
										$sidebar_teams_top .= "<a href='/sportradar_coding_session/filters/team.php?team=" . $row['team_name'] . "' class='link-secondary'>" . $row['team_name'] . "</a><br>";
									}

									$sidebar_teams_top .= '</div>
							</div>	
						</div>';

		echo $sidebar_teams_top;
	}


	function sidebar_teams_right($sport)
	{
		$sidebar_teams_right = '<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
							<div class="border rounded p-3">
								<h4>Teams</h4>';

								$rows = sidebar_teams($sport);
												
								foreach ($rows as $row)
								{
									$sidebar_teams_right .= "<a href='/sportradar_coding_session/filters/team.php?team=" . $row['team_name'] . "' class='link-secondary'>" . $row['team_name'] . "</a><br>";
								}

								$sidebar_teams_right .= '</div>
							</div>
						</div>';

		echo $sidebar_teams_right;
	}
	
?>
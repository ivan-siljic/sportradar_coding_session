<?php

	function sidebar_sport_top()
	{
		$sidebar_sport_top = '<div class="row">
							<div class="d-lg-none col-5 col-md-4 mt-5">
								<div class="border rounded p-3">
									<h4>Sports</h4>';

									$rows = sidebar_sport();

									foreach ($rows as $row)
									{
										$sidebar_sport_top .= "<a href='/sportradar_coding_session/sport.php?sport=" . $row['sport_name'] . "' class='link-secondary'>" . $row['sport_name'] . "</a><br>";
									}

									$sidebar_sport_top .= '</div>
							</div>	
						</div>';

		echo $sidebar_sport_top;
	}


	function sidebar_sport_right()
	{
		$sidebar_sport_right = '<div class="d-none d-lg-block col-lg-3 col-xl-2 m-3">
							<div class="border rounded p-3">
								<h4>Sports</h4>';

								$rows = sidebar_sport();
												
								foreach ($rows as $row)
								{
									$sidebar_sport_right .= "<a href='/sportradar_coding_session/sport.php?sport=" . $row['sport_name'] . "' class='link-secondary'>" . $row['sport_name'] . "</a><br>";
								}

								$sidebar_sport_right .= '</div>
							</div>
						</div>';

		echo $sidebar_sport_right;
	}

?>


				
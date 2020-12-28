<?php

require_once '../db_connect.php';

if ($_POST) 
{
	$date = $_POST['date'];
	$time = $_POST['time'];
	$home_team = $_POST['home_team'];
	$guest_team =$_POST['guest_team'];

	$create_sql = "INSERT INTO sport_event(start_date_time, _fk_team_home, _fk_team_guest)
					VALUES ('$date $time', '$home_team', '$guest_team');";

	 if($connect->query($create_sql)===TRUE) {
        echo "Success event input <br>";
        echo "<a href='../index.php'><button type='button'>HOME</button></a> <br>";
        echo "<a href='../create.php'><button type='button'>BACK</button></a> <br>";
    } else {
        echo "unsuccesfull event input <br>";
    }

}

$connect->close();
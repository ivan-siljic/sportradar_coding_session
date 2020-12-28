<?php
require_once 'db_connect.php';

$team_sql = "SELECT * FROM team";
$team_result = mysqli_query($connect, $team_sql);
$guest_result = mysqli_query($connect, $team_sql);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Create Sport Event</title>
</head>
<body>
<h2 class="mt-3">Add Event</h2>

   <form action="./actions/a_create.php" method= "post">
   		<table>
            <tr>
               <th>Date</th>
               <td><input  type="date" name="date"  placeholder="date" /></td >
           	</tr>
           	<tr>
               <th>Time</th>
               <td><input  type="time" name="time"  placeholder="time" /></td >
           </tr>  
           <tr>
           	<th>Home</th>
           	<td><select name="home_team">
           		<?php if ($team_result->num_rows > 0) 
           					{
           						while ($team_row = $team_result->fetch_assoc())
								{
									echo '<option value="' . $team_row["team_id"] . '">' . $team_row["team_name"] . '</option>';
								}
							}
				?>
				</select></td>
           </tr>         	
           <tr>
           	<th>Guest</th>
           	<td><select name="guest_team">
           		<?php if ($team_result->num_rows > 0) 
           					{           		
           						while ($guest_row = $guest_result->fetch_assoc()) 
           						{ 
           		          			echo '<option value="' . $guest_row["team_id"] . '">' . $guest_row["team_name"] . '</option>';
	       						}
	       					}
           		?>         		
           	</select></td>
           </tr>

			<tr>
               <td><button type ="submit" class="btn btn-info m-1">create event</button></td>
               <td><a href= "index.php"><button type="button" class="btn btn-info m-1">Back</button></a></td>
           </tr >
       </table>
</form>
</body>
</html>
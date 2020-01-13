	<?php
		require("session.php");
	?>
	<html>
		<body>
			<?php echo "Hello $user_check! Enter the following details->"; ?>
			<form action=# method=POST>
				Number of guests: <input type=text name=numguests required><br>
				Check-in Date: <input type=date name= startdate required ><br>
				Check-out Date: <input type=date name= enddate required><br>
				<select name="location" required><br>
					<option value="Vizag">Vizag</option>
					<option value="Chennai">Chennai</option>
					<option value="Bangalore">Bangalore</option>
					<option value="Kochi">Kochi</option>
				</select>
				<input type=submit name=submit><br>
			</form>
		<?php
			if(isset($_POST['submit'])){
				$numguests=$_POST['numguests'];
				$startdate=$_POST['startdate'];
				$enddate=$_POST['enddate'];
				$location=$_POST['location'];
				//echo $user_check.$location.$startdate.$enddate.$numguests;
				$sql="insert into hotel_bookings values('$user_check','$location','$startdate','$enddate',$numguests)";
				if(mysqli_query($conn, $sql)){
					echo "<br>BOOKING COMPLETE";
				}
				else{
					echo "<br>Booking failed: ".mysqli_error ($conn );
				}
				echo "<br><br><a href='home.php'>Click here to go back to the home page</a>";
			}
		?>	
		</body>
	</html>

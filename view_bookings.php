<?php
	require('session.php');
?>
<html>
	<body>
	<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYour bookings</h1>
		<?php
			$sql="select locn, start_date,end_date,num_of_guests from hotel_bookings where userid='$user_check'";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				echo "<table><tr><th>Location&nbsp&nbsp&nbsp</th><th>Start date&nbsp&nbsp&nbsp</th><th>End date&nbsp&nbsp&nbsp</th><th>Number of guests</th></tr>";
				while($row=mysqli_fetch_assoc($result)){
					echo"<tr><td>".$row['locn']."</td><td>".$row['start_date']."</td><td>".$row['end_date']."</td><td>".$row['num_of_guests']."</td></tr>";
				}
				echo "</table>";
			}
			else{
				echo"You have no bookings, $user_check<br>";
			}
		?><br>
		<a href="home.php"> Click here to go back the home page</a>
	</body>
</html>

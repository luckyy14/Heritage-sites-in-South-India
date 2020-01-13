<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require('connection.php');
	//var_dump($conn);
	function id_exists($userid){
		require('connection.php');
		$sql="select userid from users where userid='$userid'";
		$result=mysqli_query($conn,$sql);
		//var_dump($conn);
		if(mysqli_num_rows($result)==1){
			//echo "yes";
			
			return true;
		}
		else{
			//echo "nah";
			return false;
		}
	}
?>
<html>
	<body>
		<form action=# method=POST>
			Enter a username: <input type=text name=username value=<?php echo $_POST['username']; ?>>
			<?php
				if(isset($_POST['username'])){
					$username=$_POST['username'];
					if(strlen($username)<=8){
						echo "<img src='images/xmark.png'> Username too short (must be 8 characters or greater)";
					}
					else if(id_exists($username)){
							echo "<img src='images/xmark.png'/> Username already exists<br>";
					}
					else{
							echo "<img src='images/checkmark.png'/><br>";
					}
				}
			?>
			<br>Enter a password: <input type=password name=pw value=<?php echo $_POST['pw']; ?> >
			<?php
				if(isset($_POST['pw'])){
					if(strlen($_POST['pw'])>=8){
						echo "<img src='images/checkmark.png'/><br>";
					}
					else{
						echo "<img src='images/xmark.png'> Password too short";
					}
				}
			?>
			<br>Password must be 8 characters or more.<br>
			
			<br>
			Re-enter the password: <input type=password name=pwcheck value=<?php echo $_POST['pwcheck']; ?>>
			<?php
				if(isset($_POST['pwcheck'])){
					if($_POST['pwcheck']==$_POST['pw']){
						echo "<img src='images/checkmark.png'/>Passwords match!<br>";
					}
					else{
						echo "<img src='images/xmark.png'> Passwords do not match!";
					}
				}
			?>
			<br>
			<input type=submit name=submit value='Sign Up'>
		</form>
		<?php
			if(isset($_POST['submit'])){
				if(strlen($_POST['pw'])<8 || strlen($_POST['username'])<8 || id_exists($_POST['username']) || $_POST['pwcheck']!=$_POST['pw']){}
				else{
					$username=mysqli_real_escape_string($conn,strtolower($_POST['username'])); //sanitizing the username
					echo $username." ";
					$pw=mysqli_real_escape_string($conn,$_POST['pw']);//sanitizing and hashing the password
					echo $pw." ";
		     		$sql="insert into users values('$username','$pw')";
					if(mysqli_query($conn,$sql)){
						echo "Successfully registered <a href='login.php'>Click here to login</a>";
					}
					else{
						echo "Registration failed due to internal server error";
					}
				}
			}
		?>
	</body>	
</html>

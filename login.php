<?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start();
	include("connection.php");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// username and password sent from form 
		//$username = mysqli_real_escape_string($conn,strtolower($_POST['username']));
		//echo "$username<br>";
		//$password = mysqli_real_escape_string($conn,$_POST['password']);
		$username=$_POST['username'];
		$pass=$_POST['password'];
		$sql = "SELECT password FROM users WHERE userid = '$username' ";
		$result = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($result);
		if($count == 1) {
			$row=mysqli_fetch_array($result);
		 	if($row['password']==$pass){
				$_SESSION['userid'] = $username;
				header("location: home.php");
			}
			else{
				$error = "Your username or password is invalid";
			}
		}
		else {
			$error = "Your username is invalid";
		}
	}
?>

<html>
	
	<head>
		<title>Login Page</title>
		<style type = "text/css">
			body {
				font-family:Arial, Helvetica, sans-serif;
				font-size:14px;
			}
			label {
				font-weight:bold;
				width:100px;
				font-size:14px;
			}
			.box {
				border:#666666 solid 1px;
			}
		</style>
	</head>
	
	<body bgcolor = "#FFFFFF">
	
		<div align = "center">
			<div style = "width:300px; border: solid 1px #333333; " align = "left">
				<div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>	
					<div style = "margin:30px">
						<form action = "" method = "post">
							<label>Username:	</label><input type = "text" name = "username" class = "box"/><br /><br />
							<label>Password:	</label><input type = "password" name = "password" class = "box" /><br/><br />
							<center><input type = "submit" value = " Login "/><br /></center>
						</form>
					<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
				</div>
			</div>
		</div>
	</body>
</html>

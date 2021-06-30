<?php 
session_start();
include("connect.php");
if(isset($_SESSION['username']))
{
	header("location:registerpatient.html");
}
if(isset($_POST['register'])){
	if(empty($_POST["username"]) || empty($_POST["password"]))
	{
		echo '<script>alert("Both Fields are required")</script>';
		echo "<meta http-equiv=\"refresh\" content=\"3;URL=index.php\">";
	}
	else{
		$username = mysqli_real_escape_string($conn, $_POST["username"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$query = "SELECT * FROM registeruser where username = '$username'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if(password_verify($password, $row["password"]))
				{
					$_SESSION["username"] = $username;
					header("location:registerpatient.html");
				}
				else
				{
					echo '<script>alert("Wrong Password")</script>';
					?>
					<center>
					<p><img src="wrong password.jpg"></p>
					</center>
					<?php
					echo "<meta http-equiv=\"refresh\" content=\"3;URL=index.php\">";
				}
			}

		}
		else
		{
			echo '<script>alert("Wrong details user")</script>';
			?>
					<center>
					<p><img src="wrong password.jpg"></p>
					</center>
					<?php
			echo "<meta http-equiv=\"refresh\" content=\"3;URL=index.php\">";
		}
	}
}
?>
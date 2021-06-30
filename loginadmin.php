<?php 
session_start();
include("connect.php");
if(isset($_SESSION['admin']))
{
	header("location:registerpatient.html");
}
if(isset($_POST['submit'])){
	if(empty($_POST["admin"]) || empty($_POST["password"]))
	{
		echo '<script>alert("Both Fields are required")</script>';
	}
	else{
		$admin = mysqli_real_escape_string($conn, $_POST["admin"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$query = "SELECT * FROM admin where admin = '$admin'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				if(password_verify($password, $row["password"]))
				{
					$_SESSION["admin"] = $admin;
					header("location:admin.php");
				}
				else
				{
					echo '<script>alert("Wrong Password admin")</script>';
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
			echo '<script>alert("Wrong details admin")</script>';
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
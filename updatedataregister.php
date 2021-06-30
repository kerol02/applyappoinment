<?php
session_start();


include ('connect.php');

$nm = $_POST['r_name'];
$eml = $_POST['r_email'];
$gen = $_POST['r_gender'];

$username=$_SESSION['username'];

$sql = "UPDATE registeruser SET name = '".$nm."', gender= '".$gen."', email = '".$eml."' where username = '$username' and password = '$password'";

if ($conn->query($sql)==TRUE) {
	echo "<p style='text-align:center'> Data $username Had Been Updated!";
	?>
<center>
<p><img src="thanks12.jpeg"></p>
</center>
<?php
	echo "<meta http-equiv=\"refresh\" content=\"3;URL=dataregister.php\">";
	echo "<p>";
} else {
	?>
<center>
<p><img src="wrong password.jpg"></p>
</center>
<?php
	echo "<p>";
   echo "<p style='text-align:center'> Error: " . $sql . "<br>" . $conn->error;
   echo "<meta http-equiv=\"refresh\" content=\"3;URL=dataregister.php\">";
	echo "<p>";
}

$conn ->close();

?>
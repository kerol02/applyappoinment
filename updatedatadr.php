<?php
session_start();


include ('connect.php');

$id = $_POST['d_id'];
$nm = $_POST['d_name'];
$eml = $_POST['d_email'];
$phone = $_POST['d_phone'];
$gen = $_POST['d_gender'];
$ic = $_POST['d_ic'];
$age = $_POST['d_age'];
$sector = $_POST['d_sector'];
$hospital = $_POST['d_hospital'];


$sql = "UPDATE member SET name = '".$nm."', age = '".$age."', gender = '".$gen."', ic = '".$ic."', sector = '".$sector."', hospital = '".$hospital."', email = '".$eml."', no_phone ='".$phone."' where id='".$id."'";

$result = $conn->query($sql);

if ($conn->query($sql)==TRUE) {
	echo "<p style='text-align:center'> Data ID $id Had Been Updated!";
	?>
	<center>
	<p><img src="thanks12.jpeg"></p>
	</center>
	<?php
	echo "<p>";
	echo "<meta http-equiv=\"refresh\"content=\"3;URL=datadr.php\">";
} else {
	?>
	<center>
	<p><img src="wrong password.jpg"></p>
	</center>
	<?php
	echo "<p>";
   echo "<p style='text-align:center'> Error: " . $sql . "<br>" . $conn->error;
	echo "<p>";
	echo "<meta http-equiv=\"refresh\"content=\"3;URL=datadr.php\">";
}

$conn ->close();

?>
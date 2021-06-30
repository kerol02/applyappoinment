<?php
session_start();
include ('connect.php');

$id = $_POST['p_ID'];
$nm = $_POST['p_name'];
$age = $_POST['p_age'];
$gen = $_POST['p_gender'];
$phone = $_POST['p_phone'];
$eml = $_POST['p_email'];
$address = $_POST['p_address'];
$hospital = $_POST['p_hospital'];
$dateappointment = $_POST['p_dateappointment'];
$timeappointment = $_POST['p_timeappointment'];
$problem = $_POST['p_problem'];




$sql = "UPDATE patient SET name = '".$nm."', age = '".$age."', gender ='".$gen."', no_phone = '".$phone."',  email ='".$eml."',  address ='".$address."', hospital ='".$hospital."', dateappointment ='".$dateappointment."', timeappointment ='".$timeappointment."', problem ='".$problem."' where id='".$id."'";

$result = $conn->query($sql);

if ($conn->query($sql)==TRUE) {
	echo "<p style='text-align:center'> Data ID $id Had Been Updated!";
	?>
<center>
<p><img src="thanks12.jpeg"></p>
</center>
<?php
	echo "<meta http-equiv=\"refresh\"content=\"3;URL=datapatient.php\">";
	echo "<p>";
} else {
	?>
<center>
<p><img src="wrong password.jpg"></p>
</center>
<?php
	echo "<p>";
   echo "<p style='text-align:center'> Error: " . $sql . "<br>" . $conn->error;
	echo "<p>";
	echo "<meta http-equiv=\"refresh\"content=\"3;URL=datapatient.php\">";
}

$conn ->close();

?>
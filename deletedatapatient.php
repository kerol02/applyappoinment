<?php
session_start();

include ('connect.php');

$id=$_REQUEST['id'];

$sql = "DELETE from patient where id='".$id."'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    echo "<p style='text-align:center'>Data patient Had Been Deleted!";
    echo "<p>";
    ?>
    <center>
    <p><img src="delete.png"></p>
    </center>
    <?php
    echo "<meta http-equiv=\"refresh\" content=\"3;URL=datapatient.php\">";
}else{
    echo "<p>";
    echo "<p style='text-align:center'>Error: " . $sql . "<br>" . $conn->error;
    echo "<p>";
    ?>
    <center>
    <p><img src="delete.png"></p>
    </center>
    <?php
    echo "<meta http-equiv=\"refresh\" content=\"3;URL=datapatient.php\">";
}

//Closes specified connection
$conn->close();

?>
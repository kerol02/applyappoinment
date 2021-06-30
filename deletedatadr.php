<?php
session_start();


include ('connect.php');

$id=$_REQUEST['id'];

$sql = "DELETE from doctor where id='".$id."'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    echo "<p style='text-align:center'>Data patient $id Had Been Deleted!";
    echo "</p>";
    ?>
    <center>
    <p><img src="delete.png"></p>
    </center>
    <?php
    echo "<meta http-equiv=\"refresh\" content=\"3;URL=datadr.php\">";
}else{
    echo "<p>";
    echo "<p style='text-align:center'>Error: " . $sql . "<br>" . $conn->error;
    echo "<p>";
    ?>
    <center>
    <p><img src="wrong password.jpg"></p>
    </center>
    <?php
     echo "<meta http-equiv=\"refresh\" content=\"3;URL=datadr.php\">";
}

//Closes specified connection
$conn->close();


?>
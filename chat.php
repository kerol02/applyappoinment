<?php
include ('connect.php');

$eml =  $_POST['email'];
$chat = $_POST['msg'];


$sql = "INSERT INTO chat ( email, chat) VALUES ('$eml', '$chat')" or die ("Error inserting data into table");

if($conn->query($sql) === TRUE){
    echo "<center><h1> THANKS YOU..WE REPLY BACK LATER </h1></center>";
?>
<center>
<p><img src="thanks12.jpeg"></p>
</center>
<?php
    echo "<meta http-equiv=\"refresh\" content=\"10;URL=index.php\">";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//closses specified connection
$conn->close();

?>
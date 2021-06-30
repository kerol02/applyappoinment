<!DOCTYPE html>
<head>
    <style>
         body{
             background-image: url("image1.jpeg"); 
            }
         p{font-size:20px;}
    </style>
</head>
<body>
<?php
include ('connect.php');


$name = $_POST['name'];
$age = $_POST['age'];
$gender =  $_POST['gender'];
$ic = $_POST['ic'];
$ID = $_POST['id'];
$sector = $_POST['sector'];
$hospital = $_POST['hospital'];
$eml =  $_POST['email'];
$no_phone = $_POST['no_phone'];

$sql = "INSERT INTO doctor ( id, name, age, gender, ic, sector, hospital, email, no_phone) VALUES ('$ID', '$name', '$age', '$gender', '$ic', '$sector', '$hospital', '$eml', '$no_phone')" or die ("Error inserting data into table");

if($conn->query($sql) === TRUE){
?>
<center>
<p><img src="thanks11.jpg"></p>
</center>
<?php

    echo "<meta http-equiv=\"refresh\" content=\"3;URL=hospital.php\">";
}
else{
    ?>
<center>
<p><img src="wrong password.jpg"></p>
</center>
<?php
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<meta http-equiv=\"refresh\" content=\"3;URL=hospital.php\">";
}

//closses specified connection
$conn->close();

?>
</body>
</hmtl>
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



$name =  $_POST['name'];
$no_ic =  $_POST['no_ic'];
$age =  $_POST['age'];
$gender =  $_POST['gender'];
$no_phone =  $_POST['no_phone'];
$email =  $_POST['email'];
$address =  $_POST['address'];
$hospital =  $_POST['hospital'];
$dateappointment = $_POST['dateappointment'];
$timeappointment =  $_POST['timeappointment'];
$problem =  $_POST['problem'];

$sql = "INSERT INTO patient (name, no_ic, age, gender, no_phone, email, address, hospital, dateappointment, timeappointment, problem) VALUES ('$name', '$no_ic', '$age', '$gender', '$no_phone', '$email', '$address', '$hospital', '$dateappointment', '$timeappointment', '$problem')" or die ("Error inserting data into table");

if($conn->query($sql) === TRUE){
?>
<center>
<p><img src="thanks12.jpeg"></p>
</center>
<?php

    echo "<meta http-equiv=\"refresh\" content=\"3;URL=registerpatient.html\">";
    
}
else{
    ?>
<center>
<p><img src="wrong password.jpg"></p>
</center>
<?php
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<meta http-equiv=\"refresh\" content=\"3;URL=registerpatient.html\">";
}

//closses specified connection
$conn->close();

?>
</body>
</hmtl>
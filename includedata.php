<!DOCTYPE html>
<head>
    <style>
         body{
             background-image: url("image1.jpeg"); 
         }
         p{font-size:20px;}
    </style>
</head>
<?php
include('connect.php');
session_start();
if(isset($_POST['register'])){
        if(empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["password"]))
        {
            echo  "<script>alert('All Fields are required')</script>";
            ?>
            <center>
            <p><img src="wrong password.jpg"></p>
            </center>
            <?php
            echo "<meta http-equiv=\"refresh\" content=\"3;URL=newregister.html\">";
        }
        else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
        {
            echo  "<script>alert('Enter your valid email address')</script>";
            ?>
            <center>
            <p><img src="wrong password.jpg"></p>
            </center>
            <?php
            echo "<meta http-equiv=\"refresh\" content=\"3;URL=newregister.html\">";
        }
        else
        {
        $nm = mysqli_real_escape_string($conn, $_POST["name"]);
        $gdr =  mysqli_real_escape_string($conn, $_POST["gender"]);
        $eml =  mysqli_real_escape_string($conn, $_POST["email"]);
        $username =  mysqli_real_escape_string($conn, $_POST["username"]);
        $password =  mysqli_real_escape_string($conn, $_POST["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO registeruser (name, gender, email, username, password) VALUES ('$nm', '$gdr', '$eml', '$username', '$password')";
        

        if(mysqli_query($conn, $query)){
            echo "Registration successfully";
            ?>
            <center>
            <p><img src="thanks12.jpeg"></p>
            </center>
            <?php
            echo "<meta http-equiv=\"refresh\" content=\"3;URL=index.php\">";
        }
        

    }
}
$conn->close();

?>
</hmtl>
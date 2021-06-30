<!DOCTYPE html>
<h1>Registration Form</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<input type="text" name="admin" value="" placeholder="admin">
	<input type="password" name="password" value="" placeholder="Password">
	<button type="submit" name="submit">Submit</buttom>
</form>


<?php
include('connect.php');
session_start();
if(isset($_POST['submit'])){
        if(empty($_POST["admin"]) || empty($_POST["password"]))
        {
            echo  "<script>alert('All Fields are required')</script>";
            echo "<meta http-equiv=\"refresh\" content=\"3;URL=registeradmin.php\">";
        }
        else
        {
        $admin =  mysqli_real_escape_string($conn, $_POST["admin"]);
        $password =  mysqli_real_escape_string($conn, $_POST["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO admin (admin, password) VALUES ('$admin', '$password')";
        

        if(mysqli_query($conn, $query)){
            echo "Registration successfully";
            echo "<meta http-equiv=\"refresh\" content=\"3;URL=index.php\">";
        }
        

    }
}
$conn->close();

?>
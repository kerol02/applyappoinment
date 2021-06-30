<?php
//Initialise the session
session_start();
if (!isset($_SESSION['register']))
{
    //Destroy the whole session
    $_SESSION = array();
    session_destroy();
    echo "<center><h1>thanks you</h1></center>";
    ?>
        <center>
        <p><img src="wrong password.jpg"></p>
        </center>
        <?php
echo "<meta http-equiv=\"refresh\"content=\"3;URL=index.php\">";
}
?>
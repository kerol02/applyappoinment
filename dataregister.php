<!DOCTYPE html>

<head>
        <title>Register Patient</title>
        <link rel= "stylesheet" type="text/css" href="layoutdataregister.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <nav id="menu">
        
    <a href="dataregister.php" id="logo">MYDATA</a>
    <a class="active" href="logout.php">LOG OUT</a>
    <a class="active" href="registerpatient.html">PATIENT</a>
 
    <div class="subnav">
      <div class="search-container">
          <form action="search.php" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit" name="keys_submit" ><i class="fa fa-search"></i></button>
          </form>
        </div>
  </div></div>
    </nav>

<?php
session_start();

include ('connect.php');

$username= $_SESSION['username'];

$sql = "select * from registeruser where username = '".$username."'";
$result = $conn->query($sql);

	if($result->num_rows > 0){
	// output data of each row

	while($row = $result->fetch_assoc()) {
	echo "<form method='post' action='updatedataregister.php'>";
	echo "<table align='center' border='1' width='50%'";
	echo "<tr><th class='all'  colspan='2'><center><h3>MY DATA</h3></center></th></tr>";
	echo "<tr><th class='all'>Name: </th><td class='allinput'><input type='text' name='r_name' value='".$row['name']."'</td></tr>";
	echo "<tr><th class='all'>Email: </th><td class='allinput'><input type='email' name='r_email' value='".$row['email']."'</td></tr>";
	if ($row['gender']=="female") {
		echo "<tr><th class='all'>Gender: </th><td class='allinput'><input type='radio' name='r_gender' value=female checked>Female
									   <input type='radio' name='r_gender' value=male>Male </th><tr>";
	}
	else {
		echo "<tr><th class='all'>Gender: </th><td class='allinput'><input type='radio' name='r_gender' value=female>Female
									   <input type='radio' name='r_gender' value=male checked>Male </th><tr>";
	}
	echo "<tr><td class='all' colspan='2'><input type='submit' name='submit' value='UPDATE'>";
	echo "<input type='reset' name='reset' value='RESET'></td></tr>";
}
echo "</table>";
echo "</form>";
}
else {
	echo "0 results";
}
$conn->close();

?>
<script>
      window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
document.getElementById("menu").style.padding = "30px 10px";
document.getElementById("logo").style.fontSize = "25px";
} else {
document.getElementById("menu").style.padding = "80px 10px";
document.getElementById("logo").style.fontSize = "35px";
}
}
</script>
</html>
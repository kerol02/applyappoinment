<!DOCTYPE html>

<head>
        <title>Hospital</title>
        <link rel="stylesheet" type="text/css" href="layoutdatainputdr.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
      <nav id="menu">
        
            <a href="datapatient.php" id="logo">DATA PATIENT</a>
            <a class="active" href="logoutadmin.php">LOG OUT</a>
            <a class="active" href="admin.php">STAFF/DR</a>
            <a class="active" href="datadr.php">DATA DR</a>
            <div id="menu-right">
			<div class="subnav">
        <div class="search-container">
            <form action="search.php" method="POST">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit" name="keys_submit" ><i class="fa fa-search"></i></button>
            </form>
          </div>
          </div></div>
            </nav>
      </div>
<?php
session_start();


include ('connect.php');

$id=$_REQUEST['id'];

$sql = "SELECT * FROM doctor where id='".$id."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row

	while($row = $result->fetch_assoc()) {
	echo "<form method='post' action='updatedatadr.php'>";
	echo "<table align='center' border='1' width='50%'";
	echo "<tr><th class='all'  colspan='2'><center><h2>DATA DOCTOR</h2></center></th></tr>";
    echo "<tr><th class='all'>ID: </th><td class='allinput'><input type='text' name='d_id' value='".$row['ID']."' readonly=\"readonly\"</td></tr>";
	echo "<tr><th class='all'>NAME: </th><td class='allinput'><input type='text' name='d_name' value='".$row['name']."'</td></tr>";
    echo "<tr><th class='all'>AGE: </th><td class='allinput'><input type='number' name='d_age' value='".$row['age']."'</td></tr>";
    echo "<tr><th class='all'>IC: </th><td class='allinput'><input type='text' name='d_ic' value='".$row['ic']."'</td></tr>";
	echo "<tr><th class='all'>EMAIL: </th><td class='allinput'><input type='email' name='d_email' value='".$row['email']."'</td></tr>";
	echo "<tr><th class='all'>NO.PHONE: </th><td class='allinput'><input type='text' name='d_phone' value='".$row['no_phone']."'</td></tr>";
	if ($row['gender']=="female") {
		echo "<tr><th class='all'>Gender: </th><td class='allinput'><input type='radio' name='d_gender' value=female checked>Female
									   <input type='radio' name='d_gender' value=male>Male </th><tr>";
	}
	else {
		echo "<tr><th class='all'>Gender: </th><td class='allinput'><input type='radio' name='d_gender' value=female>Female
									   <input type='radio' name='d_gender' value=male checked>Male </th><tr>";
	}
    if ($row['sector']=="ORTOPEDIK") {
		echo "<tr><th class='all'>SECTOR: </th><td class='allinput'><select id='d_sector' name='d_sector'>
									   <option name='d_sector' value='ORTOPEDIK' checked>ORTOPEDIK
									   <option name='d_sector' value='EYES'>EYES
                                       <option name='d_sector' value='X-RAY'>X-RAY </select></th><tr>";
	}
	elseif($row['sector']=="EYES"){
		echo "<tr><th class='all'>SECTOR: </th><td class='allinput'><select id='d_sector' name='d_sector'>
									   <option name='d_sector' value='ORTOPEDIK' >ORTOPEDIK
									   <option name='d_sector' value='EYES' checked>EYES
                                       <option name='d_sector' value='X-RAY'>X-RAY </select></th><tr>";
	}
    else {
		echo "<tr><th class='all'>SECTOR: </th><td class='allinput'><select id='d_sector' name='d_sector'>
									   <option name='d_sector' value='ORTOPEDIK' >ORTOPEDIK
									   <option name='d_sector' value='EYES'>EYES
                                       <option name='d_sector' value='X-RAY' checked>X-RAY </select></th><tr>";
    }
    if ($row['hospital']=="HOSPITAL TENGKU AMPUAN AFZAN") {
		echo "<tr><th class='all'>HOSPITAL: </th><td class='allinput'><select id='d_hospital' name='d_hospital'>
									   <option name='d_hospital' value='HOSPITAL TENGKU AMPUAN AFZAN' checked>HOSPITAL TENGKU AMPUAN AFZAN
									   <option name='d_hospital' value='HOSPITAL ALOR GAJAH'>HOSPITAL ALOR GAJAH
                                       <option name='d_hospital' value='HOSPITAL AMPANG'>HOSPITAL AMPANG </select></th><tr>";
	}
	elseif($row['hospital']=="HOSPITAL ALOR GAJAH"){
		echo "<tr><th class='all'>HOSPITAL: </th><td class='allinput'><select id='d_hospital' name='d_hospital'>
									   <option name='d_hospital' value='HOSPITAL TENGKU AMPUAN AFZAN' >HOSPITAL TENGKU AMPUAN AFZAN
									   <option name='d_hospital' value='HOSPITAL ALOR GAJAH' checked>HOSPITAL ALOR GAJAH
                                       <option name='d_hospital' value='HOSPITAL AMPANG'>HOSPITAL AMPANG </select></th><tr>";
	}
    else {
		echo "<tr><th class='all'>HOSPITAL: </th><td class='allinput'><select id='d_hospital' name='d_hospital'>
									   <option name='d_hospital' value='HOSPITAL TENGKU AMPUAN AFZAN' >HOSPITAL TENGKU AMPUAN AFZAN
									   <option name='d_hospital' value='HOSPITAL ALOR GAJAH'>HOSPITAL ALOR GAJAH
                                       <option name='d_hospital' value='HOSPITAL AMPANG' checked>HOSPITAL AMPANG </select></th><tr>";
    }
	echo "<tr><td colspan='2'><input type='submit' name='submit' value='UPDATE'>";
	echo "<input type='reset' name='reset' value='RESET'></td>";
}
echo "</table>";
echo "</form>";
}else {
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
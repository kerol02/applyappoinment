<!DOCTYPE html>

<head>
        <title>Hospital</title>
        <link rel="stylesheet" type="text/css" href="layoutdatainputpatient.css">
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

$sql = "SELECT * FROM patient where id='".$id."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row

	while($row = $result->fetch_assoc()) {
	echo "<form method='post' action='updatedatapatient.php'>";
	echo "<table align='center' border='1' ";
	echo "<tr><th class='all'  colspan='2'><center><h1>UPDATE DATA PATIENT</h1></center></th></tr>";
    echo "<tr><th class='all'>ID: </th><td class='allinput'><input type='text' name='p_ID' value='".$row['ID']."' readonly=\"readonly\"</td></tr>";
	echo "<tr><th class='all'>NAME: </th><td class='allinput'><input type='text' name='p_name' value='".$row['name']."'</td></tr>";
    echo "<tr><th class='all'>AGE: </th><td class='allinput'><input type='text' name='p_age' value='".$row['age']."'</td></tr>";
	if ($row['gender']=="female") {
		echo "<tr><th class='all'>GENDER: </th><td class='allinput'><input type='radio' name='p_gender' value=female checked>Female
									   <input type='radio' name='p_gender' value=male>Male </th><tr>";
	}
	else {
		echo "<tr><th class='all'>GENDER: </th><td class='allinput'><input type='radio' name='p_gender' value=female>Female
									   <input type='radio' name='p_gender' value=male checked>Male </th><tr>";
	}
    echo "<tr><th class='all'>PHONE: </th><td class='allinput'><input type='text' name='p_phone' value='".$row['no_phone']."'</td></tr>";
    echo "<tr><th class='all'>EMAIL: </th><td class='allinput'><input type='email' name='p_email' value='".$row['email']."'</td></tr>";
    echo "<tr><th class='all'>ADDRESS: </th><td class='allinput'><input  type='text' name='p_address' value='".$row['address']."'</td></tr>";
    if ($row['hospital']=="HOSPITAL TENGKU AMPUAN AFZAN") {
		echo "<tr><th class='all'>HOSPITAL: </th><td class='allinput'><select id='p_hospital' name='p_hospital'>
									   <option name='p_hospital' value='HOSPITAL TENGKU AMPUAN AFZAN' checked>HOSPITAL TENGKU AMPUAN AFZAN
									   <option name='p_hospital' value='HOSPITAL ALOR GAJAH'>HOSPITAL ALOR GAJAH
                                       <option name='p_hospital' value='HOSPITAL AMPANG'>HOSPITAL AMPANG </select></th><tr>";
	}
	elseif($row['hospital']=="HOSPITAL ALOR GAJAH"){
		echo "<tr><th class='all'>HOSPITAL: </th><td class='allinput'><select id='p_hospital' name='p_hospital'>
									   <option name='p_hospital' value='HOSPITAL TENGKU AMPUAN AFZAN' >HOSPITAL TENGKU AMPUAN AFZAN
									   <option name='p_hospital' value='HOSPITAL ALOR GAJAH' checked>HOSPITAL ALOR GAJAH
                                       <option name='p_hospital' value='HOSPITAL AMPANG'>HOSPITAL AMPANG </select></th><tr>";
	}
    else {
		echo "<tr><th class='all'>HOSPITAL: </th><td class='allinput'><select id='p_hospital' name='p_hospital'>
									   <option name='p_hospital' value='HOSPITAL TENGKU AMPUAN AFZAN' >HOSPITAL TENGKU AMPUAN AFZAN
									   <option name='p_hospital' value='HOSPITAL ALOR GAJAH'>HOSPITAL ALOR GAJAH
                                       <option name='p_hospital' value='HOSPITAL AMPANG' checked>HOSPITAL AMPANG </select></th><tr>";
    }
    echo "<tr><th class='all'>DATE APPOINTMENT: </th><td class='allinput'><input type='date' name='p_dateappointment' value='".$row['dateappointment']."'</td></tr>";
    if ($row['timeappointment']=="AM") {
		echo "<tr><th class='all'>TIME APPOINTMENT: </th><td class='allinput'><select id='p_timeappointment' name='p_timeappointment'>
									   <option name='p_timeappointment' value=AM checked>AM
									   <option name='p_timeappointment' value=PM >PM </th><tr>";
	}
	else {
		echo "<tr><th class='all'>TIME APPOINTMENT: </th><td class='allinput'><select id='p_timeappointment' name='p_timeappointment'>
										<option name='p_timeappointment' value=AM >AM
                                        <option name='p_timeappointment' value=PM checked>PM </th><tr>";
	}
    echo "<tr><th class='all'>PROBLEM: </th><td class='allinput'><input type='text' name='p_problem' value='".$row['problem']."'</td></tr>";
	echo "<tr><td class='allinput' colspan='2'><input type='submit' name='submit' value='UPDATE'>";
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
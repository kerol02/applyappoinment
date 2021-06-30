<!DOCTYPE html>

<head>
        <title>Hospital</title>
        <link rel="stylesheet" type="text/css" href="layoutdatadr.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
      <nav id="menu">
        
            <a href="datapatient.php" id="logo">DATA DOCTOR</a>
            <a class="active" href="logoutadmin.php">LOG OUT</a>
            <a class="active" href="admin.php">STAFF/DR</a>
            <a class="active" href="datapatient.php">DATA PATIENT</a>
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

$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);

if ($result -> num_rows > 0){
    // output data of each row
    echo "<center><h3>DATA DR</h3></center>";
    echo "<table align='center' border='1' width='50%'";
    echo"<tr><th class='up'>ID</td><th class='up'>NAME</td><th class='up'>AGE</td><th class='up'>GENDER</td><th class='up'>NO.IC</td><th class='up'>SECTOR</td><th class='up'>HOSPITAL</td><th class='up'>EMAIL</td><th class='up'>NO.PHONE</td><th class='up' colspan='2'>UPDATE</th></tr>";
        while($row = $result->fetch_assoc()){
          
            echo " <tr>";
            echo "<td class='all'>".$row['ID']."</td>";
            echo "<td class='all'>".$row['name']."</td>";
            echo "<td class='all'>".$row['age']."</td>";
            echo "<td class='all'>".$row['gender']."</td>";
            echo "<td class='all'>".$row['ic']."</td>";
            echo "<td class='all'>".$row['sector']."</td>";
            echo "<td class='all'>".$row['hospital']."</td>";
            echo "<td class='all'>".$row['email']."</td>";
            echo "<td class='all'>".$row['no_phone']."</td>";
            ?>
            <td class="update" align="center"><a href ="datainputdr.php?id=<?php echo $row["ID"]; ?>">Edit</a></td>
            <td class="delete" align="center"><a href ="deletedatadr.php?id=<?php echo $row["ID"]; ?>">Delete</a></td>
            <?php
            echo "</tr>";
        }
        echo "</table>";
}else{
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
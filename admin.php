<!DOCTYPE html>

<head>
        <title>Hospital</title>
        <link rel="stylesheet" type="text/css" href="layoutadmin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
      <nav id="menu">
        
            <a href="admin.php" id="logo">STAFF/DR</a>
            <a class="active" href="logoutadmin.php">LOG OUT</a>
            <a class="active" href="datapatient.php">DATA PATIENT</a>
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
      <section class="admin">
      <form method = "POST" action="includedata2.php">
      <table>
            <tr>
                  <td><p>REGISTER STAFF/DR</p></td>
            </tr>
      <tr>
      <td><label for="name"><b>NAME DOCTOR</b></label></td>
      </tr>
      <tr>
      <td><input type="text" placeholder="Your Name" id="name" name="name" required></td>
      </tr>
      <tr>
            <td><label for="age"><b>Age</b></label></td>
      </tr>
      <tr>
            <td><input type="number" placeholder="Your Age" id="age" name="age" required></td>
      </tr>
      <tr>
            <td><label for="gender"><b>Gender</b></label></td>
      </tr>
      <tr>
            <td><input type = "radio" name = "gender" value="Female" selected required>FEMALE
	      <input type = "radio" name = "gender" value="Male">MALE</td>	
      </tr>
      <tr>
              <td><label for="no_phonedr"><b>NUMBER PHONE</b></label>
      </tr>
      <tr>
              <td><input type="text" placeholder="01XXXXXXXX " id="no_phone" name="no_phone" required></td>
          </tr>
          <tr>
              <td><label for="email"><b>EMAIL</b></label>
              </tr>
          <tr>
              <td><input type="email" placeholder="XXXX@gmail.com " id="email" name="email" required></td>
          </tr>
      <tr>
            <td><label for="ic"><b>Number Ic</b></label></td>
      </tr>
      <tr>
            <td><input type="text" placeholder="Your Ic" id="ic" name="ic" required></td>
      </tr> 
      <tr>
            <td><label for="id"><b>Id Dr</b></label></td>
      </tr>
      <tr>
            <td><input type="text" placeholder="Your Id" id="id" name="id" required></td>
      </tr>
      <tr>
            <td><label for="sector"><b>SECTOR</b></label>
            <select id="sector" name="sector">
                  <option value="ORTOPEDIK" selected>ORTOPEDIK
                  <option value="EYES">EYES
                  <option value="X-RAY">X-RAY</option>
              </select></td>
      </tr>
      <tr>
            <td><label for="hospital"><b>HOSPITAL</b></label>
            <select id="hospital" name="hospital">
                  <option value="HOSPITAL TENGKU AMPUAN AFZAN" selected>HOSPITAL TENGKU AMPUAN AFZAN
                  <option value="HOSPITAL ALOR GAJAH">HOSPITAL ALOR GAJAH
                  <option value="HOSPITAL AMPANG">HOSPITAL AMPANG</option>
            </select></td>
      </tr>
      <tr>
      <td><label>
      <input class="submit" type="submit" name="submit" id="submit" value="REGISTER" />
      <input class="reset" type="reset" name="reset" id="reset" value="CLEAR" />
    </label>
      </tr>
      <tr>
            <td><button type="logout" class="log out"><a href="logoutadmin.php" >LOG OUT</a></button></td>
      </tr></form>



</table></section>
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
</body>
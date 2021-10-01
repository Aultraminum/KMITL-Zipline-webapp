<html>
<head>
<link rel="shortcut icon" type="image/jpg" href="zipline-gun.png" />
<title>Siam</title>
<script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
</script>
<style>


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #ffffff;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4B76C6;
  color: white;
}

.button {
  background-color: #3964aa;
  border: none;
  color: white;
  padding: 10px;
  padding-left: 22px;
  padding-right: 22px;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 14px;
  margin: 1px 2px;
  cursor: pointer;
}

.buttonin {
  background-color: #4B76C6;
  border: none;
  color: white;
  padding: 10px;
  padding-left: 22px;
  padding-right: 22px;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 14px;
  margin: 1px 2px;
  cursor: pointer;
}

 
.dmbutton {
  background-color: #0a3377; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<body style="background-color: rgba(194, 225, 247, 0.67);color: rgb(51, 51, 51);font-family: THSarabunNew, sans-serif;">


<center><h1 style="font-size: 100px";>Pathfinder</h1>
<img height="200" width="200" src="SiamIC.png" alt="icon">
<p>โปรดเลือกสถานที่</p>
<p>Select place where you want to go</p>

<form>
<select name="list" id="list" accesskey="target">
    <option value='none' selected>--เลือกสถานที่--Choose a place--</option>
    <option value="Mega.php">เมกาบางนา (MEGA Bangna)</option>
    <option value="Seacon.php">ซีคอน (Seacon)</option>
    <option value="Siam.php">สยาม (Siam Paragon)</option>
    <option value="Mochit.php">หมอชิต (Mochit)</option>
    <option value="Suwan.php">สนามบินสุวรรณภูมิ (Suwannabhumi Airport)</option>
    <option value="Gapi.php">เดอะมอล บางกะปิ (The Mall Banggapi)</option>
  </select>
  <br><br>
  <input class="button" type="button" value="Go" onclick="goToNewPage()" />
  <form>
  <input class="button" type="button" value="Home" onclick="window.location.href='Zipline.php'" />
  </form>
</form>

<p style="font-size: 30px";>คุณเลือกที่จะไป สยามพารากอน</p>
<p style="font-size: 30px";>You choose to go to Siam Paragon</p>

<form action="Siam.php" method="post">
  ความต้องการ :
  <input type="radio" name="Filter" value="all">ทั้งหมด
  <input type="radio" name="Filter" value="comf">สะดวก
  <input type="radio" name="Filter" value="cheap">ประหยัด
  <input type="radio" name="Filter" value="four">ผู้โดยสาร 4,8 คน  
  <br><br>
  <input class="button" type="submit" name="submit" value="Submit">  
</form>
<img height="50" width="60%" src="rainbow.png" alt="icon">
<?php
define('servername', 'mysql.hostinger.com');
define('username', 'u742683457_g14');
define('password', 's1g1s1g1');
define('dbname', 'u742683457_g14');
$conn = mysqli_connect(servername, username, password,dbname);
$strSQL = "SELECT * FROM Siam";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  echo '<table border=\'1\' id="customers">
                <tr>
                <th>เส้นทาง</th>
                <th>ราคา</th>
                <th>ระยะเวลา</th>
                <th>รายละเอียด</th>
                </tr>';
$sql = "SELECT Path, Walk, Taxi, Want, Price, Time FROM Siam";
$result = $conn->query($sql);

if(!isset($_POST['submit'])) {
    $x = 1;
    $id = 1;
    while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $x . "</td>";
          echo "<td>" . $row['Price'] ." บาท". "</td>";
          echo "<td>" . $row['Time'] ." นาที". "</td>";
          echo '<td><input class="buttonin" type="button" name="submit'.$id.' " value="Go" onclick="window.location.href=\'Siam'.$row['Path'].'.php\'" ></td>';
          echo "</tr>";
    $x++;
    $id++;
    }
    echo "</table>";
}
if(isset($_POST['submit'])){
  $x = 1;
  $filter = $_POST['Filter'];
  if($filter == ""){
    while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $x . "</td>";
          echo "<td>" . $row['Price'] ." บาท". "</td>";
          echo "<td>" . $row['Time'] ." นาที". "</td>";
          echo '<td><input class="buttonin" type="button" name="submit'.$id.' " value="Go" onclick="window.location.href=\'Siam'.$row['Path'].'.php\'" ></td>';
          echo "</tr>";
          $x++;
    }
  }
  else if($filter == "comf"){
    while($row = $result->fetch_assoc()) {
          if($row["Walk"]==0&&$row["Want"]=="comf"){
            echo "<tr>";
            echo "<td>" . $x . "</td>";
            echo "<td>" . $row['Price'] ." บาท". "</td>";
            echo "<td>" . $row['Time'] ." นาที". "</td>";
            echo '<td><input class="buttonin" type="button" name="submit'.$id.' " value="Go" onclick="window.location.href=\'Siam'.$row['Path'].'.php\'" ></td>';
            echo "</tr>";
            $x++;
          }
    }
  }
  else if($filter == "cheap"){
    while($row = $result->fetch_assoc()) {
          if($row["Price"]<=70){
            echo "<tr>";
            echo "<td>" . $x . "</td>";
            echo "<td>" . $row['Price'] ." บาท". "</td>";
            echo "<td>" . $row['Time'] ." นาที". "</td>";
            echo '<td><input class="buttonin" type="button" name="submit'.$id.' " value="Go" onclick="window.location.href=\'Siam'.$row['Path'].'.php\'" ></td>';
            echo "</tr>";
            $x++;
          }
    }
  }
  else if($filter == "four"){
    while($row = $result->fetch_assoc()) {
          if($row["Taxi"]==1){
            echo "<tr>";
            echo "<td>" . $x . "</td>";
            echo "<td>" . $row['Price'] ." บาท". "</td>";
            echo "<td>" . $row['Time'] ." นาที". "</td>";
            echo '<td><input class="buttonin" type="button" name="submit'.$id.' " value="Go" onclick="window.location.href=\'Siam'.$row['Path'].'.php\'" ></td>';
            echo "</tr>";
            $x++;
          }
    }
  }
  else if($filter == "all"){
    while($row = $result->fetch_assoc()) {
           echo "<tr>";
            echo "<tr>";
            echo "<td>" . $x . "</td>";
            echo "<td>" . $row['Price'] ." บาท". "</td>";
            echo "<td>" . $row['Time'] ." นาที". "</td>";
            echo '<td><input class="buttonin" type="button" name="submit'.$id.' " value="Go" onclick="window.location.href=\'Siam'.$row['Path'].'.php\'" ></td>';
            echo "</tr>";
            $x++;
    }
  }
  echo "</table>";
}

$conn->close();
?> 
<img height="50" width="60%" src="rainbow.png" alt="icon">
<br><br>
<button class="dmbutton" onclick="darker()">Night Mode 🌙</button>
<br><br>
</center>
<script>
document.body.style.backgroundColor = sessionStorage.getItem('bg');
document.body.style.color = sessionStorage.getItem('cc');
function darker() {
     if ( sessionStorage.getItem('bg') === 'rgba(194, 225, 247, 0.67)') {

            sessionStorage.setItem('bg', 'rgb(0, 39, 72)');
            sessionStorage.setItem('cc', '#777');


     }
    else if (sessionStorage.getItem('bg') == null || undefined) {
        sessionStorage.setItem('bg', 'rgb(0, 39, 72)s');
        sessionStorage.setItem('cc', '#777');

    }
    else if( sessionStorage.getItem('bg') === 'rgb(0, 39, 72)') {

        sessionStorage.setItem('bg', 'rgba(194, 225, 247, 0.67)');
        sessionStorage.setItem('cc', '#333');


    }

document.body.style.backgroundColor = sessionStorage.getItem('bg');
document.body.style.color = sessionStorage.getItem('cc');

}
</script>
</body>
</html>
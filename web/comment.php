<?php
define('servername', 'mysql.hostinger.com');
define('username', 'u742683457_g14');
define('password', 's1g1s1g1');
define('dbname', 'u742683457_g14');
$objCon = mysqli_connect(servername, username, password,dbname);
$place =  $_POST['place'];
$detail = $_POST['detail'];
$rate = $_POST['rate'];
$time = $_POST['time'];
$taxi = $_POST['taxi'];
$walk = $_POST['walk'];
$sql = "insert into comment(place, detail, rate, time, taxi, walk) values('$place','$detail','$rate','$time','$taxi','$walk')";
mysqli_query($objCon, $sql);
?> 
<html>
<head>
	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
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
  background-color: #4B0082;
  color: white;
}
.form-submit-button {

background: #0066A2;

color: white;

border-style: outset;

border-color: #0066A2;

height: 50px;

width: 100px;

font: bold 15px arial, sans-serif;

text-shadow:none;

}
input[type=submit] {
  background-color: #0066A2;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
  color: #fff;
  font-size:16px;
  font-weight: bold;
  line-height: 1.4;
  padding: 10px;
  width: 180px
}
body {
  background-image: url("bg7.jpg");
  background-repeat: no-repeat;
   background-size: 100% 100%;
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

</style></head>
<body><br><br><br><br><br><br><br><br><br><br><br>
	<form action="comment.php" method="post">
		<center><table id = "customers">
			<tr>
    		<th colspan="2" ><center>กรอกข้อมูลเส้นทางที่คุณแนะนำ<center></th>
  			</tr>
			<tr>
  			<td>สถานที่</td>
  			<td><input type="text" name='place'></td>
 			</tr>
 			<tr>
  			<td>รายละเอียดเส้นทาง</td>
  			<td ><input type="text" name='detail'>
  			</td>
 			</tr>
 			<tr>
  			<td>ราคา</td>
  			<td><input type="text" name='rate' pattern="[0-9]{1,}" title="ใส่ตัวเลข" ></td>
 			</tr>
 			<tr>
  			<td>ระยะเวลาในการเดินทาง</td>
  			<td><input type="text" name='time'pattern="[0-9]{1,}" title="ใส่ตัวเลข" > นาที</td>
 			</tr>
 			<tr>
  			<td>taxi</td>
  			<td>มี<input type="radio" name = 'taxi' value='1'>
  			ไม่มี<input type="radio" name = 'taxi' value='0'></td>
 			</tr>
 			<tr>
  			<td>เดิน</td>
  			<td>มี<input type="radio" name = 'walk' value='1'>
  			ไม่มี<input type="radio" name = 'walk' value='0'></td>
 			</tr>
 			</table><center>
		<br><br>
		<input class="bttn flex" type = "submit" value="SUBMIT">
    <form>
    <br>
    <center><input style="padding-right: 50px; padding-left: 50px;" class="dmbutton" type="button" value="Home" onclick="window.location.href='Zipline.php'" /></center>
	</table>
	</form>
</body>
</html>
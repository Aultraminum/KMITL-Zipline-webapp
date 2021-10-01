<html>
<head>
<link rel="shortcut icon" type="image/jpg" href="zipline-gun.png" />
<title>Seacon</title>
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
  width: 100%;
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
<body style="background-color: rgba(194, 225, 247, 0.67);color: rgb(51, 51, 51); font-family: 'THSarabunNew', sans-serif;">


<center><h1 style="font-size: 100px;">Pathfinder</h1>
<img height="200" width="200" src="SeaconIC.png" alt="icon">
<center><h1 style="font-size: 70px;">เส้นทางที่1</h1>
<img src="seacon1.png" width="100%" alt="icon" border="5">
<form>
<input class="button" type="button" value="Home" onclick="window.location.href='Zipline.php'" />
<input class="button" type="button" value="Back" onclick="window.location.href='Seacon.php'" />
</form>
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
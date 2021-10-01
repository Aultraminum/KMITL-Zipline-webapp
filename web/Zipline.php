<html>
<head>
<link rel="shortcut icon" type="image/jpg" href="zipline-gun.png" />
<title>Pathfinder</title>
<script type="text/javascript">
    function goToNewPage()
    {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
    }
</script>
<style > /*button*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: skyblue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: skyblue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
   background-color: rgb(173,216,230);
}
  .wrap {
  width: 20%;
  max-width: 500px;
  margin: 4em auto;
  font-family: Raleway, Arial, sans-serif;
  padding: 1em 2em;
} /*button*/
a.btn,.btn {
  display: inline-block;
  outline: none;
  text-align: center;
  text-decoration: none;
  font-family: inherit;
  font-weight: 300;
  letter-spacing: 1px;
  vertical-align: middle;
  border: 1px solid;
  transition: all 0.2s ease;
  box-sizing: border-box;
  text-shadow: 0 1px 0 rgba(0,0,0,0.1);
}
.btn-radius {
  border-radius: 3px;
}
.btn-medium {
  font-size: 0.9375em;
  padding: 0.5375em 1.375em;
}
.btn-blue {
  color: #6A5ACD;
  border-color: #6A5ACD;
}
.btn-blue:hover {
  background: #6A5ACD;
  color: #F0F8FF;
  border-color: #6A5ACD;    
}</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url("bg4.jpg");
  min-height: 100%;
  margin-top: 100px;
  background-position: center;
  background-size: cover;
}
.tx {
}
.font{color:cornflowerblue ;
        font-size: 100vh; }
#demotext {
color: cornflowerblue;
background: rgb(0, 0, 0,0);
color: cornflowerblue;
background: rgb(0, 0, 0,0);
text-align: center;
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

.transbox{
  margin: 30px;
  background-color: #ffffff;
  border: none;
  border-radius: 12px;
  opacity: 0.8;
  filter: alpha(opacity=60); /* For IE8 and earlier */
  border: 6px solid;
  border-radius: 20px;
}


}
</style>
</head>

<body style="background-color: rgba(194, 225, 247, 0.67); color: rgb(51, 51, 51); font-family: 'THSarabunNew', sans-serif;">
<div class="bgimg w3-display-container w3-animate-opacity  ">
  <div class="w3-display-middle">
    <div class="transbox"><h1 class="w3-jumbo w3-animate-top" id="demotext">PATHFINDER</h1></div>
    <div class="transbox"><img height="260" width="500" src="zipline-gun.png" alt="icon"></div>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <div class="transbox"><p class="w3-large w3-center font">โปรดเลือกสถานที่</p>
    <p class="w3-large w3-center font">Select place where you want to go</p></div>
<form><center><div class="custom-select" style="width:300px;">
<select  name="list" id="list" accesskey="target">
    <option value='none'  selected>--เลือกสถานที่--Choose a place--</option>
    <option value="Mega.php">เมกาบางนา (MEGA Bangna)</option>
    <option value="Seacon.php">ซีคอน (Seacon)</option>
    <option value="Siam.php">สยาม (Siam Paragon)</option>
    <option value="Mochit.php">หมอชิต (Mochit)</option>
    <option value="Suwan.php">สนามบินสุวรรณภูมิ (Suwannabhumi Airport)</option>
    <option value="Gapi.php">เดอะมอล บางกะปิ (The Mall Banggapi)</option>
  </div></select></center>
<form>
  <br><br>
<center>
        <input  type=button class="wrap btn btn-medium btn-blue  btn-radius " value="Go" onclick="goToNewPage()" ></center>
</form>
  <br><br><center>
  <input class="dmbutton" type="button" value="คลิกเพื่อแนะนำเส้นทาง" onclick="window.location.href='comment.php'" > &nbsp;
<button class="dmbutton" onclick="darker()">Night Mode 🌙</button></center>
<br><br>
</form>
</center>
</div>
</div>

<script>
document.body.style.backgroundColor = sessionStorage.getItem('bg');
document.body.style.color = sessionStorage.getItem('cc');
function darker() {
     if ( sessionStorage.getItem('bg') === 'rgba(194, 225, 247, 0.67)') {

            sessionStorage.setItem('bg', 'rgb(0, 39, 72)');
            sessionStorage.setItem('cc', '#777');


     }
    else if (sessionStorage.getItem('bg') == null || undefined) {
        sessionStorage.setItem('bg', 'rgb(0, 39, 72)');
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

<script>
var x, i, j, selElmnt, a, b, c;

x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];

  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {

    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {

        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {

      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {

  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
document.addEventListener("click", closeAllSelect);
</script>
</body>

</html>

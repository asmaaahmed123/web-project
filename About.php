<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  <title>YOUR DOCTOR</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
* {
    box-sizing: border-box;
}
body {
    font-family: Arial;
    padding:10px;
    background: #f1f1f1;

}
.doctor-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("dooctoor.png");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.doctor-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}


.topnav {
    overflow: hidden;
    background-color: #333;
}
.topnav a {
    float: left;
    display: block;
    color:  Blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.topnav a:hover {
    background-color: #ddd;
    color: black;
}
.topnav .icon {
  display: none;
}
.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}


/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

#Home {background-color: white;}
#Medical Consult {background-color: white;}
#Contact {background-color: white;}
#About {background-color: white;}

/* Footer */
.footer {
    padding: 10px;
    text-align: center;
    background: #ddd;
    margin-top: 10px;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}


li a {
    display: block;
    color: Blue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
ul {
    background-color: #FFE4C4;
}
.active {
    background-color: #111;
}
ul {
    position: fixed;
    top: 0;
    width: 100%;
}
ul {
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>
<div class="doctor-image">
  <div class="doctor-text">
    <h1 style="font-size:50px">YOUR DOCTOR</h1>
    <p>Find suitable drug for your case</p>
  </div>
</div>
<div class="topnav">
 <ul>
  <li><a href="Home.php">Home</a></li>
  <li><a href="Medical Consult.php">Medical Consult</a></li>
  <li><a href="Contact.php">Contact</a></li>
  <li><a class="active" href="About.php">About</a></li>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i> </a>
</ul>
</div>

<h2>"Meet The Team"</h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="avatar.png" style="width:100%">
      <div class="container">
        <h2>Asmaa Ahmed</h2>
        <p class="title">web designer & developer</p>
        <p>FCI Assuit University</p>
        <p>asmaaahmed23762@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
 <script>

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

  </body>
</html>

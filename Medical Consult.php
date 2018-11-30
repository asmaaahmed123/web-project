<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ar">


<head>
  <title>YOUR DOCTOR</title>
  <meta charset="UTF-8">
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
#bk {
    background: url(bkground.png) left top no-repeat, url(bkground.png) right bottom no-repeat, url(paper.gif) left top repeat;
    padding: 15px;
    background-size: 50px, 130px, auto;
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
    background-image: url("medical.jpg");
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
select{
  cursor: pointer;
  display: inline-block;
  width:350px;
  height:40px;
  color:DarkRed;
  background-color:#FFF8DC;
  position: relative;
  font-size: 16px;
}


#Home {background-color: white;}
#Medical Consult {background-color: white;}
#Contact {background-color: white;}
#About {background-color: white;}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
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
  <li><a  class="active" href="Medical Consult.php">Medical Consult</a></li>
  <li><a href="Contact.php">Contact</a></li>
  <li><a href="About.php">About</a></li>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i> </a>
</ul>

</div>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
    <p style="font-size:120%;"> choose your case from menu list then click on show drug to show you suitable drugs for your case with dose and the allowed age to take this drug</p>
    </div>
<center>
<br> <br>

 <form method="post" action="dooctor.php">
 Disease Name
 <select name="disease_name" class="select">
  <option value="hidden">-- Disease Name --</option>
    <option value="Diabetes" >Diabetes</option>
    <option value="HyperTension" >HyperTension</option>
    <option value="Angina">Angina</option>
    <option value="Cholosterol">Cholosterol</option>
    <option value="common cold">common cold</option>
    <option value="Glucoma">Glucoma</option>
    <option value="Peptic Ulcer">Peptic Ulcer</option>
    <option value="Varicose Vein" >Varicose Vein</option>
    <option value="Renal Failure">Renal Failure</option>
    <option value="Heart Failure">Heart Failure</option>
    <option value="Hepatitis">Hepatitis</option>
    <option value="Arthritis">Arthritis</option>
    <option value="Headache">Headache</option>
</select> <br> <br>

   <button type="submit" name="submit" value="submit"> Show Drug </button>
   </form>
   </center>
<div class="footer">
  <h5>Copyright 2018,All Rights Reserved</h5>
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

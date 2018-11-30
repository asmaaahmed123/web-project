<!DOCTYPE html>
<html>
<head>
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

* {
    box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
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
  <li><a class="active" href="Contact.php">Contact</a></li>
  <li><a href="About.php">About</a></li>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i> </a>
</ul>
</div>



<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>If you had problem leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
    </div>
    <div class="column">
      <form action="send_form_email.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="Email">Email</label>
        <input type="text" id="Email" name="Emai" placeholder="Your Email..">
        <label for="Telephone">Telephone</label>
        <input type="text" id="Telephone" name="Telephone" placeholder="Your Telephone..">

        <textarea id="subject" name="Comment" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>

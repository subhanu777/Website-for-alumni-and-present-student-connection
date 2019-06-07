<?php require_once("session.php"); ?>

<!doctype html>
<html>
<head>
		<title>Contact</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/grid.css" type="text/css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<main>

		<!-------------------- header ------------------->

		<header>
				<div>
				<h1 style="color: #444441 margin-top:40px">Know Your Alumni</h1>
				<nav>
					<ul class="menu">
					<li><a href="index3.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li class="current"><a href="student.php">Student</a></li>
					<li  ><a href="contact.php">Alumni</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
				</div>
		
		</header>
		<!-------------------- content ------------------->
		
		<section class="content-bg">
		<div class="container top">
		
		<div class="row">
		
		<div class="adjust-2">
		<div class="wrap-col">
		<h2>How to Find us</h2>
		
		<div class="map img-border">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.294420466!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1456215777449" width="572" height="235" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		
		<div class="right-1">
		<p class="p2 clr-1">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitt accusam.</p>
<p>Aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
		</div>
		
		</div>
		</div>
		
		<div class="adjust-3">
		<div class="wrap-col">
		<h2>Contact form</h2>
		<form id="form" action="student_signup.php" method="post">
			<fieldset>
			<label>Enter Name*:<input type="text" name="name" required></label>
			<label>Name of Last University/College*:<input type="text" name="last_univ" ></label>
			<label>Current Course from SCSS*</label>
			<select name="last_course">
			<option value="none"></option>
  <option value="elec">Electronic Engineering</option>
  <option value="comp">Computer Engineering</option>
  <option value="mca">MCA</option>
  <option value="mtech">MTech</option>
  <option value="phd">PhD</option>
</select>
			
			<label>Photo</label><label><input type="file" name="pic" accept="image/*"/></label>
			
			<label>Enter Email*<input type="email"  name="email" placeholder="Email Required" required></label>
			<label>Password*<input type="password" name="password"  placeholder="Alpha-Numeric" required></label>
			<label>Contact Number*<input type="tel" name="phn_no" placeholder="Mobile no." required></label>
			<input type="checkbox" style="margin-left:-130px; margin-right:-120px;" checked name="check"><p>I hereby confirm that I am a bona-fide student of SC&SS, Jawaharlal Nehru University, New Delhi</p>
			<div class="btns">
            <button type="submit" name="submit" value="submit" class="button" style="margin-left:20px;border:transparent">Submit</button>
			
            

            
            </div>
			
			</fieldset>
			
		</form>
		</div>
        <button onclick="document.getElementById('id01').style.display='block'" style="margin-left:20px;border:transparent">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate"  method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="pic.png" alt="Avatar" width="5"  height="140"class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Email Id</b></label>
      <input type="text" placeholder="Enter Email Id" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <input type="submit" name="submit" value="Login" src="show_alumni.php">
      <label>
      <?php include("connect_db.php"); ?>
        
		<?php
		if(isset($_REQUEST["submit"]))
		{
			$result = mysql_query("SELECT email FROM student WHERE email='$_REQUEST[email]' AND password='$_REQUEST[password]'");
			if($row = mysql_fetch_array($result))
			{
				echo("Success");
				$uname=$row['email'];
				$_SESSION["e"]=$uname;
				header("location:show_alumni.php");
			}
			else
			{
				echo("<p>Login Failed!!!!</p>");
             }
					
		}
				
		?> 
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
 
 
 	
<script>
// Get the modal
var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		</div>
		
		</div>
		
		</div>
		</section>
				
				<!-------------------- footer ------------------->
				
		<footer>
		
		<p>&copy; 2019 Know Your Alumni<br>
		<a href="#" class="link">Website Template</a>by Prerna Dutta, Satyam Singh, Snehal Patra, Subhanu Halder<br> 
		<a href="#" class="link">Responsive Templates</a> by Prerna Dutta, Satyam Singh, Snehal Patra, Subhanu Halder<a href="#"></a>
		
		<div class="social-icons">
		<span>Follow us:</span>
		<a href="http://wwww.twitter.com"><img src="images/icon-1.jpg"></a>
		<a href="#"><img src="images/icon-2.jpg"></a>
		<a href="#"><img src="images/icon-3.jpg"></a>
		
		</div>
		
		</footer>

</main>
</body>
</html>
		
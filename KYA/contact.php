<!doctype html>
<html>
<head>
		<title>Contact</title>
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<link href="css/grid.css" type="text/css" rel="stylesheet">
</head>
<script>
function myFunction() {
  document.getElementById("button1").style.visibility = "hidden";
}
</script>
<body>
<main>

		<!-------------------- header ------------------->

		<header>
				<div>
				<h1 style="color: #444441 margin-top:40px">Know Your Alumni</h1>
				<nav>
					<ul class="menu">
					<li><a href="index2.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="student.php">Students</a></li>
					<li  class="current"><a href="contact.php">Alumni</a></li>
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
		<h2>Register as Alumni</h2>
		<form id="form" action="alumni.php" method="post">
			<fieldset>
			<label>Enter Name*:<input type="text" name="name" required></label>
			<label>Year of passing out*:<input type="text" name="year" required></label>
			<label>Last Course from SCSS*</label>
			<select name="last_course" required>
			<option value="none"></option>
  <option value="elec">Electronic Engineering</option>
  <option value="comp">Computer Engineering</option>
  <option value="mca">MCA</option>
  <option value="mtech">MTech</option>
  <option value="phd">PhD</option>
</select>
			
			<label>Job Experience*</label>
			<select name="job_ex" required>
	<option value="none"></option>
  <option value="1">1-2</option>
  <option value="3">3-5</option>
  <option value="5">>5</option>
  <option value="10">>10</option>
  <option value="20">>20</option>
</select>
			<label>Companies Worked In(at least one company):</label>
			<label><input type="text" name="com1"></label>
			<label><input type="text"  name="com2"></label>
			<label><input type="text" name="com3"></label>
			<label><input type="text" name="com4"></label>
			<label><input type="text" name="com5"></label>
			<label>Job Profiles Till Date:(at least one job profile)</label>
			<label><input type="text"  name="job1"></label>
			<label><input type="text" name="job2"></label>
			<label><input type="text" name="job3"></label>
			<label><input type="text" name="job4"></label>
			<label><input type="text" name="job5"></label>
			<label>Photo</label><label><input type="file" name="pic" accept="image/*"/></label>
			
			<label>Enter Email*<input type="email" name="email" placeholder="" required></label>
			<label>Password*<input type="password" name="pass" placeholder="" required></label>
			<label>Contact Number*<input type="tel" name="contact" placeholder=""required></label>
			<label>Message<textarea placeholder="" name="message"> </textarea> </label>
			<div class="btns">
			<button type="submit" name="submit" value="Submit" class="button" style="margin-left:20px;border:transparent">Submit</button>
			<a href="login_alumni.html" class="button"> Existing User? Login</a>
		
			</div>
			</fieldset>
		</form>
		</div>
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
		

<?php
	$connection=mysqli_connect("localhost","root","","alumni");
	//$db=mysqli_select_db("alumni",$connection);
	if(mysqli_connect_errno())
	{
			echo "Failed" ;
	}
	echo "njusnc";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
        $name=$_POST['name'];
        $last_univ=$_POST['last_univ'];
        $last_course=$_POST['last_course'];
        $pic=$_POST['pic'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phn_no=$_POST['phn_no'];
		
	
		if(!empty($name) || !empty($last_univ) || !empty($last_course) || !empty($email) || !empty($password) || !empty($phn_no))
		{
			$query=mysqli_query($connection,"insert into student(name, last_univ, last_course, pic,email,password,phn_no) values('$name', '$last_univ', '$last_course','$pic','$email','$password','$phn_no')");
		}
	
	}	
	mysqli_close($connection);
?>

<?php
	$name=$_POST['name'];
	$city=$_POST['city'];
	$password=$_POST['password'];
	$mobile_no=$_POST['mobile_no'];
	$email=$_POST['email'];
	$email=$_POST['subject'];
	
	include 'db.php';
	$q="insert into students_demo values(NULL,'$name','$city','$password','$mobile_no.','$email')";
	$res=mysqli_query($conn,$q);
	if($res)
	{
		echo"<script>
		           alert('data inserted successfully');
		           window.location='student_demo.php';
		     </script>";
	}else
	{
		echo"<script>
		           alert('data not inserted successfully');
		           window.history.back();
		     </script>";
	}
?>
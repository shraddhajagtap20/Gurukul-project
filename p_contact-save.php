<?php
	$name=$_POST['name'];
	$city=$_POST['city'];
	$password=$_POST['password'];
	$mobile_no=$_POST['mobile_no'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	
	$conn=mysqli_connect("localhost","root","","students");
	
	include 'db.php';
	
	$q="insert into students_demo values(NULL,'$name','$city','$password','$mobile_no.','$email','$subject')";
	$res=mysqli_query($conn,$q);
	if($res)
	{
		echo"<script>
		           alert('data inserted successfully');
		           window.location='p_index.php';
		     </script>";
		//echo "Thank you visit again.";
	}else
	{
		//echo"<script>
		           //alert('data not inserted successfully');
		          // window.history.back();
		    // </script>";
	}
?>
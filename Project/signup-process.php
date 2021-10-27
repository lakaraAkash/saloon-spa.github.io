	<?php

	if(isset($_POST['signup']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];
		$query="insert into client_registration(name,name,address,city,state,email,mobile,password)
		values ('$fname','$lname','$address','$city','$state','$email','$mobile','$password')";
		
		$result=mysqli_query($con,"select * from customer_detail where email='$email'") or die(mysqli_error($con));
		if(mysqli_num_rows($res) == 1)
		{
			echo "<script> alert('Error !! Email is already registered');window.location='signup.php'</script></script>";
		}
		else
		{
		$result=mysqli_query($con,$query);
		if($result==1)
		{
		echo "<script>alert('success');window.location='admin/index.php';</script>";

  
			//$_SESSION['cid']=$email;
			
			//echo "SignUp Successfully ";  
			//$_SESSION['cid']=$email;
			//window.location(
		}
		else
		{
			echo"error".mysqli_error($con);
		}
		}
	}
	else
	{
		echo "Not submited";
	}
?>
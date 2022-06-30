<?php

include ('config.php');
session_start();

$currentUserEmail= $_GET['email'];
$sql = "SELECT * FROM employee WHERE email='$currentUserEmail' ";
$run=mysqli_query($conn,$sql);
$dataofuser = mysqli_fetch_assoc($run);


if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	// $status=$_POST['status'];
	$currentUser= $_GET['email'];

   	// $destination="images/"."$filePath";

   	//  $sql = "UPDATE employee (email,password,confirmpassword)
    //     set ('$email','$pass','$cpass') WHERE email = '$currentUserEmail' ";

$sql = "UPDATE `employee` SET `email` = '$email', `password` = '$pass' , `confirmpassword` = '$cpass' 
		 WHERE email = '$currentUserEmail' "; 


		

		// $file=$image['tmp_name'];
		if($conn->query($sql) === TRUE && $pass==$cpass )
		{
			// move_uploaded_file($file, $destination);
			echo "<script>alert('Changes made Successfully');</script>";
		    echo "<script type='text/javascript'> document.location = 'ShortFilmShowcase.php'; </script>";
		}
		else if($pass!=$cpass)
		{
			echo "<script>alert('Invalid Email or Password.');</script>";
		    echo "<script type='text/javascript'> document.location = 'register.php'; </script>";
		}

		else 
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		

}




?>
<?php
include ('config.php');
session_start();

$currentUser= $_GET['email'];
// echo $currentUser;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Short Film Showcase Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	

</head>
<style type="text/css">
	*{
		margin:0;
		padding:0;
		box-sizing: border-box;
	}
	.pic{
		margin-left: 7rem;
	}
	.pic-label{
		font-weight: 600;
	}
</style>
<body>


<div class="header text-center bg-light pt-3">
	<h2>Change Your User Name & Password </h2>
</div>

<div class="text-center">
	<div class="box mt-5">
		<form method="POST" action="emp_reg.php?email=<?php echo $currentUser; ?>" enctype="multipart/form-data">

			<input type="text" name="email" placeholder="New Email" required="required"> <br><br>
			<input type="Password" name="pass" placeholder="New Password" required="required"> <br/><br>
			<input type="Password" name="cpass" placeholder="Confirm Password" required="required"> <br/><br>
		

			<button class="btn btn-primary" type="submit" name="submit">Reset Changes</button>
		</form>
	</div>
</div>


</body>
</html>
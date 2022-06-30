<!DOCTYPE html>
<html>
<head>
	<title>Short Film Showcase</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script type="text/javascript">
		function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>

</head>
<style type="text/css">
	*{
		margin:0;
		padding:0;
		box-sizing: border-box;
	}
</style>
<body>

<center> 
<div class="header text-center bg-light pt-3">
	<h2>Short Film Showcase Login</h2>
</div>

<div class="text-center">
	<div class="box mt-5">
		<form method="POST" action="login_verify.php">

			<input type="text" name="email" placeholder="Enter your Email" required="required"> <br><br>


			<input type="password" name="pass"  placeholder="Create Password" required="required" id="myInput"> <br><br>
			<input type="checkbox" onclick="myFunction()"> Show Password<br><br>

			<button class="btn btn-primary" type="submit" name="submit" style="margin-left:-20px; ">Login</button> <br><br>       
		</form>
	</div>
</div>
</center>

</body>
</html>
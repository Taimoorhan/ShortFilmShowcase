<?php
include ('config.php');

session_start();
if(isset($_POST['submit']))
{
   $email=$_POST['email'];
   $pass=$_POST['pass'];
}

$sql = "SELECT email, password FROM employee WHERE email= '$email' ";
$result = mysqli_query($conn,$sql);



$row = mysqli_fetch_array($result);


if(  ($mail=$_POST['email'] == $row['email']) &&  ($pass=$_POST['pass'] == $row['password'])  )
{
  session_start();
  $_SESSION['email']=$_POST['email'];
  
  header("location: ShortFilmShowcase.php");          /* Here include page which represent after login access*/
}
else
	{
		echo "<script>alert('Incorrect Information');</script>";
		echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
	}
?>

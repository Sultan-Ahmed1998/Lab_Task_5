<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>




<?php
$nameerr=$emailerr="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$nameerr="* Name requirment error!";
	}
	else
	{	
		$nameerr=$_POST["name"];	
	}
	if(empty($_POST["email"]))
	{
		$emailerr="* Email requirment error!";
	}
	else
	{	
		$emailerr=$_POST["email"];	
	}
	
	
}

?>

<form action="session.php" method="post">
	
	<b>Name:</b>
	<input type="text" name="name">
	<span style="color:black"><?php echo $nameerr; ?></span><br><br>
	
	<b>Email:</b>
	<input type="text" name="email">
	<span style="color:black"><?php echo $emailerr; ?></span><br><br>
	

	
	

	<input type="submit" value="submit">
	

</form>


</body>
</html>









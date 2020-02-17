<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Your Name is " . $_SESSION["name"]=$_POST["name"] ;
echo "<br>";
echo "Your Email is " . $_SESSION["email"]=$_POST["email"];

?>
<?php
$gendererr="";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(empty($_POST["gender"]))
	{
		$gendererr="* Gender requirment error!";
	}
	else
	{	
		$gendererr=$_POST["gender"];	
	}
	
}

?>
<form action="season2.php" method="post">
	
	<b>Gender</b>
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Female">Female
	<input type="radio" name="gender" value="Other">Other
	<span style="color:black"><?php echo $gendererr; ?></span>
	<br><br>
	
	

	<input type="submit" value="submit">
	

</form>



</body>
</html>
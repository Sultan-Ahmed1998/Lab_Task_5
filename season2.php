
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Your Gender is " . $_SESSION["gender"]=$_POST["gender"];
?>
<?php

$file = fopen("User Info.txt", "w") or die("Unable to open file!");

$data = $_SESSION["name"];

fwrite($file, $data."\n");

$data = $_SESSION["email"];

fwrite($file, $data."\n");

$data = $_SESSION["gender"];

fwrite($file, $data);

fclose($file);


?>
</body>
</html>
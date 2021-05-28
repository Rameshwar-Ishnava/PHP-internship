<html>
	<title> PHP </title>
<body>
<?php
$name = "Rameshwar";
$age = 23;
 
if ($age < 20)
{
  echo "$name Your age is less than 20!";
}
elseif ($age > 20 && $age < 30)
{
  echo "$name Your age is between 20 and 30!";
}
elseif ($age > 30 && $age < 40)
{
  echo "$name Your age is between 30 and 40!";
}
else
{
  echo "$name Your age is greater than 40!";
}
?>
<body>
<html>

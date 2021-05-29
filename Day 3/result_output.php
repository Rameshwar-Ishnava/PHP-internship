<?php
$sub1 = $_POST['sub1'];
$marks1 = $_POST['marks1'];
$sub2 = $_POST['sub2'];
$marks2 = $_POST['marks2'];
$sub3 = $_POST['sub3'];
$marks3 = $_POST['marks3'];
$sub4 = $_POST['sub4'];
$marks4 = $_POST['marks4'];


$sub = array($sub1,$sub2,$sub3,$sub4);
$marks = array($marks1,$marks2,$marks3,$marks4);
$total = $per = 0;

echo "<center> <h1> Result </h1> <table>";
for($i=0;$i<4;$i++){
  echo "<tr>";
  echo "<td width='100px' align='center'>$sub[$i] </td>";
  echo "<td width='100px' align='center'>$marks[$i] </td>";
    $total = $total + $marks[$i];
  echo "</tr>";
}
    
			$per=$total/4;
			echo "<center>";
    				if($per>=70)
    					{
      			 			echo "<h1><font color=green>Your Grade: &nbsp &nbsp A</h1><h2><br>";
       						echo "Congratulation";
       						echo "<br>You get Distinction<br>";
    					}
   				else if($per>=60)
					{
						echo "<h1><font color=green>Your Grade: &nbsp &nbsp B</h1><br>";
       						echo "First Class<br>";
					}
   				else if($per>=40)
       					{
						echo "<h1><font color=green>Your Grade: &nbsp &nbsp C</h1><br>";
						echo "<h3>Pass Class";
						echo "<br>";
   					}
				else if($per <=40)
					{
						echo "<h1><font color=red>Your Grade: &nbsp &nbsp D</h1><h2><br>";
      						echo "You Are Fail";
					}
    		echo "Total is $total, Percentage is $per<br>";
	?>
</body>
<html>
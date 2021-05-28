<html>
<body>
	<title> Result </title>

	<?php

   		 $CNS=70;
    		$DWPD=70;
   	 	$JAVA=70;

			$total=$CNS+$DWPD+$JAVA;
			$per=$total/3;
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
	
    		echo "CNS Mark is &nbsp &nbsp$CNS<br>";
    		echo "DWPD Mark is $DWPD<br>";
    		echo "JAVA Mark is $JAVA<br>";
    		echo "<br>";
    		echo "Total is $total, Percentage is $per<br>";
	?>
</body>
<html>

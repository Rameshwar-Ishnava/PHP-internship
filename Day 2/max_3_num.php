<html>
	<title> max3 </title>
<body>

	<?php
	
		$A=50;
    		$B=40;
    		$C=20;
	
		echo "<h2><font color=red>A is : $A","<br/>","<font color=blue>B is : $B","<br/>","<font color=green>C is : $C</h2>";
		echo "<h1> <font color=orange>";
    			if($A>$B and $A>$C)
    			{
        			echo "Max is $A";
   			 }
  				  else if($B>$C)
    			{
        			echo "Max is $B";
    			}
    			else
    			{
        			echo "Max is $C";
    			}
	?>
</body>
</html>

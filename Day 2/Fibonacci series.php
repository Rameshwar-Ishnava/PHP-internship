<html>
	<title>fibo</title>
<body>
	<?php
		
		function fibo($n)
	{
  	  	$a = 0; // first number of series
    		$b = 1; // second number of series

    		echo "<h1><font color=red>Fabonacci Series </font><br/>";
    		echo "<h2><font color=blue>";
		echo $a.' '.$b;
    	
		for($i=2; $i<$n ;$i++)
		{
			$c = $a + $b; //print next number of series
        		echo' '.$c;

       			 $a = $b;
        		 $b = $c;
    		}
	}
fibo(10);
	?>
</body>
</html>
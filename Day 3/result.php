 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>result</title>
 </head>
 <body><center>
 <?php
if(isset($_POST['s']))////checking whether the input element is set or not
{
    $a=$_POST['t1']; //accessing value from 1st text box
    $a1=$_POST['t2']; //accessing value from 2nd text field
    $a2=$_POST['t3']; //accessing value from 3rd text field
    $a3=$_POST['t4']; 
    $a4=$_POST['t5'];
    $a5=$_POST['t6'];//accessing value from 4th text field
    $sum=$a1+$a2+$a3+$a4+$a5; //total marks
    $avg=$sum/5;
    if($avg>=0&&$avg<=50)
        $grade="Fail";
    if($avg>50&&$avg<=70)
        $grade="C";
    if($avg>70&&$avg<=80)
        $grade="B";
    if($avg>80&&$avg<=90)
        $grade="A";
    if($avg>90)
        $grade="E";
    echo "<br>";
   
    echo "<font size=4>Student is:-".$a."<br>"; 
	 echo "<font size=4>Marks for AJAVA is:-".$a1."<br>"; 
	  echo "<font size=4>Marks for CNS  is:-".$a2."<br>"; 
	   echo "<font size=4>Marks for PHP is:-".$a3."<br>";  
       echo "<font size=4>Marks for DWPD is:-".$a4."<br>";
       echo "<font size=4>Marks for Android is:-".$a5."<br>";
    echo "<font size=4>Total marks:-".$sum."<br>"; 
    echo "<font color=red size=4 >Grade is:-".$grade.""; 
 
}
 ?>

 </center>
 </body>
 </html>

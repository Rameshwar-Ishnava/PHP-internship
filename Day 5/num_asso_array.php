<?php 
//Associative Array
//Key = value
echo "<h1>Associative Array</h1>";
//method 1
$a[0]=10;
$a["c"]="computer";
$a["php"]="Web Developement";
$a[4]="four";
$a[5]=50.50;
//method 2 
//method 2 use always this method TO CREATE	array
$a = array(
	0 => 10,
	"c" => "Cat",
	"php" => "Web",
	10 => "ten",
	50 => 50.10,
	);
// print array value
echo "C for ".$a['c'];
//print whole array
foreach($a as $value){
	echo "<br/>value is ".$value;
}
foreach($a as $key => $value){
	echo "<br/>key is <b>$key</b> and value is <b>$value</b>";
}
//inbuilt array function to debug array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";


//numerical Array
echo "<h1>Numerical Array</h1>";
//method 1
$a[0]=10;
$a[2]=120;
$a[3]=20.26;
$a[4]="r";
$a[5]="008";
//method 2 //index dynamic array
$a[]=10;
$a[]=20;
$a[]=20.50;
$a[]="Rameshwar Ishnava";
$a[]="186250307508";
//method 3 use always
$a = array(10,20,30,"Rameshwar","Ishnava",10.50);
// print array value
echo $a[3];
//print whole array
for($i=0;$i<count($a);$i++){
	echo "<br/>".$a[$i];
}
//inbuilt array function to debug array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";


?>
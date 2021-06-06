<html>
<haed>
	<title> functin</title>
</head>
<body>
<center>
<?php
    echo "<h3>Count Function</h3>";
    
    $arr = array('php','c','c++','java','Android'); 
    echo count($arr);

    echo "<h3>Count Values Function</h3>";
    $arr = array("C","php","c","android","php","java");
    $newarr = array_count_values($arr);
    foreach ($newarr as $key => $value) {
        echo "<br/>$key - <strong>$value</strong> ";
    }

    echo "<h3>Sum Function</h3>";
    
    $myarray = array(1,2,3,4,5); 
    echo "<h3> sum of 1+2+3+4+5 = </h3>" ;
    echo array_sum($myarray);

    echo "<h3>Product Function</h3>";
    $myarray = array(1,2,3,4,5); 
    echo array_product($myarray);

    echo "<h3>Reverse Function</h3>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $revarr = array_reverse($arr);
    print_r($revarr);

    echo "<h3>In Array Function</h3>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $temp = in_array('php',$arr); 
    echo $temp;

    echo "<h3>Random Function</h3>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $indexofarray = array_rand($arr);    //Returns Array Index 
    echo $arr[$indexofarray];

    echo "<h3>Multiple Keys at Random Function</h3>";
    $arr = array('c', 'c++', 'java', 'android', 'php');
    $indexofarray = array_rand($arr,2);//Returns Array Index
    foreach ($indexofarray as $key => $value)
    {
        echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
    }

    echo "<h3>Unique Function</h3>";
    $arr = array('c', 'c++','android', 'java', 'android', 'php'); 
    print_r(array_unique($arr));

    echo "<h3>Merge Function</h3>";
    $arr1 = array('c','c++','android','java','php');
    $arr2 = array(10,20,30,40,50);
    $NewArr = array_merge($arr1,$arr2); 
    print_r($NewArr);

    echo "<h3>Search Function</h3>";
    $myarr = array('c', 'c++','android', 'java', 'php');
    $check = array_search('android', $myarr); 
    echo $check; // Return Index

    echo "<h3>Range Function</h3>";
    $arr = range("11", "20"); 
    foreach($arr as $key => $value)
    {
        echo "<br /> $key - $value ";
    }

    echo "<h3>Sort Function</h3>";
    $arr = array(80,60,50,40,8,74); 
    sort($arr);
    print_r($arr);

    echo "<h3>RSort Function</h3>";
    $arr = array(80,60,50,40,8,74); 
    rsort($arr);
    print_r($arr);

    echo "<h3>ASort Function</h3>";
    $arr = array(80,60,50,40,8,74); 
    asort($arr);
    print_r($arr);

    echo "<h3>KSort Function</h3>";
    $arr = array(
        "Banana" => "Yellow", "Apple" => "Red",
        "Mango" => "Green"
    );
    ksort($arr);
    foreach ($arr as $key => $value) 
    { 
        echo "<br />$key - $value ";
    }        

    echo "<h3>KSort Reverse Function</h3>";
    $arr = array( 
        "Banana" => "Yellow", "Apple" => "Red",
        "Mango" => "Green"
    ); 
    krsort($arr);
    foreach ($arr as $key => $value) { 
        echo "<br />$key - $value ";
    }

    echo "<h3>Shuffle Function</h3>";
    $myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing"); 
    shuffle($myArray);	// Shuffle the array 
    foreach ($myArray as $key => $value) {
        echo "<br /> $value ";
    }

    echo "<h3>Key Exists Function</h3>";
    $arr = array("a" => "apple", "b" => "banana"); 
    echo array_key_exists('a',$arr);    

    echo "<h3>Change Key Case Function</h3>";
    $arr = array(
        "Banana" => "Yellow",
        "Apple" => "Red",
        "Mango" => "Green"
    );
    $uppercase = array_change_key_case($arr,CASE_UPPER); 
    print_r($uppercase);

    echo "<h3>Combine Function</h3>";
    $arr1 = array("Banana" , "Apple" , "Mango");
    $arr2 = array("Yellow","Red", "Green");
    $NewVar = array_combine($arr1, $arr2); 
    print_r($NewVar);

    echo "<h3>End Function</h3>";
    $myarr = array('c', 'c++','android', 'java', 'php'); 
    echo end($myarr);

    echo "<h3>Compact Function</h3>";
    $name = "Ayush";
    $subject = "php";
    $arr = compact("name", "subject"); 
    print_r($arr);

    echo "<h3>Flip Function</h3>";
    $arr = array("a" => "ayush", "b" => "banana", "c" => "computer");
    $fliparray = array_flip($arr);
    print_r($fliparray);

    echo "<h3>Difference Function</h3>";
    $a=array("Ayush","c","c++","java","php","android");
    $b=array("Ayush","c","java","php");
    $diff = array_diff($a, $b); print_r($diff);

    echo "<h3>Intersect Function</h3>";
    $arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
    $arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
    print_r(array_intersect($arr1,$arr2));

    echo "<h3>Values Function</h3>";
    $arr = array("i"=>"c","want"=>"c++","learn"=>"php");
    $myarr = array_values($arr); 
    foreach($myarr as $key => $value) { 
        echo " <br />$key - $value";
    }

    echo "<h3>Push Function</h3>";
    $a=array("c","c++");
    array_push($a,"java","php"); 
    print_r($a);

    echo "<h3>Pop Function</h3>";
    $a = array("c", "c++", "Java", "PHP", "ASP");
    array_pop($a); //Remove 
    print_r($a); 
    array_pop($a); //Remove 
    print_r($a);

    echo "<h3>Explode Function</h3>";
    $mystring = "I Love PHP Language";
    $arr = explode(" ",$mystring); 
    print_r($arr);

    echo "<h3>Implode Function</h3>";
    $arr = array("i","love","php","language");
    $mystring = implode(" ", $arr); 
    echo $mystring;

?>
</center>
</body>
</html>

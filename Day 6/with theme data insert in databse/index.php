<?php

$conn = mysqli_connect("localhost", "root", "", "tbl_std");

if ($_POST){
$fullname = $_POST['text1'];
$gender = $_POST['text2'];
$dob = $_POST['text3'];
$email = $_POST['text4'];
$contact = $_POST['text5'];
$password = $_POST['text6'];
$area = $_POST['text7'];
$pincode = $_POST['text8'];
$blodgroup = $_POST['text9'];
$address = $_POST['text10'];

$q = mysqli_query($conn, "INSERT INTO tbl_stu (fullname, gender, dob, email, contact, password, area, pincode, blodgroup, address) values ('{$fullname}' , '{$gender}', '{$dob}' , '{$email}' , '{$contact}' , '{$password}' , '{$area}' , '{$pincode}' , '{$blodgroup}' , '{$address}')") or die (mysqli_error($conn));

  if ($q)
   {
        echo "<script>alert ('add success') </script>";
  # code..
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner">
				<form method="post">
					<h3>RegistrationForm</h3>
		Full Name: 
		       <input type="txet" class="form-control" name="text1" placeholder="name" ><br><br>
		Gender: 
		        	<select name="text2" class="form-control" >
		        	  	<option  value="male">male</option>
		        	  	<option  value="female">Female</option>
		            	<option  value="other">other</option>
		         	</select><br><br>
		DOB: 
           <input type="date" class="form-control" name="text3"  ><br><br>
		Email: 
              <input type="email" class="form-control" name="text4" placeholder="Email"><br><br>
        Contact: 
              <input type="number" class="form-control" name="text5" placeholder="Contact"><br><br>
        Password: 
              <input type="Password" class="form-control" name="text6" placeholder="PASSWORD"><br><br>
        Area: 
              <input type="text" class="form-control" name="text7" placeholder="area" ><br><br>
        Pincode: 
              <input type="number" class="form-control" name="text8" placeholder="pincode" ><br><br>
		Blodgroup: 
              <input type="text" class="form-control" name="text9" placeholder="Blodgroup" ><br><br>	
		Address:
			  <textarea name="text10" id="" class="form-control"></textarea>
		<button>Submit 
				<i class="zmdi zmdi-arrow-right"></i>
		</button>
				</form>
			</div>
		</div>
		
	</body> 
	</html>
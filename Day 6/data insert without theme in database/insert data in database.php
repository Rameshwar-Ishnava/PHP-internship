<?php
$conn = mysqli_connect("localhost", "root", "", "tbl_std");

if($_POST){
$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$area = $_POST['area'];
$pincode = $_POST['pincode'];
$blodgroup = $_POST['blodgroup'];
$address = $_POST['address'];


$q = mysqli_query($conn, "insert into tbl_stu (fullname, gender, dob, email, contact, password, area, pincode, blodgroup, address) values ('{$fullname}', '{$gender}', '{$dob}','{$email}','{$contact}','{$password}','{$area}','{$pincode}','{$blodgroup}','{$address}')") or die (mysqli_error($conn)); 

  if($q){
    echo "<script> ('record added') </script>";
  }
}
?>
<html>
<head>
    <title> tbl student</title>
    <link rel="shortcut icon" type="image/jpg" href="#"/>
  </head>
<body>
	<center>
	<form action="#" method="POST"><br>
		FullName: 
              <input type="text" name="fullname" placeholder="Your Full Name" ><br><br>
        gender: 
        	<select name="gender">
        	  <option value="male">male</option>
        	  <option value="female">Female</option>
            <option value="other">other</option>

        	</select> <br><br>

        DOB: 
              <input type="date" name="dob" placeholder="DOB" ><br><br>
        Email: 
              <input type="email" name="email" placeholder="Email"><br><br>
        Contact: 
              <input type="text" name="contact" placeholder="Contact"><br><br>
       
       Password: 
              <input type="Password" name="password" placeholder="PASSWORD"><br><br>
        Area: 
              <input type="text" name="area" placeholder="area" ><br><br>
        Pincode: 
              <input type="number" name="pincode" placeholder="pincode" ><br><br>
      	Blodgroup: 
              <input type="text" name="blodgroup" placeholder="Blodgroup" ><br><br>
        Address: 
              <textarea cols="80" rows="5" name="address" value="address"></textarea><br><br>
        <button type="submit">Submit</button>
          </form>
          <center>
    </body>
</html>

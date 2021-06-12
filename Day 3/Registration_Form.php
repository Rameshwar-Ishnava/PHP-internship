<html>
<head>
	<title> Govt Polytechnic  </title>
	<style>
/* css for menu*/

.menu li a{
  display: block;
  float: left;
  font-size: 21px;
  padding:14px 10px;
 
}
.menu ul {
  list-style-type:none;
  overflow: hidden;
  background-color:green;
}  
.menu ul li a{
   text-decoration: none;
   font-weight: bold;
   color: orange;
}
.menu li a:hover:not(.active) {
  background-color:blue;
}

table tr th,td{padding: 2px;}
table	{margin: auto;}

/*btn*/
.btn {
	text-align: center;
    }

/*css for footer*/
.footer{
	width: 100%;
	height: 12vh;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;color: whitesmoke;
	background-color: royalblue;
	margin-bottom: 0%;
	font-size:25px;
	font-family: serif;
	}
	
	</style>
</head>

<body>
<div class="menu">
	<ul>
	  <li><a href="#">Home</a></li>
	  <li><a href="#">Admission</a></li>
	  <li><a href="#">Facility</a></li>
	  <li><a href="#">About us</a></li>
	  <li><a href="#">Contact Us</a></li>
	</ul>
</div>
<hr color="orange" size="5">
<hr color="green" size="5">
<h1 align="center" width="100%" > <font color="blue" size="50">Govt Polytechnic Jamnagar </font> </h1>
<h1 align="center"  > <font color="green" >Registration  Form </font> </h1>
<hr color="orange" size="5">
<hr color="green" size="5">
<br>
<form action="output_display.php" method="POST" >
<table border="2" style="border-collapse: collapse;width: 5%">
<tr>
          <td> <b> Full Name </b> </td>
          <td> <input type="text" name="fname"/> </td>
        </tr>
        
        <tr>
          <td> <b> Email </b> </td>
          <td> <input type="email" name="email"/> </td>
        </tr>
        <tr>
          <td> <b> Mobile Number </b> </td>
          <td> <input type="Number" name="mobile"/> </td>
        </tr> 
        <tr>
          <td> <b> D.O.B. </b> </td>
          <td> <input type="date" name="dob"/> </td>
        </tr>
        <tr>
          <td> <b> Gender </b> </td>
          <td>  <input type="radio" name="gender" checked value="Male"> Male 
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other </td>
        </tr> 
        <tr>
          <td> <b> Hobbies </b> </td>
          <td> <input type="text" name="hobbies"/> </td>
        </tr>
        <tr>
          <td> <b> City </b> </td>
          <td> <input type="text" name="city"/> </td>
        </tr>
        <tr>
          <td> <b> Address </b> </td>
          <td> <textarea name="address" rows="5" cols="40"></textarea> </td>
        </tr>
        <tr>
          <td> <b> Username </b> </td>
          <td> <input type="text" name="username"/> </td>
        </tr>
        <tr>
          <td> <b> Password </b> </td>
          <td> <input type="password" name="pass"/> </td>
        </tr> 
        <tr>
          <td><input type="submit" ></td>
          <td><input type="reset" ></td>
       </tr>
	</table>
 </form>
 		<hr color="orange" size="5">
		<hr color="green" size="5">

 <footer>
	<div class="footer">
		<p><b>Designed by Rameshwar</b></p>
	</div>
</footer>
</body>
</html> 

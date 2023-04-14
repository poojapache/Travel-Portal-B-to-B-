<html>
<head>
<link rel="stylesheet" href="sty.css">
</head>
<body>
<ul>
<li><a class="active" href="">Home</a></li>
<li id="lastchild"><a href="aboutus.php" >About us</a></li>
<i id="login" onclick="myfunc()" ><img src="log1.png" alt="Login" style="height:5vh;width:3vw;float:right;padding-top:1.3vh;padding-right:1vw;object-fit:fill"></i>
</ul>


<div class="parent">

<div class="mySlides fade">
  <img src="trave1.jpg" >
</div>

<div class="mySlides fade">
  <img src="trave6.jpg" >
</div>

<div class="mySlides fade">
  <img src="trave2.jpg" >
</div>

<div class="mySlides fade">
  <img src="trave4.jpg" >
</div>

</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<div class="formcontainer">
<form style="border:0px solid #ccc" action="ind.php" method="post" enctype="multipart/form-data" id="f">
<table>
<center><h2 id="signup">Sign Up</h2></center>
<tr><div class="innerdiv">
 <td><label id="lab"><b>Name </b></label></td>
 <td><input type="text" placeholder="Enter name" name="name" required class="txtfld" pattern="(?=[a-zA-Z][a-zA-Z ]).{1,}" title="Enter proper name"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab"><b>Id </b></label></td>
 <td><input type="text" placeholder="Enter id" name="id" required class="txtfld" pattern="(?=[a-z A-Z 0-9]).{1,5}" title="Enter proper id"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
  <td><label  id="lab"><b>Company Name </b></label></td>
  <td><input type="text" placeholder="Enter company name" name="cname" required class="txtfld"pattern="(?=[a-zA-Z]).{1,}" title="Invalid company name"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
  <td><label id="lab"><b>Department Name </b></label></td>
  <td><input type="text" placeholder="Enter department name" name="dname" required class="txtfld" pattern="(?=[a-z A-Z \s]).{1,}"></td>
</div>
</tr>
<tr>
<div>
  <td><label id="lab"><b>Mobile no.</b></label></td>
  <td><input type="tel" placeholder="Enter mobile no." name="mobile" required class="txtfld"pattern="[7-9]{1}[0-9]{9}" title="Invalid mobile number"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
  <td><label id="lab"><b>Grade</b></label></td>
  <td><input type="text" placeholder="Enter grade" name="grade" required class="txtfld" pattern="(?=.*[a-z A-Z]).{1,}" title="Invalid grade"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab"><b>Email</b></label></td>
 <td><input type="email" placeholder="Enter email" name="email" required class="txtfld" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" /></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab"><b>Password</b></label></td>
 <td><input type="password" placeholder="Enter password" name="psw" required class="txtfld" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab"><b>Repeat Password</b></label></td>
 <td><input type="password" placeholder="Repeat password" name="repsw" required class="txtfld" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab"><b>Choose your Profile Picture</b></label></td>
 <td><input  class="txtfld"type="file" name="foto" id="foto" align="center"></td>
</div>
</tr>
</div>

  <tr>  
  <td colspan="2"><div class="clearfix"><input type="submit" value="Sign Up" class="signupbtn1" name="submit" onClick="myFunction()"></div></td>
  </tr>

</table>
</form>
</div>

<div id="modalbox" class="modal">
<div class="modal-content">
<div class="head" >
<span class="close" onclick="closemod()" style="float:right">&times;</span>
<center>Login</center> 
</div>
<form method="post" action="login.php">
<fieldset class="textbox" style="border:0">
<table cellspacing="10">
<tr><div class="innerdiv">
 <td><label id="lab" style="color:	#708090"><b>Name </b></label></td>
 <td><input id="username" type="text" placeholder="Username" name="username" autocomplete="on" required class="txtfld" ></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:	#708090"><b>Id </b></label></td>
 <td><input id="id" type="text" placeholder="Id" name="id" autocomplete="on" required class="txtfld"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:	#708090"><b>Password</b></label></td>
 <td><input id="password" type="password" placeholder="********" value="" name="password" required class="txtfld"></td>
</div>
</tr>
<tr>
<td colspan="2"> <button class="submit button" type="submit" id="loginbtn" >Login</button></td>
</tr>

</table>
</fieldset>
</form>
</div>
</div>

<script>

var slideIndex = 0;

showSlides();
//Slideshow
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}

//Modal
var mod=document.getElementById('modalbox');
var image=document.getElementById('login');
var span = document.getElementsByClassName("close")[0];
function myfunc(){
mod.style.display="block" ;

}
function closemod() {
    mod.style.display = "none";

}

//form validation
function myFunction() {
	var form = document.getElementById('f');
  if (form.checkValidity()) {
    alert("Succesfully Registered!!!\nLogin to continue...");
	setTimeout(location.reload.bind(location), 15000);
  }
}
</script>
</body>
</html>
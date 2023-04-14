<html>
<head>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 2vw;
    position: fixed;
    z-index: 1;
    left: 35vw;
    bottom:10vh;
    font-size: 1.5vw;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s;
    animation: fadein 0.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}


</style>
</head>
<body>
<?php
if($_POST){
include('connection.php');

if($conn->connect_error >0)
{
die('Connection Failed');
}
else
{
session_start();
$_SESSION['uname']=$_POST['username'];
$_SESSION['uid']=$_POST['id'];
$_SESSION['password']=$_POST['password'];
$name=$_SESSION['uname'];
$id=$_SESSION['uid'];
$psw =$_SESSION['password'];

$sql = "SELECT * FROM employee WHERE emp_id ='$id' AND psw='$psw' AND name='$name'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count>0){

      
		
      if($count == 1) {
		 $_SESSION['cname']=$row['cname'];
         $_SESSION['dname']=$row['dname'];
         $_SESSION['mobile']=$row['mobile'];
         $_SESSION['grade']=$row['grade'];
         $_SESSION['email']=$row['email'];
		 $file_to_saved=$row['profilepic'];
		 if(strcmp($file_to_saved,"pic/")===0)
		 {
		 	$file_to_saved="pic/default.png" ;
		 }
		 $_SESSION['file']=$file_to_saved;
	  }


if((strcmp($_SESSION['grade'],"M")=== 1) || (strcmp($_SESSION['grade'],"M")=== -1))      
{
$query = "SELECT eid,location,budget FROM assign WHERE eid ='$id'";
$res = mysqli_query($conn,$query);
$r = mysqli_fetch_array($res,MYSQLI_ASSOC);
$cnt = mysqli_num_rows($res);
      
		
      if($cnt >= 1) {
		  $f=true;
		  $loc=$r['location'];
		  $bud=$r['budget'];
	  }
	  else{
		  $f=false;
	  }
 ?>
<div class="profcard">
<div class="sidecard">
<div class="img1box">
<img src="img.jpg" alt="Pineapple" class="image1" style="position:absolute">
</div>
<div>
<img src="<?php echo $file_to_saved ?>" alt="Pineapple" width="250px" height="250px" class="image2">
</div>
<div class="profname"style="position:relative">
<h1 ><?php echo $name ; ?></h1>
</div>
</div>
<div class="rightcard">
<div style="object-fit:fill;">
<button class="tablink" onclick="openCity('Details', this)" id="defaultOpen">Details</button>
<button class="tablink" onclick="openCity('Travel', this)">Travel</button>
<button class="tablink" onclick="openCity('History', this)">History</button>
</div>
<div id="Details" class="tabcontent">
<ul class="tabs" style="background-color:white;width:50.5vw;height:4vh;margin-right:1vw;margin-top:0.5vh;">
<li style="float:right"><i id="login" onclick="signout()" ><img src="signout.png" alt="Login" style="height:3vh;width:2.0vw;padding-top:1.3vh;padding-right:1vw;object-fit:fill;cursor:pointer;"></i></li>
<li style="float:right" id="noti_Container"> <div id="noti_Counter"></div> <i id="noti_Button" onclick="myFunction()" ><img src="notification.png" alt="Login" style="height:3vh;width:2.0vw;padding-top:1.3vh;padding-right:1vw;object-fit:fill"></i> </li>
<div id="snackbar">
<i onclick="movetotravel()" style="cursor:pointer">
<span class="close" onclick="closebox()" style="float:right;margin-top:0;cursor:pointer;color:grey">&times;</span>
<h3 style="font-size:1.5vw">You have been assigned the location <?php echo $loc;?> and a budget of rupees <?php echo $bud;?>.</h3>
</i>
</div>
<li style="float:right"><i  class="dropdown" onclick="myfunc()" ><img src="settings.png" alt="Login" style="height:4vh;width:2.5vw;padding-top:1vh;padding-right:1vw;object-fit:fill;cursor:pointer;"></i></li>
</ul>

 <div id="myDropdown" class="dropdown-content" style="float:right;right:7vw;">
    <a onclick="displayupdatelist()" style="font-style:normal;color:#008b8b;font-size:1.5vw;cursor:pointer;"><b>Update</b></a>
    <a onclick="myfunction()" style="font-style:normal;color:#008b8b;font-size:1.5vw;cursor:pointer;"><b>Delete</b></a>
 </div>
  <iframe src="details.php" frameborder = "no" name="detframe" id="detframe"></iframe>
</div>

<div id="Travel" class="tabcontent">
    <iframe src="travel.php" frameborder = "no" id="detframe" scrolling="no" ></iframe>
</div>

<div id="History" class="tabcontent">
  <iframe src="history.php" frameborder = "no" id="detframe">
  
  </iframe>
</div>
</div>

</div>


<div id="modalbox" class="modal">
<center>
<div class="modal-content" style="width:55vw;height:30vh;margin: 25vh 23vw;">
<div class="head" style="width:auto;height:5vh;">
<span class="close" onclick="closemod()" style="float:right">&times;</span>

<center><fieldset class="textbox" style="border:0;width:auto;height:auto">
<center><table cellspacing="10">
<tr>
<td></td>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:	#708090;font-size:2vw;"><b>Delete your account?</b></label></td>
</div>
</tr>
<tr>
<td><center><form method="post" action="delete.php" ><input type="submit" name="delete" id="loginbtn" style="font-size:1.5vw" value="Yes"></input></form></center></td>
</tr>
</table>
</center>
</fieldset>
</center>

</div>
</div>
</center>
</div>
<?php if($f){ ?>
<script type="text/javascript">
var box=document.getElementById('snackbar');
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
 
}
function closebox() {
    box.style.display = "none";

}
 $(document).ready(function () {
$('#noti_Counter')
            .css({ opacity: 0 })
            .text('New')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '6px', opacity: 1 }, 500);
			   $('#noti_Button').click(function () {
				      $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

            return false;
        });
			  $(document).click(function () {
            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Button').css('background-color', '#FFF');
            }
        });

 });
 function movetotravel()
 {var color='#00CED1';
  tabcontent = document.getElementsByClassName("tabcontent");
     for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
	var x = document.getElementById("snackbar")
    x.className = "hide";
	 document.getElementById('Travel').style.display = "block";
    tablinks[1].style.backgroundColor = color;
 }
 document.getElementById("defaultOpen").click();
</script>
<?php
}
}
else{
?>
<div class="profcard">
<div class="sidecard">
<div class="img1box">
<img src="img.jpg" alt="Pineapple" class="image1" style="position:absolute">
</div>
<div>
<img src="<?php echo $file_to_saved ?>" alt="Pineapple" width="250px" height="250px" class="image2">
</div>
<div class="profname"style="position:relative">
<h1 ><?php echo $name ; ?></h1>
</div>
</div>
<div class="rightcard">
<div style="object-fit:fill">
<button class="tablink" onclick="openCity('Details', this)" style=" width: 26vw;" id="defaultOpen">Details</button>
<button class="tablink" style=" width: 26vw;"onclick="openCity('Travel', this) ">Assign</button>

</div>
<div id="Details" class="tabcontent">
<ul style="background-color:white;width:50.5vw;height:4vh;margin-right:1vw;margin-top:0.5vh;">
<li style="float:right"><i id="login" onclick="signout()" ><img src="signout.png" alt="Login" style="height:3vh;width:2.0vw;padding-top:1.3vh;padding-right:1vw;object-fit:fill;cursor:pointer;"></i></li>
<li style="float:right"><i  class="dropdown" onclick="myfunc()" ><img src="settings.png" alt="Login" style="height:4vh;width:2.5vw;padding-top:1vh;padding-right:1vw;object-fit:fill;cursor:pointer;"></i></li>
</ul>

 <div id="myDropdown" class="dropdown-content" style="float:right;right:7vw;">
    <i ><a onclick="displayupdatelist()" style="font-style:normal;color:#008b8b;font-size:1.5vw;cursor:pointer;"><b>Update</b></a></i>
    <i ><a onclick="myfunction()" style="font-style:normal;color:#008b8b;font-size:1.5vw;cursor:pointer;"><b>Delete</b></a></i>
 </div>
  <iframe src="details.php" frameborder = "no" name="detframe" id="detframe"></iframe>
</div>

<div id="Travel" class="tabcontent">
    <iframe src="manemp.php" frameborder = "no"  id="detframe">
  
  </iframe>
</div>
</div>

</div>
<div id="modalbox" class="modal">
<center>
<div class="modal-content" style="width:55vw;height:30vh;margin: 25vh 23vw;">
<div class="head" style="width:auto;height:5vh;">
<span class="close" onclick="closemod()" style="float:right">&times;</span>

<center><fieldset class="textbox" style="border:0;width:auto;height:auto">
<center><table cellspacing="10">
<tr>
<td></td>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:	#708090;font-size:2vw;"><b>Delete your account?</b></label></td>
</div>
</tr>
<tr>
<td><center><form method="post" action="delete.php" ><input type="submit" name="delete" id="loginbtn" style="font-size:1.5vw" value="Yes"></input></form></center></td>
</tr>
</table>
</center>
</fieldset>
</center>

</div>
</div>
</center>
</div>
<?php
}
}
else
{
	echo "ERROR!!!";
}
}
}
?>
 
</body>
<script type="text/javascript">
function openCity(cityName,elmnt) {
    var i, tabcontent, tablinks,color='#00CED1';
   
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;
  

}
document.getElementById("defaultOpen").click();

function myfunc() {
    document.getElementById("myDropdown").classList.toggle("show");
}

var mod=document.getElementById('modalbox');
var span = document.getElementsByClassName("close")[0];
function myfunction(){
mod.style.display="block" ;
}
function closemod() {
    mod.style.display = "none";

}
function displayupdatelist()
{
	var iframe=document.getElementById('detframe');
	iframe.src="updatelist.php";
}
function signout()
{
	document.cookie = 'PHPSESSID=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
	   window.location="index.php";
	   
}
 
</script>
</html>
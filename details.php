<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<?php
session_start();
$id=$_SESSION['uid'];
$cname=$_SESSION['cname'];
$dname=$_SESSION['dname'];
$grade=$_SESSION['grade'];
$email=$_SESSION['email'];
$mobile=$_SESSION['mobile'];
?>
<div style="width:100%;height:80vh;top:10vh;object-fit:fill;">

	<fieldset style="color:#008b8b;	font-size:3vw;border:none;"><legend><h2 style="font-size:4vw;">Details :</h2></legend>
    </hr>
    <h4>Employee id: <?php echo $id;?></h4>
    <h4>Company: <?php echo $cname;?></h4>
	<h4>Department: <?php echo $dname;?></h4>
	<h4>Grade: <?php echo $grade;?></h4>
	<h4>Email-id: <?php echo $email;?></h4>
	<h4>Contact no.: <?php echo $mobile;?></h4>
   </fieldset>
</div>
<div id="modalbox" class="modal">
<center>
<div class="modal-content" style="width:55vw;height:30vh;margin: 25vh 23vw;">
<div class="head" style="width:auto;height:5vh;">
<span class="close" onclick="closemod()" style="float:right">&times;</span>
<form method="post" action="delete.php" >
<center><fieldset class="textbox" style="border:0;width:auto;height:auto">
<center><table cellspacing="10">
<tr>
<td></td>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:	#708090;font-size:3.5vw;"><b>Delete your account?</b></label></td>
</div>
</tr>
<tr>
<td><center><button class="submit button" type="submit" id="loginbtn" style="font-size:2.5vw">Yes</button></center></td>
</tr>
</table>
</center>
</fieldset>
</center>
</form>
</div>
</div>
</center>
</div>
<script>
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
</script>
</body>
</html>
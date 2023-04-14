
<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<center>
<div>
<form action="update.php" method="post" enctype="multipart/form-data">
<table cellspacing="10" style="margin-top:25vh;">
<tr>
  <td>  <label style="color:#708090;font-size:3vw;margin-left:5vw" id="lab"><b>Old Password</b></label></td>
  <td> <input type="password" style="color:#708090;font-size:3vw;margin-left:5vw" placeholder="Enter old password" name="olpsw" required class="txtfld"></td>
</tr>
<tr>
    <td><label style="color:#708090;font-size:3vw;margin-left:5vw" id="lab"><b>New Password</b></label></td> 
    <td><input type="password"style="color:#708090;font-size:3vw;margin-left:5vw" placeholder="Enter new password" name="newpsw" required class="txtfld" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td> 
</tr>
<tr>
   <td>  <label style="color:#708090;font-size:3vw;margin-left:5vw" id="lab"><b>New Password</b></label></td> 
   <td> <input type="password" style="color:#708090;font-size:3vw;margin-left:5vw" placeholder="Repeat new password" name="renewpsw" required class="txtfld" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
	title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td> 
</tr>
<tr>
   <td colspan="2"><center><input class="button" type="submit" name="button4" style=" background-color:#00CED1;color:white;padding: 2vw 7vw;cursor: pointer;border: none;border-radius:25px; font-size:3vw" value="Confirm"  onclick="myFunction(this.id);"></center></td>
</tr>
</table>
 </form>
</div>
</center>
</body>
<script>
function myFunction(form) {
  if (form.checkValidity()) {
    alert("Succesfully Updated!!!\nLogin to continue...");
  }
}
</script>
</html>
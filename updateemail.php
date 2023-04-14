
<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<center>
<div>
<form id="myform" method="post" enctype="multipart/form-data">
<table cellspacing="10" style="margin-top:25vh;">
<tr>
  <td><label style="color:#708090;font-size:3vw;margin-left:5vw"  id="lab"><b>Enter email-id</b></label></td>
  <td><input type="email" style="color:#708090;font-size:3vw;margin-left:5vw" placeholder="Enter new email-id" name="emailid" required class="txtfld"pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address"></td>
</tr>
<tr>
   <td colspan="2"><center><input class="button" type="submit" name="button5" style=" background-color:#00CED1;color:white;padding: 2vw 7vw;cursor: pointer;border: none;border-radius:25px; font-size:3vw" value="Confirm"  onclick="myFunction();"></center></td>
</tr>
</table>
</form>

</div>
</center>

</body>
<script>
function myFunction() {
  form=document.getElementById('myform'); 
  if (form.checkValidity()) {
    alert("Succesfully Updated!!!");
	document.getElementById('myform').action = "update.php";
  }
}
</script>
</html>
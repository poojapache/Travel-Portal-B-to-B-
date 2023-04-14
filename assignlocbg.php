<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<center>
<div>
 <form action="assignupdate.php" method="post" enctype="multipart/form-data">
 <table cellspacing="10" style="margin-top:25vh;">
<tr>
  <td><label style="color:#708090;font-size:3vw;margin-left:5vw" id="lab"><b>Enter Location</b></label></td>
  <td><input type="text"  style="color:#708090;font-size:3vw;margin-left:5vw" placeholder="Enter location" name="location" required class="txtfld"></td>
</tr>
<tr>
  <td><label style="color:#708090;font-size:3vw;margin-left:5vw" id="lab"><b>Enter Budget</b></label></td>
  <td><input type="text"  style="color:#708090;font-size:3vw;margin-left:5vw" placeholder="Enter budget" name="budget" required class="txtfld"></td>
</tr>
   <td colspan="2"><center><input class="button" type="submit" name="button11" style=" background-color:#00CED1;color:white;padding: 2vw 7vw;cursor: pointer;border: none;border-radius:25px; font-size:3vw" value="Confirm"  onclick="myFunction(this.id);"></center></td>
</tr>
</table>
</form>
</div>
</center>
</body>
<script>
function myFunction(form) {
  if (form.checkValidity()) {
    alert("Assigned Successfully!!!");
  }
}
</script>
</html>
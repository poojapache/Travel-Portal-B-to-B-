
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
  <td><label style="color:#708090;font-size:3vw;margin-left:5vw" id="lab"><b>Enter contact number</b></label></td>
  <td><input type="tel"  style="color:#708090;font-size:3vw;margin-left:5vw" placeholder="Enter new contact number" name="contact" required class="txtfld"pattern="[7-9]{1}[0-9]{9}" title="Invalid mobile number"></td>
</tr>
   <td colspan="2"><center><input class="button" type="submit" name="button6" style=" background-color:#00CED1;color:white;padding: 2vw 7vw;cursor: pointer;border: none;border-radius:25px; font-size:3vw" value="Confirm"  onclick="myFunction(this.id);"></center></td>
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
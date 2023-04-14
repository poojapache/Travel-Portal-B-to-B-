
<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<center>
<div>

 <label id="lab" class="w3-left" style="align:left;"><b>Choose your Profile Picture</b></label>
 <form action="update.php" method="post" enctype="multipart/form-data">
 <input type="file"  class="w3-right" name="pict" id="pict" style="align:right;" pattern=".{1,}" title="Enter a valid picture">
 </br>
 <div style="padding-left:40%;padding-top:20px;">
 <input type="submit" name="button3" style="padding: 5px 10px;background-color: #4CAF50;color: 
 white;cursor: pointer;border: none;border-radius:25px;" value="Confirm" onclick="alert('Successfully changed the profile picture!!! \n Please login again to continue...')">
  </div>
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
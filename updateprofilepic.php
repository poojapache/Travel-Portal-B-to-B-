
<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<center>
<div class="updatecontainer">

 
 <form  method="post" id="myform" enctype="multipart/form-data">
  </center>
 <table cellspacing="10" style="margin-top:25vh;">
 <tr>
 <td><center><label style="color:#708090;font-size:3vw;margin-left:5vw"><b>Choose your profile picture</b></label></center></td>
 <td><center><input type="file" style="color:#708090;font-size:2.5vw;margin-left:5vw;"  name="pict" id="pict" pattern=".{1,}" title="Enter a valid picture"></center></td>
 </br>
 </tr>
 <tr>
 <td colspan="2">
    <center><input class="button" type="submit" name="button3" style=" background-color:#00CED1;color:white;padding: 2vw 7vw;cursor: pointer;border: none;border-radius:25px; font-size:3vw" value="Confirm" onclick="myFunction();">  </center>
 </td>
  </tr>
 </form>
 </table>
 </center>
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
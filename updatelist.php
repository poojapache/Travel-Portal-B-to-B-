<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<div style="padding:3%;">
<center>
<table cellspacing="10">
<tr>
<td>
  <i><a onclick="getframe(1)"  style="font-style:normal;color:#008b8b;font-size:5vw;cursor:pointer;">Change Profile picture</a></i>
</td>
</tr>

<tr>
<td>
  <i ><a onclick="getframe(2)" style="font-style:normal;color:#008b8b;font-size:5vw;cursor:pointer;">Change Password</a></i>
</td>
</tr>



<tr>
<td>
 <i ><a onclick="getframe(3)"  style="font-style:normal;color:#008b8b;font-size:5vw;cursor:pointer;">Change Email-id</a></i>
</td>
</tr>


<tr>
<td>
 <i ><a onclick="getframe(4)" style="font-style:normal;color:#008b8b;font-size:5vw;cursor:pointer;">Change Contact Number</a></i>
</td>
</tr>


<tr>
<td>
<i ><a onclick="getframe(5)" style="font-style:normal;color:#008b8b;font-size:5vw;cursor:pointer;">Change Company name</a></i>
</td>
</tr>


<tr>
<td>
 <i ><a onclick="getframe(6)" style="font-style:normal;color:#008b8b;font-size:5vw;cursor:pointer;">Change Department</a></i>
</td>
</tr>
<tr>
<td>
 <i ><a onclick="getframe(7)"  style="font-style:normal;color:#008b8b;font-size:5vw;cursor:pointer;">Change Grade</a></i>
</td>
</tr>
</table>
</center>
</div>
<script>


  function getframe(id)
  {
	  var m=id;
	  switch(m)
	  {
		  case 1:  window.location = 'updateprofilepic.php';
		           break;
	      case 2:  window.location = 'updatepassword.php';
		           break;
		  case 3:  window.location = 'updateemail.php';
		           break;
		  case 4:  window.location = 'updatecontac.php';
		           break;
		  case 5:  window.location = 'updatecompany.php';
		           break;
		  case 6:  window.location = 'updatedept.php';
		           break;
		  case 7:  window.location = 'updategrade.php';
		           break;
	  }

  }
</script>



</body>
</html>
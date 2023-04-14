<html>
<head>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">
</head>
<body>
<?php
include('connection.php');
session_start();
$id=$_SESSION['uid'];
$res=mysqli_query($conn,"SELECT location FROM assign where eid='$id'");
$result = mysqli_fetch_array($res,MYSQLI_ASSOC);
$loc=$result['location'];
$_SESSION['destination']=$loc;
?>
<div>
<form style="border:0px solid #ccc" action="hotellist.php" method="post" enctype="multipart/form-data" id="f">
<table cellspacing="20">
<tr><div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Location</b></label></td>
 <td><input type="text" readonly="readonly" placeholder="<?php echo $loc;?>" name="location" required class="txtfld" style="color:#708090;font-size:4vw;padding:0.3vh 0.3vw 0.3vh 0.3vw;width:50vw"></td>
</div>
</tr>

<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Check-in date </b></label></td>
 <td><input type="date" placeholder="Enter check-in date" name="cdate" required class="txtfld"style="color:#708090;font-size:4vw;padding:0.3vh 0.3vw 0.3vh 0.3vw;width:50vw" ></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Days of accomodation </b></label></td>
 <td><input type="text" placeholder="Enter days of accomodation" name="nod" required class="txtfld"style="color:#708090;font-size:4vw;padding:0.3vh 0.3vw 0.3vh 0.3vw;width:50vw" ></td>
</div>
</tr>
 <tr>  
  <td colspan="2"><div class="clearfix"><input type="submit" value="Search" class="signupbtn1" name="submit" onClick="myFunction()" style="font-size:5vw"></div></td>
  </tr>

</table>
</form>
</div>
</body>
</html>
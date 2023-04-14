<html>
<head>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">
</head>
<body>
<?php
include('connection.php');
session_start();
$_SESSION['air_total']=0;
$id=$_SESSION['uid'];
$res=mysqli_query($conn,"SELECT location FROM assign where eid='$id'");
$result = mysqli_fetch_array($res,MYSQLI_ASSOC);
$loc=$result['location'];
$_SESSION['destination']=$loc;
?>
<div>
<form style="border:0px solid #ccc" action="flightlist.php" method="post" enctype="multipart/form-data" id="f">
<table cellspacing="20">
<tr><div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Source </b></label></td>
 <td><input type="text" placeholder="Enter source" name="source" required class="txtfld" style="color:#708090;font-size:4vw;padding:0.3vh 0.4vw 0.3vh 0.4vw;width:50vw"></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Destination </b></label></td>
 <td><input type="text" readonly="readonly" placeholder="<?php echo $loc;?>" name="destination" required class="txtfld"style="color:#708090;font-size:4vw;padding:0.3vh 0.4vw 0.3vh 0.4vw;width:50vw" ></td>
</div>
</tr>
<tr>  
 <div class="innerdiv">
  <td><label id="lab" style="color:#708090;font-size:4vw"><b>Departure date </b></label></td>
  <td><input type="date" name="ddate" style="color:#708090;font-size:4vw;padding:0.3vh 0.4vw 0.3vh 0.4vw;width:50vw"onchange="mydate1();"></td>
</div>
</tr>
<div class="innerdiv">
  <td><label  id="lab" style="color:#708090;font-size:4vw"><b>Departure time</b></label></td>
  <td><input type="time"  name="dtime" style="color:#708090;font-size:4vw;padding:0.3vh 0.4vw 0.3vh 0.4vw;width:50vw"></td>
</div>
</tr>
<tr>
</tr>
</div>
 
<div>
<tr>
  <td colspan="2"><div class="clearfix"><input type="submit" value="Search" class="signupbtn1" name="submit" style="font-size:4vw"></div></td>
  </tr>
</div>
</table>
</form>
</div>
</body>
<script>
function mydate1()
{
 d=new Date(document.getElementById("dt").value);
dt=d.getDate();
mn=d.getMonth();
mn++;
yy=d.getFullYear();
document.getElementById("ndt").value=yy+"/"+mn+"/"+dt
document.getElementById("ndt").hidden=false;
document.getElementById("dt").hidden=true;
}


</script>
</html>
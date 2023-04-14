<html>
<head>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
<?php
include('connection.php');
session_start();
$location=$_POST['location'];
$no_of_days=(int)$_POST['nod'];
$check_in=$_POST['cdate'];
$_SESSION['hot_total']=$_SESSION['air_total'];
if($_SESSION['air_total']==0)
{
$id=$_SESSION['uid'];
$res=mysqli_query($conn,"SELECT location FROM assign where eid='$id'");
$result = mysqli_fetch_array($res,MYSQLI_ASSOC);
$loc=$result['location'];
$_SESSION['destination']=$loc;
$ql = "SELECT budget FROM assign WHERE eid ='$id' AND location = '$loc' ";
$result = mysqli_query($conn,$ql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
$index=0;
$_SESSION['assign_budget_hot']=(int)$row[$index]['budget'];

}
else{
	$loc=$_SESSION['destination'];
	$_SESSION['assign_budget_hot']=	$_SESSION['assign_budget_tot'];
}
$_SESSION['assign_budget_hot_tot']=$_SESSION['assign_budget_hot'];
$_SESSION['neg']=0;
$q="SELECT cost_per_day FROM search_hotel WHERE location ='$loc' ";
$result = mysqli_query($conn,$q);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
 $count = mysqli_num_rows($result);
$arr = array();
$index=0;
while($index<$count){ // loop to store the data in an associative array.

     $arr[$index] =(int) $row[$index]['cost_per_day'];
     $index++;
}

$sql = "SELECT * FROM search_hotel WHERE location ='$loc'";

$res = mysqli_query($conn,$sql);
$r = array();
$r = mysqli_fetch_all($res,MYSQLI_ASSOC);
 $count = mysqli_num_rows($res);
$array = array();
$index=0;
$ind=0;
while($index<$count)
{ // loop to store the data in an associative array.
if(($no_of_days*(int)($arr[$index]))<=$_SESSION['assign_budget_tot'])
{
     $array[$ind] = $r[$index];
	 $ind++;
	 $index++;
}
else
{
     $index++;
}
}
$_SESSION['arrayh']=$array;
$_SESSION['noofdays']=$no_of_days;
?>
<div > <h2 style="color:#00CED1;font-size:3vw">
<div style="height:3vw;margin-right:1.5vw;margin-left:0"><p id="demo"></p></div>
 <table style="font-size:4vw;border:1px solid #dddddd;text-align:center;text-align:center;margin-left:0;margin-top:3vw;border-collapse:collapse;" cellpadding="5vw" cellspacing="10">
 <tr style="color:#00CED1;border: 1px solid #dddddd;">
 <th style=" border: 1px solid #dddddd;"></th>
 <th style=" border: 1px solid #dddddd;">Hotel Id</th>
 <th style=" border: 1px solid #dddddd;">Hotel Name</th>
 <th style=" border: 1px solid #dddddd;">Cost per day</th>
 <th style=" border: 1px solid #dddddd;">Total cost</th>
 </tr>
<?php
$ind=0;
$count=count($array);
while($ind<$count)
{
 ?>

 <tr style="color:#708090;border: 1px solid #dddddd;">
 <td style=" border: 1px solid #dddddd;"><input type="checkbox" name="checkbox" id="<?php echo $ind; ?>" value="<?php echo $ind; ?>" onclick="myfunc(this.id,this);"></td>

 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['hid'];?></td>
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['hname'];?></td>
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['cost_per_day'];?></td>
 <td style=" border: 1px solid #dddddd;"><?php echo ($array[$ind]['cost_per_day']*$no_of_days)?></td>
 
 </tr>
 <?php
 $ind++;
}

?>
<tr><td colspan="8"><input type="submit" value="Book" class="signupbtn1" name="submit" style="font-size:4vw" onclick="gotopayment()"></div></tr><td>
</table>
 </h2>
 </div>
<p id="demo"></p>
</body>
<script>
 function myfunc(id,checkbox)
 {
	 
			  var content = id;
              var stat=false;	
              var checkbox=checkbox;
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = (function() 
			   {
               if (this.readyState == 4 && this.status == 200) 
			   {
				
                document.getElementById("demo").innerHTML = this.responseText;
               }
               });
               if(checkbox.checked)
			   {stat=1;}
               else
			   {stat=0;	}
       xmlhttp.open("GET", "hotellist2.php?pos="+ content+"&st="+stat+"&checkbox="+checkbox, true);
       xmlhttp.send();
}
function gotopayment()
{
	window.location="payment.php";
}
</script>


</html>
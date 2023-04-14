<html>
<head>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

</head>
<body style="color:black;">
<?php
include('connection.php');
session_start();
$_SESSION['air_total']=0;
$source=$_POST['source'];
$destination=$_SESSION['destination'];
$start_time=$_POST['dtime'];
$dod=$_POST['ddate'];
$id=$_SESSION['uid'];
$result = mysqli_query($conn,"SELECT budget FROM assign WHERE eid ='$id' AND location = '$destination' ");
$res = mysqli_fetch_array($result,MYSQLI_ASSOC);
$bud=$res['budget'];
$_SESSION['assign_budget']=$bud;
$_SESSION['assign_budget_tot']=$_SESSION['assign_budget'];
$_SESSION['neg']=0;
$sql = "SELECT * FROM flight WHERE source ='$source' AND destination = '$destination' AND dod = '$dod' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
 $count = mysqli_num_rows($result);
$array = array();
$index=0;
while($index<$count){ // loop to store the data in an associative array.

     $array[$index] = $row[$index];
	
     $index++;
}
$_SESSION['arrayf']=$array;
$ind=0;
?>
<div > <h2 style="color:#00CED1;font-size:3vw">
<div style="height:3vw;margin-right:1.5vw;margin-left:0"><p id="demo"></p></div>
 <table style="font-size:3vw;border:1px solid #dddddd;text-align:center;margin-left:0;margin-top:3vw;">
 <tr style="color:#00CED1">
 <th></th>
 <th>Flight Id</th>
 <th>Airline Name</th>
 <th>Departure Date</th>
 <th>Arrival Date</th>
 <th>Departure Time</th>
 <th>Arrival Time</th>
 <th>Cost</th>
 </tr>
<?php
while($ind<$count)
{
 ?>

 <tr style="color:#708090">
 <td><input type="checkbox" name="checkbox" id="<?php echo $ind; ?>" value="<?php echo $ind; ?>"  onchange="myfunc(this.id,this)" ></td>
 <td><?php echo $array[$ind]['flight_id'];?></td>
 <td><?php echo $array[$ind]['airline_name'];?></td>
 <td><?php echo $array[$ind]['dod'];?></td>
 <td><?php echo $array[$ind]['doa'];?></td>
 <td><?php echo $array[$ind]['start_time'];?></td>
 <td><?php echo $array[$ind]['reach_time'];?></td>
 <td><?php echo $array[$ind]['cost'];?></td>
 </tr>
 <?php
 $ind++;
}

?>
<tr><td colspan="8"><button  id="submit" class="signupbtn1" name="submit" style="font-size:4vw" onclick="hotelupdate();">BOOK</button></div></tr><td>

</table>
 </h2>
 </div>

</body>
<script type="text/javascript">

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
       xmlhttp.open("GET", "Flightlist2.php?pos="+ content+"&st="+stat+"&checkbox="+checkbox, true);
       xmlhttp.send();
}
function hotelupdate()
{
	alert("You have booked the flight/s. Now you can book the hotels. Click on the hotel tab to proceed...");
}
</script>


</html>
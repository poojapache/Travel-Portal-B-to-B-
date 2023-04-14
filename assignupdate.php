<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Travel Portal </title>
	<link rel="stylesheet" href="stylo.css">
</head>

<body>
<?php
include('connection.php');
session_start();
$array=array();
$array=$_SESSION['array'];
$pos=$_SESSION['pos'];
$eid=$array[$pos]['emp_id'];
$ename=$array[$pos]['name'];
$mid=$_SESSION['uid'];
$_SESSION['location']=$_POST['location'];
$_SESSION['budget']=$_POST['budget'];
$loc=$_SESSION['location'];
$bud=$_SESSION['budget'];
date_default_timezone_set("Asia/Kolkata");
$date=new DateTime(); 
$travel_id = $date->format('Y-m-d-H-i-s');
$query3="INSERT INTO assign(travelid,mid,eid,location,budget)VALUES('$travel_id','$mid','$eid','$loc','$bud')";
$res3=mysqli_query($conn, $query3);
$email = mysqli_query($conn,"SELECT email FROM employee WHERE  emp_id='$eid'");
$result = mysqli_fetch_array($email,MYSQLI_ASSOC);
$em=(String)$result['email'];
$man_name = mysqli_query($conn,"SELECT name FROM employee WHERE  emp_id='$mid'");
$res = mysqli_fetch_array($man_name,MYSQLI_ASSOC);
$name=$res['name'];
$subject="Travel approval by"." ".$name;
$content="You have been assigned a budget of Rs"." ".$bud." "."and a location"." ".$loc." "."by"." ".$name.".";
$from="From:"." ".$name;
if(mail($em,$subject,$content,"FROM:MANAGER"))
{
  echo "Mail Sent Successfully";?>
  <script>
 if (window.top != window.self) 
 {window.top.location.reload();
 }
 </script>
 <?php
}else{
  echo "Mail Not Sent";
}

if($res3){
	?>
	
 <?php
} else{
    echo "ERROR: Could not able to execute $query3. " ;
}
?>
</body>
</html>
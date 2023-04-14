<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Travel Portal </title>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">

</head>
<body>
<?php
include('connection.php');
session_start();
$cno=$_POST['cardno'];
$cardname=$_POST['cardname'];
$cvv=$_POST['cvv'];
$exp_date=$_POST['expdate'];
$id=$_SESSION['uid'];
$tot_exp=$_SESSION['tot'];
if(!($mq= mysqli_query($conn,"SELECT cardno from credit_card where cardno='$cno'")))
{

$q="INSERT INTO credit_card(cardno,cardname,cvv,expirydate,tot_exp,emp_id)VALUES('$cno','$cardname','$cvv','$exp_date','$tot_exp','$id') ";
$res3=mysqli_query($conn, $q);

}
else
{
$q1 = mysqli_query($conn,"SELECT tot_exp FROM credit_card WHERE  emp_id='$id' AND cardno='$cno'");
$result = mysqli_fetch_array($q1,MYSQLI_ASSOC);
$totexp=$result['tot_exp'];
$totexp=$tot_exp+$totexp;
$q2 = "UPDATE credit_card SET tot_exp= '$totexp' WHERE emp_id = '$id' AND cardno='$cno'";
$res3=mysqli_query($conn, $q2);
}

if($res3)
{
date_default_timezone_set("Asia/Kolkata");
$todaydate=date('d-m-y');
$todaytime=date('H:i:s');
$travelid = mysqli_query($conn,"SELECT travelid FROM assign WHERE  eid='$id'");
$result = mysqli_fetch_array($travelid,MYSQLI_ASSOC);
$tid=$result['travelid'];
$q3="INSERT INTO history(cardno,payment_date,payment_time,expenditure,travelid)VALUES('$cno','$todaydate','$todaytime','$tot_exp','$tid') ";
$res4=mysqli_query($conn, $q3);
}
if($res3 && $res4)
{
$res=mysqli_query($conn,"DELETE FROM assign WHERE travelid='$tid'");
if($res)
alert("Payment done sucessfully!!!");
}
else
fail("Payment not done.");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');window.top.location.reload();</script>";
}
function fail($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";

}
?>
</body>
</html>
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
$res=mysqli_query($conn,"SELECT cardno FROM credit_card where emp_id='$id'");
$result = mysqli_fetch_array($res,MYSQLI_ASSOC);
$cno=$result['cardno'];
$res=mysqli_query($conn,"SELECT * FROM history where cardno='$cno'");
$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
$count = mysqli_num_rows($res);
$array = array();
$index=0;
while($index<$count){ // loop to store the data in an associative array.

     $array[$index] = $row[$index];
	
     $index++;
}
?>
<table style="font-size:2.5vw;text-align:center;text-align:center;margin-left:2.5vw;margin-top:5vw; border: 1px solid #dddddd;border-collapse:collapse;padding:2vw" cellpadding="8vw" cellspacing="20">
 <tr style="color:#00CED1; border: 1px solid #dddddd;font-size:2.8vw">
 <th style=" border: 1px solid #dddddd;">Travel ID</th>
 <th style=" border: 1px solid #dddddd;">Expenditure</th>
 <th style=" border: 1px solid #dddddd;">Date of transaction</th>
 <th style=" border: 1px solid #dddddd;">Time of transaction</th>
 </tr>
 <?php
$ind=0;
while($ind<$count)
{?>
<tr style="color:#708090; border: 1px solid #dddddd;">
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['travelid'];?></td>
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['expenditure'];?></td>
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['payment_date'];?></td>
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['payment_time'];?></td>
 </tr>
 <?php
 $ind++;
}

?>
</table>
</body>
</html>
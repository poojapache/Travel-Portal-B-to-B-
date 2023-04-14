<html>
<head>
<link rel="stylesheet" href="stylo.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
<?php
include('connection.php');
session_start();
$id=$_SESSION['uid'];
$sql = "SELECT * FROM employee WHERE mid ='$id' AND emp_id != '$id'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
 $count = mysqli_num_rows($result);
$array = array();
$index=0;
while($index<$count){ // loop to store the data in an associative array.

     $array[$index] = $row[$index];
	
     $index++;
}
$_SESSION['array']=$array;?>
<div >
 <table style="font-size:3vw;text-align:center;text-align:center;margin-left:17vw;margin-top:8vw;border: 1px solid #dddddd;border-collapse:collapse;padding:2vw" cellspacing="20" cellpadding="5vw">
 <tr style="color:#00CED1;border: 1px solid #dddddd;">
 <th style=" border: 1px solid #dddddd;">Employee Id</th>
 <th style=" border: 1px solid #dddddd;">Employee Name</th>
 <th style=" border: 1px solid #dddddd;"></th>
 </tr>
<?php
$ind=0;
while($ind<$count)
{?>
<tr style="color:#708090; border: 1px solid #dddddd;" cellpadding="8vw">
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['emp_id'];?></td>
 <td style=" border: 1px solid #dddddd;"><?php echo $array[$ind]['name'];?></td>
 <td style=" border: 1px solid #dddddd;"><button id="<?php echo $ind; ?>" value="<?php echo $ind; ?>" class="signupbtn1" style="font-size:2.8vw;" onclick="msg(this.id);goto();">Assign</button></td>
 </tr>
 <?php
 $ind++;
}

?>
</table>
 </div>
</body>
<script>
function msg(id)
{
   var content = id;
	var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "assigndata.php?pos=" + content, true);
        xmlhttp.send();

	
}
function goto()
{
	window.location="assigndata2.php";
}

</script>
</html>
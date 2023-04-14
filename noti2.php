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
$sql="SELECT eid from assign WHERE eid='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
{
	echo json_encode(true);
}
else
{
	echo json_encode(false);
}

?>
</body>
</html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Travel Portal </title>
	<link rel="stylesheet" href="stylo.css">
</head>

<body>
<?php
if(isset($_POST['delete'])){
include('connection.php');
if($conn->connect_error >0)
{
echo "Connection failed";
die('Connection Failed');
}
else
{
session_start();	
$uid=$_SESSION['uid'];
$file_to_delete=$_SESSION['file'];

$sql = "DELETE FROM employee WHERE emp_id = '$uid'";

if(mysqli_query($conn, $sql)){
	unlink($file_to_delete);
    header("refresh:2; url=index.php");
    echo "Account successfully deleted!!!";
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
}
else echo "No post";
?>
</body>
</html>
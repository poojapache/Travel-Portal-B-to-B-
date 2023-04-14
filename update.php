<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Travel Portal </title>
	<link rel="stylesheet" href="stylo.css">
</head>

<body>
<?php
if($_POST){
include('connection.php');
if($conn->connect_error >0)
{
die('Connection Failed');
}
else
{

session_start();	
$uname=$_SESSION['uname'];
$uid=$_SESSION['uid'];
$password=$_SESSION['password'];

if(isset($_POST['button3']))
{
$file_to_delete=$_SESSION['file'];
if(isset($_FILES['pict'])){
if($file_to_delete!=null)
unlink($file_to_delete);
$file_get = $_FILES['pict']['name'];
$temp = $_FILES['pict']['tmp_name'];
}
$file_to_saved = "pic/".$file_get;
move_uploaded_file($temp, $file_to_saved);

$sql = "UPDATE employee SET profilepic= '$file_to_saved' WHERE emp_id = '$uid'";

}
else if(isset($_POST['button4']))
{
	$olpassword=$_POST['olpsw'];
	$newpassword=$_POST['newpsw'];
	$renewpassword=$_POST['renewpsw'];
	if($olpassword==$_SESSION['password'])
	{
		if($newpassword==$renewpassword)
		{
		$sql = "UPDATE employee SET psw= '$newpassword',repsw='$renewpassword' WHERE emp_id = '$uid'";
		}
		else
			echo "Please enter new password again";		
	}
	else
		echo "Please check your old password";
}
else if(isset($_POST['button5']))
{
	$email=$_POST['emailid'];
	$sql = "UPDATE employee SET email= '$email' WHERE emp_id = '$uid'";
}

else if(isset($_POST['button6']))
{
	$contact=$_POST['contact'];
	$sql = "UPDATE employee SET mobile= '$contact' WHERE emp_id = '$uid'";	
}

else if(isset($_POST['button7']))
{
	$company=$_POST['company'];
	$sql = "UPDATE employee SET cname= '$company' WHERE emp_id = '$uid'";
}

else if(isset($_POST['button8']))
{
	$dept=$_POST['department'];
	$sql = "UPDATE employee SET dname= '$dept' WHERE emp_id = '$uid'";
}

else if(isset($_POST['button9']))
{
	$grade=$_POST['grade'];
	$sql = "UPDATE employee SET grade= '$grade' WHERE emp_id = '$uid'";	
}
if(mysqli_query($conn, $sql)){
	?>
	<script>
 if (window.top != window.self) 
 {
        
window.top.location.reload();
 }
 </script>
 <?php
} else{
    echo "ERROR: Could not able to execute $sql. " ;
}
}
}


?>
</body>
</html>
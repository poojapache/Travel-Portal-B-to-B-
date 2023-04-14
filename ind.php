<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Travel Portal </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	</head>

<body>
<?php
if($_POST){
include('connection.php');
if($conn->connect_error >0)
{
	echo "Die";
die('Connection Failed');
}
else
{
	echo "In here";
$name=$_POST['name'];
$id=$_POST['id'];
$cname=$_POST['cname'];
$dname=$_POST['dname'];
$mobile=$_POST['mobile'];
$grade=$_POST['grade'];
$email=$_POST['email'];
$password=$_POST['psw'];
$repassword=$_POST['repsw'];
if(isset($_FILES['foto'])){
$file_get = $_FILES['foto']['name'];
$temp = $_FILES['foto']['tmp_name'];
$file_to_saved = "pic/".$file_get;
$cid="1";
$dno="1";
move_uploaded_file($temp, $file_to_saved);
}

if($password==$repassword)
{
echo "Matched";
if(strcmp($grade,"M")=== 0)
{
$query2="SELECT dno FROM department where dname='$dname' AND cid=(SELECT cid from company where cname='$cname')";
$result = mysqli_query($conn,$query2);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
{
	echo "Found";
	$dno=$row['dno'];
$query3="INSERT INTO manager(mid,dno)VALUES('$id','$dno')";
$res3=mysqli_query($conn, $query3);
$query4="INSERT INTO employee(emp_id,name,cname,dname,mobile,grade,email,psw,repsw,profilepic,mid,dno)VALUES('$id','$name','$cname','$dname','$mobile','$grade','$email','$password','$repassword','".$file_to_saved."','$id','$dno')";
$res4=mysqli_query($conn, $query4);
if($res3&&$res4)
{
	header("refresh:0.2; url=index.php");
}
else
echo 'Data is not entered';
}
}
else
{
$sql = "SELECT * FROM manager WHERE dno =(SELECT dno from department where dname='$dname' AND cid=(SELECT cid from company where cname='$cname'))";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
	if($count==1)
	{
		$mid=$row['mid'];
		$dno=$row['dno'];
$query3="INSERT INTO employee(emp_id,name,cname,dname,mobile,grade,email,psw,repsw,profilepic,mid,dno)VALUES('$id','$name','$cname','$dname','$mobile','$grade','$email','$password','$repassword','".$file_to_saved."','$mid','$dno')";
$res3=mysqli_query($conn, $query3);
if($res3)
{
	header("refresh:0.2; url=index.php");
}
else
echo 'Data is not entered';
	}
}


}
else{
echo 'Type password again';
}

}
}
?>
</body>
</html>
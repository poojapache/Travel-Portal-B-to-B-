<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<?php
session_start();
$array=array();
$array=$_SESSION['array'];
$pos = $_REQUEST["pos"];
$_SESSION['pos']=$pos;

?>
</body>
</html>
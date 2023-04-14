<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<?php

session_start();
$array1=array();
$array1=$_SESSION['arrayf'];
$pos = $_REQUEST["pos"];
$checkbox=$_REQUEST['checkbox'];
$status= $_REQUEST["st"];
$_SESSION['pos']=$pos;
$_SESSION['stat']=$status;


if($status==1)
{
$_SESSION['air_total']+=$array1[$pos]['cost'];
?><div style="float:left;"> <?php echo "Total Cost:"." ".$_SESSION['air_total']." ";?></div>
<?php
if($_SESSION['assign_budget_tot']-$array1[$pos]['cost']>=0&&$_SESSION['neg']==0)
{
	
	$_SESSION['neg']=0;
	$_SESSION['assign_budget_tot']-=$array1[$pos]['cost'];
	if($_SESSION['assign_budget_tot']>0)
	{
	?><div style="float:right;"> <?php echo "Remaining Amount:"." ".$_SESSION['assign_budget_tot'];?></div>
<?php
    }
	else
	{
	?><div style="float:right;"> <?php echo "Remaining Amount: 0"." ";?></div>
<?php
	}
}
else if($_SESSION['assign_budget_tot']-$array1[$pos]['cost']<0&&$_SESSION['neg']==0)
{
	$_SESSION['neg']=1;
	$_SESSION['assign_budget_tot']=$_SESSION['assign_budget_tot']*-1+$array1[$pos]['cost'];
	?><div style="float:right;color:red;"> <?php echo "Remaining Amount:Crossing the budget!!!"." ";?></div>
	<?php
}
else if($_SESSION['assign_budget_tot']-$array1[$pos]['cost']>=0&&$_SESSION['neg']==1)
{
	$_SESSION['neg']=1;
	$_SESSION['assign_budget_tot']=($_SESSION['assign_budget_tot']*-1-$array1[$pos]['cost'])*-1;
	?><div style="float:right;color:red;"> <?php echo "Remaining Amount:Crossing the budget!!!"." ";?></div>
	<?php
}
else if($_SESSION['assign_budget_tot']*-1-$array1[$pos]['cost']<0&&$_SESSION['neg']==1)
{
	$_SESSION['neg']=1;
	$_SESSION['assign_budget_tot']=($_SESSION['assign_budget_tot']*-1-$array1[$pos]['cost'])*-1;
	?><div style="float:right;color:red;"> <?php echo "Remaining Amount:Crossing the budget!!!"." ";?></div>
	<?php
}


}
else 
{
	    $_SESSION['air_total']=$_SESSION['air_total']-$array1[$pos]['cost'];
        ?><div style="float:left;"> <?php echo "Total Cost:"." ".$_SESSION['air_total']." ";?></div><?php
		if($_SESSION['assign_budget_tot']+$array1[$pos]['cost']>=0&&$_SESSION['neg']==0)
         {
	      $_SESSION['neg']=0;
	      $_SESSION['assign_budget_tot']+=$array1[$pos]['cost'];
	      if($_SESSION['assign_budget_tot']<$_SESSION['assign_budget'])
		  {
	     ?>
		 <div style="float:right;"> <?php  echo "Remaining Amount:"." ".$_SESSION['assign_budget_tot'];?></div>
	     <?php
		  }
          else
		  {
	      ?>
		  <div style="float:right"> <?php echo "Remaining Amount:"." ".$_SESSION['assign_budget'];$_SESSION['assign_budget_tot']=$_SESSION['assign_budget']?></div>
		  <?php
		  }
         }
		 else if($_SESSION['assign_budget_tot']*-1+$array1[$pos]['cost']<0&&$_SESSION['neg']==1)
         {
	     $_SESSION['neg']=1;
	     $_SESSION['assign_budget_tot']=(($_SESSION['assign_budget_tot']*-1+$array1[$pos]['cost']))*-1;
	     ?>
		 <div style="float:right;color:red;"> <?php echo "Remaining Amount:Still crossing the budget!!!"." ";?></div>
		 <?php
         }
		 else if($_SESSION['assign_budget_tot']*-1+$array1[$pos]['cost']>=0&&$_SESSION['neg']==1)
         {
	     $_SESSION['neg']=0;
	     $_SESSION['assign_budget_tot']=($_SESSION['assign_budget_tot']*-1+$array1[$pos]['cost']);
	     ?>
		 <div style="float:right;"> <?php echo "Remaining Amount:"." ".$_SESSION['assign_budget_tot'];?></div>
		 <?php
         }
		 $_SESSION['tot']=$_SESSION['assign_budget_tot'];
	
	
}
?>
</body>
</html>
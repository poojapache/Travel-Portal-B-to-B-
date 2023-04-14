<html>
<head>
<link rel="stylesheet" href="stylo.css">
</head>
<body>
<?php

session_start();
$array1=array();
$array1=$_SESSION['arrayh'];
$n=$_SESSION['noofdays'];
$pos = $_REQUEST["pos"];
$checkbox=$_REQUEST['checkbox'];
$status= $_REQUEST["st"];
$_SESSION['pos']=$pos;
$_SESSION['stat']=$status;
if($status==1)
{

$_SESSION['hot_total']+=($array1[$pos]['cost_per_day']*$n);
?><div style="float:left;"> <?php echo "Total Cost:"." ".$_SESSION['hot_total'];?></div>
<?php
if($_SESSION['assign_budget_hot_tot']-($array1[$pos]['cost_per_day']*$n)>=0&&$_SESSION['neg']==0)
{
	
	$_SESSION['neg']=0;
	$_SESSION['assign_budget_hot_tot']-=($array1[$pos]['cost_per_day']*$n);
	if($_SESSION['assign_budget_tot']>0)
	{
	?><div style="float:right;"> <?php echo "Remaining Amount:"." ".$_SESSION['assign_budget_hot_tot'];?></div>
<?php
    }
	else
	{
	?><div style="float:right;"> <?php echo "Remaining Amount: 0"." ";?></div>
<?php
	}
}
else if($_SESSION['assign_budget_hot_tot']-($array1[$pos]['cost_per_day']*$n)<0&&$_SESSION['neg']==0)
{
	$_SESSION['neg']=1;
	$_SESSION['assign_budget_hot_tot']=$_SESSION['assign_budget_hot_tot']*-1+($array1[$pos]['cost_per_day']*$n);
	?><div style="float:right;color:red;"> <?php echo "Remaining Amount:Crossing the budget!!!"." ";?></div>
	<?php
}
else if($_SESSION['assign_budget_hot_tot']-($array1[$pos]['cost_per_day']*$n)>=0&&$_SESSION['neg']==1)
{
	$_SESSION['neg']=1;
	$_SESSION['assign_budget_hot_tot']=($_SESSION['assign_budget_hot_tot']*-1-($array1[$pos]['cost_per_day']*$n))*-1;
	?><div style="float:right;color:red;"> <?php echo "Remaining Amount:Crossing the budget!!!"." ";?></div>
	<?php
}
else if($_SESSION['assign_budget_hot_tot']*-1-($array1[$pos]['cost_per_day']*$n)<0&&$_SESSION['neg']==1)
{
	$_SESSION['neg']=1;
	$_SESSION['assign_budget_hot_tot']=($_SESSION['assign_budget_hot_tot']*-1-($array1[$pos]['cost_per_day']*$n))*-1;
	?><div style="float:right;color:red;"> <?php echo "Remaining Amount:Crossing the budget!!!"." ";?></div>
	<?php
}


}
else 
{
	    $_SESSION['hot_total']=$_SESSION['hot_total']-($array1[$pos]['cost_per_day']*$n);
        ?><div style="float:left;"> <?php echo "Total Cost:"." ".$_SESSION['hot_total']." ";?></div><?php
		if($_SESSION['assign_budget_hot_tot']+($array1[$pos]['cost_per_day']*$n)>=0&&$_SESSION['neg']==0)
         {
	      $_SESSION['neg']=0;
	      $_SESSION['assign_budget_hot_tot']+=($array1[$pos]['cost_per_day']*$n);
	      if($_SESSION['assign_budget_hot_tot']<$_SESSION['assign_budget_hot'])
		  {
	     ?>
		 <div style="float:right;"> <?php  echo "Remaining Amount:"." ".$_SESSION['assign_budget_hot_tot'];?></div>
	     <?php
		  }
          else
		  {
	      ?>
		  <div style="float:right"> <?php echo "Remaining Amount:"." ".$_SESSION['assign_budget_hot'];$_SESSION['assign_budget_hot_tot']=$_SESSION['assign_budget_hot']?></div>
		  <?php
		  }
         }
		 else if($_SESSION['assign_budget_hot_tot']*-1+($array1[$pos]['cost_per_day']*$n)<0&&$_SESSION['neg']==1)
         {
	     $_SESSION['neg']=1;
	     $_SESSION['assign_budget_hot_tot']=(($_SESSION['assign_budget_hot_tot']*-1+($array1[$pos]['cost_per_day']*$n)))*-1;
	     ?>
		 <div style="float:right;color:red;"> <?php echo "Remaining Amount:Still crossing the budget!!!"." ";?></div>
		 <?php
         }
		 else if($_SESSION['assign_budget_hot_tot']*-1+($array1[$pos]['cost_per_day']*$n)>=0&&$_SESSION['neg']==1)
         {
	     $_SESSION['neg']=0;
	     $_SESSION['assign_budget_hot_tot']=($_SESSION['assign_budget_hot_tot']*-1+($array1[$pos]['cost_per_day']*$n));
	     ?>
		 <div style="float:right;"> <?php echo "Remaining Amount:"." ".$_SESSION['assign_budget_hot_tot'];?></div>
		 <?php
         }
		 $_SESSION['tot']=$_SESSION['assign_budget_hot_tot'];
		
	
	
}
?>
</body>
</html>
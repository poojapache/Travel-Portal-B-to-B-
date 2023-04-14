<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Travel Portal </title>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>

<body>
<div>
<form style="border:0px solid #ccc" action="payment2.php" method="post" enctype="multipart/form-data" id="f">
<table cellspacing="20">
<tr><div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Card Number</b></label></td>
 <td><input type="text" placeholder="Enter card number" name="cardno" required class="txtfld" style="color:#708090;font-size:4vw;padding:0.3vh 0.3vw 0.3vh 0.3vw;width:50vw"></td>
</div>
</tr>

<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Card Name</b></label></td>
 <td><input type="text" placeholder="Enter card name" name="cardname" required class="txtfld"style="color:#708090;font-size:4vw;padding:0.3vh 0.3vw 0.3vh 0.3vw;width:50vw" ></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>CVV</b></label></td>
 <td><input type="password" placeholder="Enter cvv number" name="cvv" required class="txtfld"style="color:#708090;font-size:4vw;padding:0.3vh 0.3vw 0.3vh 0.3vw;width:50vw" ></td>
</div>
</tr>
<tr>
<div class="innerdiv">
 <td><label id="lab" style="color:#708090;font-size:4vw"><b>Expiry Date</b></label></td>
 <td><input type="date" placeholder="Enter expiry date" name="expdate" required class="txtfld"style="color:#708090;font-size:4vw;padding:0.3vh 0.3vw 0.3vh 0.3vw;width:50vw" ></td>
</div>
</tr>
 <tr>  
  <td colspan="2"><div class="clearfix"><input type="submit" value="Book" class="signupbtn1" name="submit" onClick="myFunction()" style="font-size:5vw"></div></td>
  </tr>

</table>
</form>
</div>
</body>
</html>
<html>
<head>
<link rel="stylesheet" href="stylo.css">
<link rel="stylesheet" href="st.css">
</head>
<body style="background-color:white;">

<div class="taba" style="width:81vw;margin-left:8vw;margin-top:4vh;background-color:white;" id="tabs" value="hey">
<button class="tablink" style="border-radius:2vw 2vw 0px 0px;font-size:3vw;width:26.5vw;height:5vw;padding-left:3vw;padding-right:3vw;padding-bottom:6vh;padding-top:2vh;margin-right:0.5vw;" onclick="openCity('Flights', this,event); load(1);" id="defaultOpen">Flights</button>
<button class="tablink" style="border-radius:2vw 2vw 0px 0px;font-size:3vw;width:26.5vw;height:5vw;padding-left:3vw;padding-right:3vw;padding-bottom:6vh;padding-top:2vh;margin-right:0.5vw;" onclick="openCity('Hotels', this,event);load(2);;">Hotels</button>
<button class="tablink" style="border-radius:2vw 2vw 0px 0px;font-size:3vw;width:27vw;height:5vw;padding-left:3vw;padding-right:3vw;padding-bottom:6vh;padding-top:2vh;" onclick="openCity('Restaurants', this,event);load(3);">Restaurants</button>
</div>

<div id="Flights" class="tabcont">
    <iframe src="flight.php" frameborder = "no" name="detframe1" id="detframe1"  style="margin-left:7vw;width:81vw" scrolling="no"></iframe>
</div>
<div id="Hotels" class="tabcont">
    <iframe src="hotel.php" frameborder = "no" name="detframe2" id="detframe2" style="margin-left:7vw;width:81vw;" scrolling="no"></iframe>
</div>
<div id="Restaurants" class="tabcont">
    <iframe src="map.html" frameborder = "no" name="detframe3" id="detframe3" style="margin-left:7vw;width:81vw;" scrolling="no"></iframe>
</div>
<p id="demo"><p>
</body>
<script type="text/javascript">
function openCity(cityName,elmnt,evt) {
    var i, tabcontent, tablinks,color='#00CED1';
   
    tabcontent = document.getElementsByClassName("tabcont");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;


}
document.getElementById("defaultOpen").click();
function load(ch)
{
	var m=ch;
	  switch(m)
	  {
		  case 1:  ifr=document.getElementById('detframe1');
		          ifr.src='flight.php';
		           break;
	      case 2: ifr=document.getElementById('detframe2');
		          ifr.src='hotel.php';
		           break;
		  case 3: ifr=document.getElementById('detframe3');
		          ifr.src='map.html';
		           break;
		         
		
	  }
}

</script>
</html>
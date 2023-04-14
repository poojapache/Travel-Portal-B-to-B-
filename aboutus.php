<html>
<head>
<link rel="stylesheet" href="sty.css">
<style>
html {
  box-sizing: border-box;
  height:90vh;
	width:98.5vw;
	overflow-x:hidden;
}

	*, *:before, *:after {
  box-sizing: inherit;
}
.body{
 position:absolute;
	height:90vh;
	width:98.5vw;
	color:black;
	scrolling:no;
}

.column {
  float: left;
  width: 32.9%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media (max-width: 0px) {
  .column {
    width: 0%;
    display: block;
  }
}

.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width:80%;
}

.container1 {
  padding: 0 16px;
}

.container1::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>

<body style="color:black;">
<ul>
<li><a  href="index.php">Home</a></li>
<li id="lastchild"><a href="aboutus.php"class="active" >About us</a></li>
<i id="login" onclick="myfunc()" ><img src="log1.png" alt="Login" style="height:5vh;width:3vw;float:right;padding-top:1.3vh;padding-right:1vw;object-fit:fill"></i>
</ul>
<p style="">
<center><h1 style="font-size:50px;color: #00CED1">Product Offering</h1></center>
<h3 style="font-size:2vw;color:#708090;margin:1vw;">Flights, Flight+Hotel Deals, International Flights, Hotels, International Hotels, Holidays in India, International Holidays, Cheap Tickets to India, Bus Tickets, Route Planner</h3></p>
<div class="row">
  <div class="column">
    <div class="card1">
      <img src="jay.jpg" alt="Jay" style="width:100%;height:60%;">
      <div class="container1">
        <h2>Jay Kakkad</h2>
        <p class="title">CEO & Founder</p>
        <p>jay.kakkad@somaiya.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card1">
      <img src="pooja.jpg" alt="Pooja" style="width:100%;height:60%;">
      <div class="container1">
        <h2>Pooja Pache</h2>
        <p class="title">Website Designer</p>
        <p>pooja.pache@somaiya.com</p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card1">
      <img src="sanchita.jpg" alt="Sanchita" style="width:100%;height:60%;">
      <div class="container1">
        <h2>Sanchita More </h2>
        <p class="title">Database Administrator</p>
        <p>sanchita.m@somaiya.com</p>
        
      </div>
    </div>
  </div>
</div>
</body>
</html>

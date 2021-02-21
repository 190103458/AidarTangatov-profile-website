<!DOCTYPE html>
<html>
<head>
	<title>Second task</title>
	<style>
		.flex{
			display: flex;
			justify-content: space-around;
		}
		.flex a{
			font-family: a_BosaNova;
			color: #000000;
			text-align: center;
			padding: 14px 30px;
		    text-decoration: none;
		    font-size: 17px;
		}
		.flex a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.flex2{
			display: flex;
			justify-content: center;
		}
		.img-text{
			background-color: #a6a6a6;	
			margin: 0px 50px 0px 50px;

		}
		.img-text img{
			width: 300px;
			height: 200px;
		}
		.img-text p{
			min-width: 300px;
			height: 30px;
			text-align: center;
			font-size: 15px;
			color: white;		
		}
		
		.les-img{
			background-image: url("les.jpg");
			background-color: #cccccc;
			height: 500px;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
		}
		.les-text{
			text-align: center;
			position: absolute;
			top: 45%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: white;
		}
		.button {
		  margin-top: 10;
		  padding: 6px 60px;
		  font-size: 16px;
		  transition-duration: 0.4s;
		  background-color:#004400; 
		  color: white; 
		  border: 2px solid #004400;
		}

		.button:hover {
		  background-color: #003300;
		  color: white;
		}
		.h{
			font-size:55px;
			text-align: center;
			margin-top: 100px;
			font-family: Candara Light;
			color: #595959;
		}
	</style>
</head>
<body background-color = "#1E1E1E">
<div class="flex">
	<a href="">MAIN</a>
	<a href="">CONTACT</a>
	<a href="">ABOUT US</a>
</div>
<div class="les-img">
	<div class="les-text">
    <h1 style="font-size:55px; font-family: Calibri Light; letter-spacing: 20px">Protect our land</h1>
    <p style="margin-top: 80px; font-family: Vladimir Script ; font-size: 30px">"Environment is no one's property to destroy;<br>it's everyone's responsibility to protect"</p>
    <form action="https://www.greenpeace.org" target="_blank">
       <button class="button">join</button>
  </form>
  </div>
</div>
<div>
	<h1 class="h">Solution</h1>
</div>
<div class="flex2">
	<div class="img-text" >
		<img src="flowers1.jpg">
		<p>Show caring attitude towards the forest</p>
	</div>
	<div class="img-text">
		<img src="bottle.jpg">
		<p>Refuse from plastic bags and bottles</p>
	</div>
</div>
<div class="flex2">
	<div class="img-text" style="margin-top:80px ">
		<img src="index3.jpg">
		<p>Buy eco-friendly goods</p>
	</div>
	
</div>
</body>
</html>

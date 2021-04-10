<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
</head>
<body >
	<div id = "top">
		<div align="center">
			<div>
				<button id="lgn">{{ __('Log In') }}</button>
			</div>

				<div class="profile">
					<div class="btn-group">
		    <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" style="min-width: 140px ;height: 40px">

	            <img id="img3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRltvBEVwZUC1nI-q-4QnueJjvDFPOrHqBWig&usqp=CAU" alt="" style="height: 20px; width: 20px">
	            <p id="name" style="font-size: 15px">Аидар</p>
			    <span class="caret"></span>
			</button>
			    <ul class="dropdown-menu" role="menu" style="text-align: center; background-color: #66a3ff;">
			      <li onmouseover="ov(this)" onmouseout="out(this)"><p class="p1" onclick="logout()">{{ __('Log Out') }}</p></li>
			    </ul>
			  </div>
			</div>
			



			<img src="{{ asset('font.png') }}" id ="img">
		</div>


		<label id="label" for="toggle" style="margin-left: 2%;font-size: 22px" onclick="op()" >&#9776</label>


		<div id="unnav" style="width: 100%">
			<div class="nav" style="width: 100%">
			<div class="navbut">
				<div id="Home" onclick="window.location.reload()" style="width: 100%">{{ __('Home') }}</div>
			</div>
		</div>
		</div>
		
	</div>
        


	<div class="popup">
		<div class="content">
			<img src="{{ asset('font.png') }}" width="20%" style="margin: 20px">
			<img onclick="close_popup()" class="x" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAZlBMVEX///8JBQkAAABBP0H29vbm5ub7+/vq6uo9Oz0YFRgaFxodGh0TDxMVEhUXExfZ2dlTUVMgHiB+fX6enZ7w8PCpqKm3trdjYmOGhYZubW4nJSe/v79MSkyXlpfNzM03NjcxLzFcWlyZhwEoAAAItElEQVR4nNVd2XLjOAyU6UOZiT2+z9hO8v8/uboomzpJ4tx+mdpaUoUO0AQomlCSNLDeXzc/y+30fDkdmv9PLQ6ny3m6Xf5srvv18MjnbmtyTCbFP5v9/4HkYb95N3q7e/YOXZ+LcS8Ys9ovGG2NwWK/ahptzt2OnF3dkdXw5YnZ5DCclp1WX2ftoes/7ZHl6B2/3d7YdfArrP7TcuOpZ2g+etPxB1GB2abfaNOIvX0/wWz0LZVhMIL0NmS02b+P/RoYmo/+N5diMYD5vxGrv15j10MeLAb/1Udx/nfMaFNrcbYdGZuNXmoL1HQ5bvTWLiC70bHZ6E9dFNNPH6OrNDD3GJt7UVOgzsc9WBhd2nz1GpylGD0U5z3Ju2XzNR+99hucLzdaAjUdW2ReNueLzcV3tBqK/gQn5pKN//YeriRQfUO0sPjbd52xE1byXkxXQRbPk2PIeAVJwytNvBl8TB5BEzIvygbqPMiDmb0P31zxmiJawI2Wai1zr8k9cEpWhssFajpSbHdYe0+GdiA9k8S0GKjBwthb8hE8SWwzNbZd6rT1IzmHz8ryooQX04A8+DL1HFDSvM8TCNSIEJ0URc0+Zp5AARe8ilaG7pNn1ET2pBFJcGKeyWISOZV11++xo++2crLw3h62JzNqMU6Dk2qDeIqczLjr99zRd9mYvzVdBGyfGtOZtBirwXzzVBy7RDuRKS9G5cHKwOrFd0RZY5/AoMVoDRYFTQnvNzUdzyDf9Yfs6FvW1a+E47J+RZHWi4AQnbyfXPi8E+57DGmgAkJ04h4LBu8S3x5EGKigEL07j1rErzaESSM+TeSrTON8fjYFPIyogIst1Qqbpq1j3RnEiyRaBGnwo+PcegHyIn6gxpdquQc7f0IC0iL6cgNaZJoatABpEXlLHHA20balrUF9FIkIArWIGKigEO3WoAXIi2ivisNf/L4THPn1j4akgZ4mXIACFeXYJvTwxbFgOEQrisIFHGqp1g1ZLZJqsKYoqEViDVrIaZFcgzVFUAEX70XQjt5PgxYy1Q1ZJYNPMS5QQatoKEGJAo6wVOsG964feUfvRZE1aTClCRecu36CHb0XRbYCjqFU6wZIiwF5EZQH4zRYU2TRoogGLTiSBnuaQKTotdOA7SYQbp6BtOgRqKAQhWnQgjZQhUO0okiYNMTShAu6Ak6gVOuhSJQ0RNOEC5oCTqhU66FIoEUlGrTA3/Wz7ujJKXZoUUEebAI3L6rIg02AvNi4bRN286VJkOzqNV7SUJQmXMDK8Fegxvzqvn4OVYhWFFGShrI04QJDi0o1WFMEa1GtBi2gxzZshy8AihAvbp/jl//7Z1Nr0AKkxbH2DUNz6TWIQTEejARhWownyNruiN+LrB4sKAKWmyiCHGnCBW+gModoRZHRi2xpwgWfFtk1WFNk8qKABi14tCiiwZoigxeFNGhBr0UxDXJRFCdIHajCIVqC0osKPJiDLmkIpgkXVElDNE24oNGiCg1aUGhRiQYt8CkqI4ivRUUatMD1ojoP5sBMGmrShAu8QFUYoiWwkoaqNOECR4sqNWiBoUWlGrSAa1GtBi2gWlSsQYsZoAFF3upBdYiWAPSCee+3ohdzwAlvfkqsocvtICBn9AVFBV1uBwE5o7deVE0Rckb/8qLiQIX8TuaNosLPFFSAXCtwKAp2uR0EXIM1RZ1axNBgTVGjFiGXszooinS5HQReiFYUtQUqzirqUNS1ouITVEYRcvNlgKKeb9tga7CmqEWLkJsvIxR1fNuGQoM1RQ1axM2DLYryeZFKgzVFaS1Cbr54UpT9tg10R+9FUXLXTx2iFUW5QKUP0YqiVKByERSjSFOq9VCUKOB4NFhT5NciXanWQ5G7gOPTYE2RV4uQS8rRFDk//EJZbA9RZPMi6JIy5N4TV6DCLkimiNelqQgCL0hq6HI7CPgFSfkut8MEEbpT6mqN3gDOJWXM1gXYBJEuKavVIt4lZaVaxGzmr1KLuP1k9PTwrwFrt9L+IRCsJyOBF/H7yWj5TEEFirZjqr5tQ9PLQlHSoGo7pubbNiTffCkp6kgalM38VXwyBJQHR3/SDNIiTl6k7icjXsDRf29COFBpQ7SiKBmoPG3HBKsbujTRoCiVNPg6xAoVcJxtx0QKON4OsQIFHJcGa4rcWuRv5s/1mYIKzN98gVMMPbaRab+J1TzUA1KNxNmSBkep1kORp4CTbCTOkjRAGgRfkAQlDT8tSjfzJ9einAZrirRa1NDMn1SLoFcWaJeUQVocfrEh+N0lB2QFHPbhixTFXi9q6pROUsBJpwkXBElDPk00KGInDQ1pwgVy0uDe0XtRxNz162zmj/i7m9lNlwZruyBevL3btdGmQQuQFjev51y0EgRSvNinfGnUoAVIi1/VQ+K/x8DR8gjgRbMtH3GMfwJLyyNA0jDH/AGzaBdytR2LD1SzzS2MdiFf27H4pFE48Rw5m7PtWLQWzTn7+8TOZW07Fq1FM4tNFdyt/2K1mCWMfdRM/t6GkRTNPtnFTJRo/RenRbNLfiPmyXSnjPKi+U2+w6dJdaeMSRrmO/kJniXXnTIiUM1P+MZJsjtleNLItlDXwDmyHWKDtWiuySNsinSH2FAtmkdyCpoh3yE2UIvmlKQhEzR0iA3TokmTJKBnrI4uzSFaNPdsgr8QdRAMopjJMEnmvsPlNWjhr0VTvBf2rEy1eDCHrxezqjTHwWu0dJpw4Zk0zKEc7qNEPSFawitQCxUWGF9ONaQJFx5Jo1hISxzGfgysSYMWo1o0n4fX6PVwLwddGrQY0aJxu59/DVE0G20hWmIxtC8y9Sv9Cuv+98LVkqsR/YnObFv96w/3bjea8s24Uhz7jL4fuke3hhuzUdCbcQDzTZfRfV6ZPVyO2X/dn7wGR+B5b1n96F8Y02P2JynG5/8sr/r55Xhel29Wb44jP088nHbT7WR1+308da6gXVg8H7+31WQ73Z1a+vsPfDuOuiq3wRQAAAAASUVORK5CYII=" width="3%">
			<input id="username" type="text" name="username" placeholder="{{ __('Username') }}">

			<div class="password">
				<input id="pass" type="password" name="pass" placeholder="{{ __('Password') }}">
				<label><input type="checkbox" class="password-checkbox">  Show password</label>
			</div>

			<button onclick="login(username.value)" class="btn btn-outline-dark">{{ __('Log In') }}</button>
		</div>
	</div>

	<div id="dva" style="background-color: #d1d1e0;border-bottom: 5px solid #333;display: none;">
		<img id="ig" src="logo.png" style="margin: 50px 50px 0px 50px">
		<div id="htxt">
		<h1 id="h1" >Free Font Utopia</h1>
		<p id="txt">Free fonts have met their match. We know how hard it is to find quality freeware that is licensed for commercial work. We've done the hard work, hand-selecting these typefaces and presenting them in an easy-to-use format. In metal typesetting, a font was a particular size, weight and style of a typeface. Each font was a matched set of type, one piece (called a "sort") for each glyph, and a typeface consisting of a range of fonts that shared an overall design.

		In modern usage, with the advent of digital typography, "font" is frequently synonymous with "typeface". Each style is in a separate "font file"—for instance, the typeface "Bulmer" may include the fonts "Bulmer roman", "Bulmer", "Bulmer bold" and "Bulmer extended"—but the term "font" might be applied either to one of these alone or to the whole typeface.

		In both traditional typesetting and modern usage, the word "font" refers to the delivery mechanism of the typeface design. In traditional typesetting, the font would be made from metal or wood. Today, the font is a digital file. </p>
		</div>
	</div>

	<h1 id="inf" style="margin:70px 0 0 70px;font-family: Bahnschrift; color: #3F3F3F; display: none;flex-wrap: wrap;">Some Information</h1>
	<div id="abt" style="font-family: Bahnschrift; color: #646464; display: none;">
		<div style="width: 1000px">
			<div style="margin:70px">
				<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
			<p>Fusce fringilla, diam vitae fringilla tempus, turpis tellus auctor ipsum, ac faucibus quam augue non risus. Fusce nulla diam, facilisis non facilisis sit amet, ultricies placerat velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus sed rhoncus mauris. Fusce vel arcu ac quam facilisis laoreet nec sed velit. Fusce suscipit quis magna ultricies vulputate. Pellentesque euismod nisi ac nisl aliquam vestibulum ut eget nulla. Nam sollicitudin sapien ipsum, vel aliquet dui placerat sed. </p>
			</div>
			<div  style="margin:70px">
				<h2>Quisque auctor metus nec tellus lobortis, non congue mauris facilisis.</h2>
				<p>Cras porttitor justo faucibus consectetur pulvinar. Cras felis neque, pharetra ac elementum id, semper in purus. Integer in lectus tincidunt, molestie mi et, lacinia odio. Proin ut lacus quis metus eleifend maximus. Aenean tristique nunc scelerisque sagittis commodo. In fermentum, enim et pellentesque molestie, ante purus rutrum est, non venenatis nisi mauris sed sapien. Proin sed lorem aliquam, scelerisque nulla at, hendrerit nisl. Curabitur accumsan tincidunt auctor. Donec velit diam, euismod quis odio vel, aliquam finibus elit. Aliquam vitae leo lobortis, congue nunc at, interdum tellus. Pellentesque commodo, ligula imperdiet aliquet ornare, neque lectus egestas lorem, id ultricies nibh purus eu ex. Nulla tellus orci, aliquet nec libero convallis, viverra viverra nisi. Fusce ac urna lacus. Suspendisse auctor metus quis lorem pulvinar, et elementum mi congue. </p>
			</div>
			
		</div>
		<div style="width: 500px">
			<div style="margin:70px">
				<h3>Praesent sollicitudin pellentesque ullamcorper.</h3>
			<p>Proin turpis sem, fermentum ut gravida faucibus, semper ut turpis. Fusce justo tortor, interdum at ante faucibus, porttitor laoreet ipsum. Fusce arcu diam, aliquet ut metus non, ornare tincidunt sem. Sed venenatis pharetra eros, a consequat ligula bibendum at. Mauris non enim sit amet lorem posuere vehicula. Aenean sollicitudin, lorem ac pharetra imperdiet, lorem neque cursus nulla, a eleifend purus libero non mi. Donec accumsan placerat elit sed blandit. Pellentesque lacinia enim elit, sed tempus ligula dignissim et. Suspendisse at turpis enim. Nullam auctor quam neque, vitae maximus justo porttitor sed.Nunc sit amet tristique dui. Proin consequat magna purus, nec malesuada mi ultrices eget. Pellentesque commodo, justo eget placerat varius, mauris dolor dapibus lacus, in pretium diam augue quis nunc. Duis eget nulla erat. Praesent sed nunc ut quam ullamcorper ullamcorper et eget neque. In aliquam congue mi sodales luctus. In non magna rhoncus, tincidunt velit molestie, volutpat nulla. </p>
			</div>
		</div>
	</div>
		
	
	<h1 id="pf" style="font-size: 50px; padding: 70px 0px 0px 50px; display: none;">Popular fonts:</h1>

	<div id="letters" style="margin-bottom: 0px; margin-top: 0px;">
		<div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Caveat')">
	    	<div class="card-body kard">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Caveat">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer">
	    		<button type="button" class="btn btn-success btn-block">Caveat</button>
	    	</div>
	    </div>
	    <div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Cookie')">
	    	<div class="card-body kard" style="display: table-cell; vertical-align: baseline;">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Cookie; font-size: 120px">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer"><button type="button" class="btn btn-success btn-block">Cookie</button></div>
	    </div>
	    <div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Indie Flower')">
	    	<div class="card-body kard">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Indie Flower">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer"><button type="button" class="btn btn-success btn-block">Indie Flower</button></div>
	    </div>
	    <div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Lemonada')">
	    	<div class="card-body kard">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Lemonada; font-size: 70px">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer"><button type="button" class="btn btn-success btn-block">Lemonada</button></div>
	    </div>
	    <div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Lobster')">
	    	<div class="card-body kard">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Lobster">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer"><button type="button" class="btn btn-success btn-block">Lobster</button></div>
	    </div>
	    <div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Pacifico')">
	    	<div class="card-body kard">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Pacifico; font-size: 70px">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer"><button type="button" class="btn btn-success btn-block">Pacifico</button></div>
	    </div>
	    <div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Satisfy')">
	    	<div class="card-body kard">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Satisfy">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer"><button type="button" class="btn btn-success btn-block">Satisfy</button></div>
	    </div>
	    <div class="card" style="display: none; margin: 50px; cursor: pointer; border-radius: 10px;" onclick ="show('Sansita Swashed')">
	    	<div class="card-body kard">
	    		<div>
		    			
					<h6 class="fnt" style="font-family: Sansita Swashed">Aa</h6>
	    		</div>
	    	</div> 
	    	<div class="card-footer"><button type="button" class="btn btn-success btn-block">Sansita Swashed</button></div>
	    </div>
	</div>



<div id="non">
	

	<div style="display: flex; justify-content: center; ">
		<div id="tools" style="display: flex;justify-content: space-around;">
			<div style="width: 6vh">
				<div >
					<div id="poisk" style="max-height: 100%;display: flex;align-items: center;">
						<svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
					</div>
					
				</div>
			</div>
			
			<div  style="display: flex;justify-content: space-around; width: 90%">
				
			<div style="width: 20%">
				<div class="tool-input">
					<input type="text" placeholder="{{ __('Search...') }}" id="Search">
				</div>
				
			</div>
			<div style="width: 35%">
				<div class="tool-input">
					<input type="text" placeholder="{{ __('Some text...') }}" id="sometext">
				</div>
				
			</div>
			<div style="width: 30%">
				<div class="slidecontainer">
					<div id="val" style="max-width: 20%;margin-right: 2px;">
						<p style="margin: 0; float: left; max-width: 100%;display: flex; height: 20px; align-items: center;"><span id="demo"></span>px</p>
					</div>
				  
				  <div id="cont" style="max-width: 60%; display: flex;align-items: center;">
				  	<input type="range" min="8" max="300" value="20" class="slider" id="myRange" >
				  </div>
				  
				</div>
			</div>
			</div>

		</div>
	</div>

	<div id="ftext">
		<div id="no" style="width: 100%;height: 300px;vertical-align: baseline;color: #dadce0;font-size: 150px;font-family: Roboto Mono; text-align: center; display: none">
			<p>\(^Д^)/</p>
			<p style="font-size: 20px; color: #757575; font-family: Bahnschrift">Can’t find any fonts.</p>
		</div>
	</div>
	
	

</div>
<div id="mp">
		<h2 style="text-align: center;letter-spacing: 2px;font-size: 35px ">Our studios</h2>
		<div style="display: flex;">
			<div style="margin-top: 70px;border: solid 2px #504949;width: 500px;border-right: 0">
				<div class="but" onclick="zoom('office1')">
					<a>&#8226<b>Office №1 </b> <br> Toraigyrova 39a <br> Phone : 77-77-77 <br></a>
				</div>
				<div class="but" onclick="zoom('office2')">
					<a>&#8226<b>Office №2 </b> <br> Abilkhair khana 13 <br> Phone : 77-77-87 <br></a>
				</div>
				<div class="but" onclick="zoom('office3')">
					<a>&#8226<b>Office №3 </b> <br> Pushkina 41 <br> Phone : 77-77-97 <br></a>
				</div>
			</div>
			<div style="padding: 10px; border: solid 2px #504949; margin-top: 70px; width: 70%">
				<div id="map"></div>
			</div>
		</div>
		
		
	</div>


	<footer style="margin-top: 100px;background-color: #333;padding: 20px;color: white;letter-spacing: 1.2px;font-size: 18px ">
		<div>
			<div style="display: flex;justify-content: center; width: 100%">
				<p style="letter-spacing: 1.2px">{{ __('I am on socnetwork') }}</p>
			</div>
			<div>
				<div style="display: flex;justify-content: center;">
					<a class="ic tele" href="">
						<i></i>
					</a>
					<a class="ic face" href="">
						<i></i>
					</a>
					<a class="ic ins" href="">
						<i></i>
					</a>
					<a class="ic vk" href="">
						<i></i>
					</a>
				</div>
			</div>

			<div style="display: flex;justify-content: center;padding: 5px">
				 <p style="letter-spacing: 1.2px">&copy 2002-2020 &nbsp</p><span style="color: #D685F0">{{ __('Aidar Tangatov') }}</span>
			</div>
			<div style="display: flex;justify-content: center;">
				<div><p style="color: #5EA9F6">190103458@stu.sdu.edu.kz,</p></div>
				&nbsp
				<div><p  style="color: #5EA9F6; width: 160px">8 708 147 46 73</p></div>
				
			</div>
		</div>
	</footer>

<script type="text/javascript" src="{{ asset('script.js') }}"></script>
</body>
</html>

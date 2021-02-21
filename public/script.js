

	document.getElementById("Search").value= "";
	document.getElementById("sometext").value = "";
	document.getElementById("myRange").value = "20";

	var fonts = ["Times_New_Roman","Lemonada","Satisfy","Pacifico", "Lobster", "Caveat", "Cookie", "Indie_Flower", "Sansita_Swashed",  "Algerian","Bahnschrift","Candara_Light", "Courier_New","Footlight_MT_Light","Yu_Gothic", "Wingdings","Tempus_Sans_ITC","Stencil", "SimSun","Segoe_Script","Niagara_Solid", "Old_English_Text_MT","Mistral","Brush_Script_MT", "Harrington","Bahnschrift_Light","Bell_MT", "Bauhaus_93","Bodoni_MT_Poster_Compressed","Broadway", "Cambria","Centaur","Chiller", "Colonna_MT","Corbel","Freestyle_Script", "Harlow_Solid_Italic","Ink_Free","Kunstler_Script"];
	fonts.sort();
	for(var i = 0; i < fonts.length; i++) {
	   document.getElementById("ftext").innerHTML += '<div class="myCard" id="'+ fonts[i] + '"><div><p>'+ fonts[i].replaceAll("_", " ") + '<h3></div><p class="extext" id="values" style="font-family: '+ fonts[i].replace("_", " ") + '">Be who you are and say what you feel, because those who mind ' +  "don't" + ' matter, and those who matter ' + "don't" + ' mind.</p></div>'	
	}	

$(document).ready(function(){
    $("#h1").slideDown("slow");
    $("#ig").slideDown("slow");
    $("#txt").animate({
	opacity: '1',
	});
	$("#txt").slideDown();
});
var text = document.getElementById("txt").innerHTML;
	function show(element){
		$(document).ready(function(){
			$("#txt").animate({
			      top: '+60px',
			      opacity: '0',
			    },"fast", function(){
			  		document.getElementById("txt").style.fontFamily = element;
			  		if(element === "Lemonada") document.getElementById("txt").style.fontSize = "20px";
			  		else document.getElementById("txt").style.fontSize = "26px";
 					document.getElementById("txt").style.top = "-40px";
			  		$(document).ready(function(){
						  $("#txt").animate({
					      top: '2px',
					      opacity: '1',
				    });
					$(document).ready(function() {
						        $('html, body').animate({scrollTop: '-=650px'}, 800);
					});
			    });
		});
	});
}


		function op(){
			if(document.getElementById("unnav").style.display == "flex"){
				 document.querySelector("#unnav").style.display = "none";

			}
			else if(document.getElementById("unnav").style.display !== "flex"){
				 document.querySelector("#unnav").style.display = "flex";
			}

		}

	function hide(){
		document.getElementById("txt").style.fontFamily = "Calibri";
	}

		 function change(element){


		 $("#non").slideUp("slow");

		 $(document).ready(function(){
		    $("#h1").animate({
			      left: '600px',
			      opacity: '0',
			    },"slow", function(){
 				document.getElementById("h1").style.left = "-150px";
 				var a = element.innerHTML;
		 		switch(a){
		 			case "Products":
		 			$("#mp").slideUp("slow");
						$("#ig").slideUp("slow");
		 				$("#abt").slideUp("slow");
		 				$("#inf").slideUp("slow");
		 				$("#dva").slideDown("slow");
		 				$(".card").slideDown("slow");
		 				$("#pf").slideDown("slow");

		 				$(document).ready(function(){

						document.getElementById("h1").style.fontSize = "50px";
		 					$("#txt").animate({top: '+60px',opacity: '0'},"fast", function(){
							document.getElementById("txt").innerHTML = text;
					 		document.getElementById("txt").style.top = "-40px";

							$(document).ready(function(){$("#txt").animate({top: '2px',opacity: '1'});

							});
						});
						$("#h1").animate({left: '2px',opacity: '1',});
					    document.getElementById("h1").innerHTML = "Products";
						});
		 				$(document).ready(function() {
						        $('html, body').animate({scrollTop: '+=650px'}, 800);
						});
		 				document.getElementById("h1").innerHTML = "Products";

		 				$(document).ready(function(){$("#h1").animate({left: '2px',opacity: '1',});
						});
		 				break;

		 			case "About us":

		 				$(".card").slideUp("slow");
		 				$("#pf").slideUp("slow");
		 				$("#dva").slideDown("slow");
		 				$("#abt").slideDown("slow");
		 				$("#inf").slideDown("slow");
		 				document.getElementById("abt").style.display = "flex";
		 				document.getElementById("abt").style.flexWrap = "wrap";
						$("#ig").slideDown("slow");	
		 				$("#mp").slideDown("slow");

		 				document.getElementById("h1").innerHTML = "About us";

		 				$(document).ready(function(){$("#h1").animate({left: '2px',opacity: '1',});
						});

		 				document.querySelector("#tools").style.display = "none";

		 				break;

		 		}
  				});
		});
 		
 	}

function login(name){
	document.querySelector(".profile").style.display = "inline";
	document.getElementById("name").innerHTML = name;
        $("#lgn").animate({opacity: "0"}, "slow");
	close_popup();
}
function close_popup(){
	$(".popup").animate({opacity: "0"}, "slow");
    document.querySelector(".popup").style.display = "none";
    document.body.style.overflow = "scroll";
    document.getElementById("username").value = "";
    document.getElementById("pass").value = "";
}
function popup(){
    var btn = document.getElementById("lgn").innerHTML;
    if(btn == "Log In"){
        document.querySelector(".popup").style.display = "flex";
        $(".popup").animate({opacity: "1"}, "slow");
        document.body.style.overflow = "hidden";
    }
    else{
        logout();
    }
}
function logout(){
    document.querySelector(".profile").style.display = "none";
    document.getElementById("lgn").innerHTML = "Log In";
        $("#lgn").animate({opacity: "1"}, "slow");

}
function ov(el){
	el.style.backgroundColor = "#4d94ff";
}
function out(el){
	el.style.backgroundColor = "#66a3ff";
}
$('body').on('click', '.password-checkbox', function(){
	if ($(this).is(':checked')){
		$('#pass').attr('type', 'text');
	} else {
		$('#pass').attr('type', 'password');
	}
}); 



var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;




const input = document.querySelector("#sometext");
const input1 = document.querySelector("#Search");
var log = document.getElementsByClassName('extext');
var log1 = document.getElementsByClassName('myCard');


input.addEventListener('input', updateValue);
input1.addEventListener('input', updateValue1);


function updateValue(e) {
	if(e.target.value==""){
		for (let i = 0; i < log.length; i++) {
	  		log[i].textContent = "Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.";
		}
	}else 
	for (let i = 0; i < log.length; i++) {
	  log[i].textContent = e.target.value;
	}
	
}

function updateValue1(e) {
	var count = 0;
	for (let i = 0; i < log1.length; i++) {
		if(e.target.value.toLowerCase() != log1[i].id.substring(0, e.target.value.length).toLowerCase().replaceAll('_'," ")){
			log1[i].style.display = "none";
		}
		else if(e.target.value.toLowerCase() == log1[i].id.substring(0, e.target.value.length).toLowerCase().replaceAll('_'," ")){
			log1[i].style.display = "inline";
			count++;
		}
		if(e.target.value== ""){
			log1[i].style.display = "inline";
		}

	}
		if (count==0) {
			document.getElementById("no").style.display = "inline-block";
		}else document.getElementById("no").style.display = "none";
}


slider.oninput = function() {
  output.innerHTML = this.value;
  for (let i = 0; i < log.length; i++) {
	  log[i].style.fontSize = parseInt(this.value) + "px";
	}
}

// map
	
	let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 50.268885, lng: 57.209169 },
          zoom: 12,
        });
        var icon = {
          url: "office.png",
          scaledSize: new google.maps.Size(20, 20),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(10, 20),
        };
        marker = new google.maps.Marker({
          position: { lat: 50.268885, lng: 57.209169 },
          map: map,
          icon: icon,
          draggable: true,
          animation: google.maps.Animation.DROP,
        });
        marker2 = new google.maps.Marker({
          position: { lat:50.281136, lng: 57.194806 },
          map: map,
          icon: icon,
          draggable: true,
          animation: google.maps.Animation.DROP,
        });

        marker3 = new google.maps.Marker({
          position: { lat:50.282103, lng: 57.201362 },
          map: map,
          icon: icon,
          draggable: true,
          animation: google.maps.Animation.DROP,
        });
        
        var offices = {marker, marker2, marker3};



        marker.addListener("click", () => {
          new google.maps.InfoWindow({content: '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h6 >Office №1</h6>' +
          '<div id="bodyContent">' +
          "<p><b>Address</b> <br>  " +
          "Toraigyrova 39a</p>" +
          '<p>'+
          "(built: June 22, 2009).</p>" +
          "</div>" +
          "</div>",}).open(map, marker);
        });

        marker2.addListener("click", () => {
          new google.maps.InfoWindow({content: '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h6>Office №2</h6>' +
          '<div id="bodyContent">' +
          "<p><b>Address</b> <br>  " +
          "Abilkhair khana 13</p>" +
          '<p>'+
          "(built: September 13, 2012).</p>" +
          "</div>" +
          "</div>",}).open(map, marker2);
        });
        marker3.addListener("click", () => {
          new google.maps.InfoWindow({content: '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h6>Office №3</h6>' +
          '<div id="bodyContent">' +
          "<p><b>Address</b> <br>  " +
          "Pushkina 41</p>" +
          '<p>'+
          "(built: December 31, 2009).</p>" +
          "</div>" +
          "</div>",}).open(map, marker3);
        });

        const flightPlanCoordinates = [
          { lat: 50.268885, lng: 57.209169 },
          { lat:50.281136, lng: 57.194806 },
          { lat:50.282103, lng: 57.201362 },
          { lat: 50.268885, lng: 57.209169 },

        ];
        const flightPath = new google.maps.Polyline({
          path: flightPlanCoordinates,
          geodesic: true,
          strokeColor: "#FF0000",
          strokeOpacity: 1.0,
          strokeWeight: 2,
        });

        flightPath.setMap(map);


        for (const office in offices) {
          const Circle = new google.maps.Circle({
            strokeColor: "#00C0FF",
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: "#57ADC2",
            fillOpacity: 0.35,
            map,
            center: offices[office].position,
            radius: 1000,
          });
        }

        map.addListener()
      }

// map

	function zoom(e){
		map.setZoom(13);

		if(e == "office1"){
			map.setCenter({ lat: 50.268885, lng: 57.209169 });
			map.setZoom(15);
			new google.maps.InfoWindow({content: '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h6 >Office №1</h6>' +
          '<div id="bodyContent">' +
          "<p><b>Address</b> <br>  " +
          "Toraigyrova 39a</p>" +
          '<p>'+
          "(built: June 22, 2009).</p>" +
          "</div>" +
          "</div>",}).open(map, marker);
		}
		if(e == "office2"){
			map.setCenter({ lat:50.281136, lng: 57.194806 });
			map.setZoom(15);
			new google.maps.InfoWindow({content: '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h6>Office №2</h6>' +
          '<div id="bodyContent">' +
          "<p><b>Address</b> <br>  " +
          "Abilkhair khana 13</p>" +
          '<p>'+
          "(built: September 13, 2012).</p>" +
          "</div>" +
          "</div>",}).open(map, marker2);
		}
		if(e == "office3"){
			map.setCenter({ lat:50.282103, lng: 57.201362 });
			map.setZoom(15);
			new google.maps.InfoWindow({content: '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h6>Office №3</h6>' +
          '<div id="bodyContent">' +
          "<p><b>Address</b> <br>  " +
          "Pushkina 41</p>" +
          '<p>'+
          "(built: December 31, 2009).</p>" +
          "</div>" +
          "</div>",}).open(map, marker3);
		}
	}


	// loop of font cards()
	
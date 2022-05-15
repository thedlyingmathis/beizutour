<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beizen Tour</title>
    <link rel="stylesheet" href="mystyle.css">
	<?php 
		include("function.php");
	?>
</head>
<body onload="spruch()">
    <header>
    <h1 class="titel">Mättis und Gianlis Oberwalliser Beizen Tour</h1>

    <img class="animation" src='cheers-mug.png' onMouseover="src='https://c.tenor.com/oOcnnwSlEaoAAAAM/cheers-mug.gif'" onMouseout="src='cheers-mug.png'">
</header>
<section>
<div class="drittel">	
<button onclick="myFunction(this.value)" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d354.61480741600326!2d7.882273211761775!3d46.29090710730865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f6b1aef721e79%3A0xe1789f50d157935c!2sInsider!5e0!3m2!1sde!2sch!4v1652128225811!5m2!1sde!2sch" id="InsiderPub" class="bar" onmouseover="this.timer=window.setTimeout(infos('Infos1'),2000);" onmouseout="this.timer=window.setTimeout(infos2('Infos1'),2000);">Insider Pub</button>
<br>
<div class="Infos" id="Infos1">
	<a href="">Menu als PDF</a>
	<?php
		$infos = details("Insider pub");
		print($infos);
	?>
</div>
</div>
<div class="drittel">
<button onclick="myFunction(this.value)" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d354.61480741600326!2d7.882273211761775!3d46.29090710730865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f6b1aef721e79%3A0xe1789f50d157935c!2sInsider!5e0!3m2!1sde!2sch!4v1652128225811!5m2!1sde!2sch" id="P2"  class="bar" onmouseover="this.timer=window.setTimeout(infos('Infos2'),2000);" onmouseout="this.timer=window.setTimeout(infos2('Infos2'),2000);">P2</button>
<div class="Infos" id="Infos2">
	<a href="">Menu als PDF</a>
	<?php
		$infos = details("P2");
		print($infos);
	?>
</div>
</div>
<div class="drittel">
<button onclick="myFunction(this.value)" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219.07204328657338!2d7.988065480277725!3d46.31673870701867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f6ed307d37b0f%3A0x7337f121a7adbcdb!2sBritannia%20Pub!5e0!3m2!1sde!2sch!4v1652128395662!5m2!1sde!2sch" id="BritanniaPub"  class="bar" onmouseover="this.timer=window.setTimeout(infos('Infos3'),2000);" onmouseout="this.timer=window.setTimeout(infos2('Infos3'),2000);">Britania Pub</button>
<div class="Infos" id="Infos3">
	<a href="">Menu als PDF</a>
	<?php
		$infos = details("Britannia Pub");
		print($infos);
	?>
</div>
</div>
<div class="drittel">
<button onclick="myFunction(this.value)" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219.07485777843206!2d7.988536121438291!3d46.31603568363595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f6f7d3062b843%3A0x40570195bd023e9f!2sScala%20Music-Caf%C3%A9!5e0!3m2!1sde!2sch!4v1652128417029!5m2!1sde!2sch" id="Scala"  class="bar" onmouseover="this.timer=window.setTimeout(infos('Infos4'),2000);" onmouseout="this.timer=window.setTimeout(infos2('Infos4'),2000);">Scala</button>
<div class="Infos" id="Infos4">
	<a href="">Menu als PDF</a>
	<?php
		$infos = details("Scala");
		print($infos);
	?>
</div>
</div>
<div class="drittel">
<button onclick="myFunction(this.value)" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927.8190320116063!2d7.987086631886595!3d46.31908754502649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f6ed3d3cd2413%3A0xd92a326d935ceae4!2sPerron%201!5e0!3m2!1sde!2sch!4v1652128481094!5m2!1sde!2sch" id="P2"  class="bar" onmouseover="this.timer=window.setTimeout(infos('Infos5'),2000);" onmouseout="this.timer=window.setTimeout(infos2('Infos5'),2000);">P2</button>
<div class="Infos" id="Infos5">
	<a href="">Menu als PDF</a>
	<?php
		$infos = details("P2");
		print($infos);
	?>
</div>
</div>
<div class="drittel">
<button onclick="myFunction(this.value)" value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1501.0042036478833!2d7.989471203283132!3d46.32492719445719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f6edaf5100db1%3A0xf3ba7fd0cf9e1fa7!2sPizzeria%20Pub%20118!5e0!3m2!1sde!2sch!4v1652128531746!5m2!1sde!2sch" id="Pub118"  class="bar" onmouseover="this.timer=window.setTimeout(infos('Infos6'),2000);" onmouseout="this.timer=window.setTimeout(infos2('Infos6'),2000);">Pub118</button>
<div class="Infos" id="Infos6">
	<a href="">Menu als PDF</a>
	<?php
		$infos = details("Pub 118");
		print($infos);
	?>
</div>
</div>

    <iframe id="calendar" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5511.390442548708!2d7.9872816!3d46.3158901!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f6ed186c795df%3A0x67cbe2751a19a244!2sBrig!5e0!3m2!1sde!2sch!4v1651578815509!5m2!1sde!2sch" width="100%" height="450" frameborder="0" scrolling="no"></iframe>
</section>
<section>
<script>  
        function validateform(){  
        var name=document.myform.name.value;  
        var password=document.myform.password.value;  
          
        if (name==null){  
            document.myform.name.classList.add("mystyle");
          return false;  
        }else if(password.length<6){  
          alert("Password must be at least 6 characters long.");  
          return false;  
          }  
        }  
        </script>   
		<div class="form">   
			<center>	
				<form action="signup.html" method="post" id="signup">
					<h1>Reservieren</h1>
					<div class="field">
						<label for="name">Name:</label><br>
						<input type="text" id="name" name="name" placeholder="Gib deinen vollen Namen an" />
						<small></small>
					</div>
					
					<div class="field">
						<label for="email">Email:</label><br>
						<input type="text" id="email" name="email" placeholder="Gib deine E-Mail adresse an" />
						<small></small>
					</div>
					
					<div class="field">
						<label for="restaurant">Restaurant:</label><br>
						<input type="text" id="restaurant" name="restaurant" placeholder="Gib das Restaurant an" />
						<small></small>
					</div>
					
					<div class="field">
						<label for="datum">Datum:</label><br>
						<input type="date" id="datum" name="datum" placeholder="Gib das Datum an" />
						<small></small>
					</div>
					
					<div class="field">
						<label for="zeit">Zeit:</label><br>
						<input type="time" id="zeit" name="zeit" placeholder="Gib die Zeit an" />
						<small></small>
					</div>
					
					<div class="field">
						<label for="anzahl_personen">Anzahl Personen:</label><br>
						<input type="number" id="anzahl_personen" name="anzahl_personen" placeholder="Anzahl Personen" />
						<small></small>
					</div>
					<br>
					<div class="field">
						<button type="submit" class="full">Senden</button>
					</div>
				</form>
			</center>
		</div>
	<script>
            // show a message with a type of the input
				function showMessage(input, message, type) {
					// get the small element and set the message
					const msg = input.parentNode.querySelector("small");
					msg.innerText = message;
					// update the class for the input
					input.className = type ? "success" : "error";
					return type;
				}

				function showError(input, message) {
					return showMessage(input, message, false);
				}

				function showSuccess(input) {
					return showMessage(input, "", true);
				}

				function hasValue(input, message) {
					if (input.value.trim() === "") {
						return showError(input, message);
					}
					return showSuccess(input);
				}

				function validateEmail(input, requiredMsg, invalidMsg) {
					// check if the value is not empty
					if (!hasValue(input, requiredMsg)) {
						return false;
					}
					// validate email format
					const emailRegex =
						/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

					const email = input.value.trim();
					if (!emailRegex.test(email)) {
						return showError(input, invalidMsg);
					}
					return true;
				}

				const form = document.querySelector("#signup");
				const NAME_REQUIRED = "";
				const EMAIL_REQUIRED = "";
				const EMAIL_INVALID = ""
				const RESTAURANT_REQUIRED = "";
				const DATUM_REQUIRED = "";
				const ZEIT_INVALID = "";
				const ANZAHL_PERSONEN_REQUIRED = "";

				form.addEventListener("submit", function (event) {
					// stop form submission
					event.preventDefault();

					// validate the form
					let nameValid = hasValue(form.elements["name"], NAME_REQUIRED);
					let emailValid = validateEmail(form.elements["email"], EMAIL_REQUIRED, EMAIL_INVALID);
					let restaurantValid = hasValue(form.elements["restaurant"], RESTAURANT_REQUIRED);
					let datumValid = hasValue(form.elements["datum"], DATUM_REQUIRED);
					let zeitValid = hasValue(form.elements["zeit"], ZEIT_INVALID);
					let anzahlpersonenValid = hasValue(form.elements["anzahl_personen"], ANZAHL_PERSONEN_REQUIRED);
					// if valid, submit the form.
					if (nameValid && emailValid) {
						alert("Die Reservierung wurde versendet. Vielen Dank.");
					}
				});
        </script>
	</section>
	<section>



<div class="bier">
    <p>Wann ist die beste Zeit zum Bier trinken? Um <span id="bierzeit"></span> Uhr</p>
</div>

    <script>
	function myFunction(button_url) {
		document.getElementById('calendar').src = button_url;
	}

    var von = 0;
    var bis = 24;
    var hour = von + Math.random() * (bis - von) | 0;
    document.getElementById('bierzeit').textContent = hour;
    
    function spruch() {
		alert("Wo früher meine Leber war, ist heute eine Minibar!")
	}
	</script>



	<script>
		function infos(info){
			const Infos = document.getElementById(info); 
			Infos.style.cssText = 'color: black;';
		}
		function infos2(info){
			const Infos = document.getElementById(info); 
			Infos.style.cssText = 'color: transparent;';
		}
	</script>
</section>
</body>
</html>
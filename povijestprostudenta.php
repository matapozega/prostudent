<?php
include_once 'konfig.php';
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once 'template/head.php';
		?>
	</head>
	<body>
		<?php
		include_once 'template/header.php';
		?>
		<?php
		include_once 'template/logo.php';
		?>
		<?php
		include_once 'template/menu.php';
		?>
		<br />
		
		<div class="row column large-12 medium-centered">
		  <ul class="tabs text-center" data-tabs id="example-tabs">
		    <li class="tabs-title is-active"><a href="#povijest" aria-selected="true">Povijest</a></li>
		    <li class="tabs-title"><a href="#2015">Projekti 2015</a></li>
		    <li class="tabs-title"><a href="#2016">Projekti 2016</a></li>
		  </ul>
		  <div class="tabs-content" data-tabs-content="example-tabs" >
		  	
		  	
		  	<!-- POČETAK PANELA POVIJEST -->
		  	
		  	
		    <div class="tabs-panel is-active" id="povijest" align="center">
		     	<div class="row" style="width: 640px; height: 480px; text-align: center;">		
					<div class="orbit" role="region" aria-label="Prošli natječaji" data-orbit>
						<ul class="orbit-container ">
							<li class="orbit-slide">
								<div>
									 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/led.png" alt="Tomislav Bešlić: RAČUNALNA IGRA PONG NA 16 MATRIČNIH POKAZNIKA">
									 <br />
									 <p id="opis"><br /><b>Tomislav Bešlić: RAČUNALNA IGRA PONG NA 16 MATRIČNIH POKAZNIKA</b><br /></p>
								</div>
							</li>
							<li class="orbit-slide">
								<div>
									 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/ruka.png" alt="Karlo Kostanjevac: ROBOTSKA RUKA UPRAVLJANA LJUDSKOM RUKOM">
									 <br />
									 <p id="opis"><br /><b>Karlo Kostanjevac: ROBOTSKA RUKA UPRAVLJANA LJUDSKOM RUKOM</b></p>
								</div>
							</li>
							<li class="orbit-slide">
								<div>
									 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/solar.png" alt="Matej Žnidarec: SOLARNI PUNJAČ SA SUSTAVOM ZA PRAĆENJE POLOŽAJA SUNCA">
									 <br />
									 <p id="opis"><br /><b>Matej Žnidarec: SOLARNI PUNJAČ SA SUSTAVOM ZA PRAĆENJE POLOŽAJA SUNCA</b></p>
								</div>
							</li>
							<li class="orbit-slide">
								<div>
									 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/car.png" alt="Stjepan Krpan: SMARTBOT (ROBOTCAR)">
									 <br />
									 <p id="opis"><br /><b>Stjepan Krpan: SMARTBOT (ROBOTCAR)</b></p>
								</div>
							</li>
						</ul>
						<nav class="orbit-bullets">
							<button class="is-active" data-slide="0">
								<span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span>
							</button>
							<button data-slide="1">
								<span class="show-for-sr">Second slide details.</span>
							</button>
							<button data-slide="2">
								<span class="show-for-sr">Third slide details.</span>
							</button>
							<button data-slide="3">
								<span class="show-for-sr">Fourth slide details.</span>
							</button>
						</nav>
					</div>
					
		</div>
		<br/>
		<p id="povijestpro">Povijest Pro-Studenta i nije toliko velika, ali baš zato se može pohvaliti dosadašnjim
			idejama i izrađenim maketama. Naime, kako je Fakultetu iznimno važno podržavati i razvijati praktične
			vještine studenata, u tu svrhu Fakultet od 2015. godine raspisuje natječaj "Pro-Student" za prezentacijski
			zanimljive makete: </p>
			<p id="povijestpro"> - prva godina (2015.)</p>
			<a target="_blank" href="https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2349#2349">https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2349#2349</a> <br />
			<a target="_blank" href="https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2392#2392">https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2392#2392</a>
			</p>
			<p id="povijestpro"> - druga godina (2016., u ocjenjivanje se uključili i Rimac Automobili!)</p>
			<a target="_blank" href="https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2809#2809">https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2809#2809</a> <br />
			<a target="_blank" href="https://www.etfos.hr/studenti/sve-obavijesti/opce-obavijesti-za-studente/3000#3000">https://www.etfos.hr/studenti/sve-obavijesti/opce-obavijesti-za-studente/3000#3000</a>
			</p>
			
			<br/>
			<p id="povijestpro">Fakultet je financirao izradu projekata, prve godine odobreno pet projekata od 17 prijedloga, druge godine šest projekata 
			od 22 prijedloga. Uz to su studenti po uspješnom završetku projekta dobivali nagradu, ali i priznanje na svečanoj sjednici 
			Fakultetskog vijeća koja se održava za Dan Fakulteta. </p>
		 	</div>
		 	
		 	<!-- POČETAK PANELA 2015 -->
		 	
		    <div class="tabs-panel" id="2015">
		    <br />
		    
		    	<p id="povijestpro"><b>Prve godine su do kraja uspješno realizirani prijedlozi:</b></p>
			
					<div class="video">
						<video id="video" width="640" height="480" controls>
		  					<source src="<?php echo $putanjaAPP ?>video/pong.mp4" type="video/mp4">
						</video>
						<p id="opisvideo">Tomislav Bešlić: RAČUNALNA IGRA PONG NA 16 MATRIČNIH POKAZNIKA</p>
					</div>

					<div class="video">
						<video id="video" width="640" height="480" controls>
		  					<source src="<?php echo $putanjaAPP ?>video/roboruka.mp4" type="video/mp4">
						</video>
						<p id="opisvideo">Karlo Kostanjevac: ROBOTSKA RUKA UPRAVLJANA LJUDSKOM RUKOM</p>
					</div>
		
					<div class="video">
						<video id="video" width="640" height="480" controls>
			  				<source src="<?php echo $putanjaAPP ?>video/smartbot.mp4" type="video/mp4">
						</video>
						<p id="opisvideo">Stjepan Krpan: SMARTBOT (ROBOTCAR)</p>
					</div>
					
					<div class="video">
						<video id="video" width="640" height="480" controls>
			  				<source src="<?php echo $putanjaAPP ?>video/solarni.mp4" type="video/mp4">
						</video>
						<p id="opisvideo">Matej Žnidarec: SOLARNI PUNJAČ SA SUSTAVOM ZA PRAĆENJE POLOŽAJA SUNCA</p>
			</div>
		    </div>
		    
		    
		    <!-- POČETAK PANELA 2016 -->
		    
		    
		    <div class="tabs-panel" id="2016">
		    
		    	<br />
		    	<p id="povijestpro"><b>Druge godine su do kraja uspješno realizirani prijedlozi:</b></p>
		    	
				<p id="povijestpro">- Tomislav Bešlić: MIKROUPRAVLJAČKI SUSTAV ZA PREPOZNAVANJE OBLIKA (video slijedi uskoro)</p>
				<p id="povijestpro">- Karlo Kostanjevac: KUGLA I STOL (video slijedi uskoro)</p>
				<p id="povijestpro">- David Zovko: RAČUNALNA IGRA PONG NA 16 MATRIČNIH POKAZNIKA (video slijedi uskoro)</p>
				<p id="povijestpro">- Luka Ruškan: SMARTBOT (ROBOTCAR) (video slijedi uskoro)</p>
				<p id="povijestpro">- Denis Vajak: SOLARNI PUNJAČ SA SUSTAVOM ZA PRAĆENJE POLOŽAJA SUNCA (video slijedi uskoro) </p>
			<br /> <br />
		    </div>
		  </div>
		</div>
		
	
		<?php include_once 'template/footer.php' ?>
		<?php
		include_once 'template/script.php';
		?>
	</body>
</html>
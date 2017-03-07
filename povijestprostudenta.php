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
		
		<div class="row extended">
		
			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				<ul class="orbit-container">
					<li class="orbit-slide">
						<div>
							<br />
							 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/led.png" alt="Space">
							 
							 <p id="opis"><br /><b><u>Tomislav Bešlić: RAČUNALNA IGRA PONG NA 16 MATRIČNIH POKAZNIKA</u></b><br /></p>
						</div>
					</li>
					<li class="orbit-slide">
						<div>
							 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/ruka.png" alt="Space">
							 <br />
							 <p id="opis"><br /><b><u>Karlo Kostanjevac: ROBOTSKA RUKA UPRAVLJANA LJUDSKOM RUKOM</u></b></p>
						</div>
					</li>
					<li class="orbit-slide">
						<div>
							 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/solar.png" alt="Space">
							 <br />
							 <p id="opis"><br /><b><u>Matej Žnidarec: SOLARNI PUNJAČ SA SUSTAVOM ZA PRAĆENJE POLOŽAJA SUNCA</u></b></p>
						</div>
					</li>
					<li class="orbit-slide">
						<div>
							 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/car.png" alt="Space">
							 <br />
							 <p id="opis"><br /><b><u>Stjepan Krpan: SMARTBOT (ROBOTCAR)</u></b></p>
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
		<div class="row">
			<h1 id="naslovpro"><u>Prošli natječaji: </u></h1>
			<p id="povijestpro">Povijest <b>Pro-Studenta</b> i nije toliko velika, ali baš zato se može pohvaliti dosadašnjim
			idejama i izrađenim maketama. Naime, kako je Fakultetu iznimno važno podržavati i razvijati praktične
			vještine studenata, u tu svrhu Fakultet od 2015. godine raspisuje natječaj "Pro-Student" za prezentacijski
			zanimljive makete: </p>
			<pre> - prva godina (2015.)</pre>
			<a href="https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2349#2349">https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2349#2349</a> <br />
			<a href="https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2392#2392">https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2392#2392</a>
			</p>
			<pre> - druga godina (2016., u ocjenjivanje se uključili i Rimac Automobili!)</pre>
			<a href="https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2809#2809">https://www.etfos.hr/studenti/sve-obavijesti/dogadanja-i-pozivi/2809#2809</a> <br />
			<a href="https://www.etfos.hr/studenti/sve-obavijesti/opce-obavijesti-za-studente/3000#3000">https://www.etfos.hr/studenti/sve-obavijesti/opce-obavijesti-za-studente/3000#3000</a>
			</p>
			<p id="povijestpro"><b>Primjere projekata pogledajte na videu:</b></p>
			<div class="video">
				<video id="video" width="640" height="480"  controls>
  					<source src="<?php echo $putanjaAPP ?>video/123.mp4" type="video/mp4" >
				</video>
			</div>
			<br/>
			<p id="povijestpro"><b>Fakultet</b> je financirao izradu projekata, prve godine odobreno pet projekata od 17 prijedloga, druge godine šest projekata 
			od 22 prijedloga. Uz to su studenti po uspješnom završetku projekta dobivali nagradu, ali i priznanje na svečanoj sjednici 
			Fakultetskog vijeća koja se održava za Dan Fakulteta. </p>
			
			
			<br /><br />
			<p style="font-size: 1.2rem;" id="povijestpro"><b><u>Prve godine su do kraja uspješno realizirani prijedlozi:</u></b></p>
			
			<div class="video">
				<video id="video" width="640" height="480" controls>
  					<source src="<?php echo $putanjaAPP ?>video/pong.mp4" type="video/mp4">
				</video>
				<p id="opisvideo"><u>Tomislav Bešlić: RAČUNALNA IGRA PONG NA 16 MATRIČNIH POKAZNIKA</u></p>
			</div>
			
			
			<div class="video">
				<video id="video" width="640" height="480" controls>
  					<source src="<?php echo $putanjaAPP ?>video/roboruka.mp4" type="video/mp4">
				</video>
				<p id="opisvideo"><u>Karlo Kostanjevac: ROBOTSKA RUKA UPRAVLJANA LJUDSKOM RUKOM</u></p>
			</div>
			
			
			<div class="video">
				<video id="video" width="640" height="480" controls>
	  				<source src="<?php echo $putanjaAPP ?>video/smartbot.mp4" type="video/mp4">
				</video>
				<p id="opisvideo"><u>Stjepan Krpan: SMARTBOT (ROBOTCAR)</u></p>
			</div>
			
			
			<div class="video">
				<video id="video" width="640" height="480" controls>
	  				<source src="<?php echo $putanjaAPP ?>video/solarni.mp4" type="video/mp4">
				</video>
				<p id="opisvideo"><u>Matej Žnidarec: SOLARNI PUNJAČ SA SUSTAVOM ZA PRAĆENJE POLOŽAJA SUNCA</u></p>
			</div>
			
			</br></br>
			<p id="povijestpro"><b><u>Druge godine su do kraja uspješno realizirani prijedlozi:</u></b></p>
			<p id="povijestpro">- Tomislav Bešlić: MIKROUPRAVLJAČKI SUSTAV ZA PREPOZNAVANJE OBLIKA</p>
			<p id="povijestpro">- Karlo Kostanjevac: KUGLA I STOL</p>
			<p id="povijestpro">- David Zovko: RAČUNALNA IGRA PONG NA 16 MATRIČNIH POKAZNIKA</p>
			<p id="povijestpro">- Luka Ruškan: SMARTBOT (ROBOTCAR)</p>
			<p id="povijestpro">- Denis Vajak: SOLARNI PUNJAČ SA SUSTAVOM ZA PRAĆENJE POLOŽAJA SUNCA  </p>
			<br /> <br />
			
		</div>
	
		<?php include_once 'template/footer.php' ?>
		<?php
		include_once 'template/script.php';
		?>
	</body>
</html>

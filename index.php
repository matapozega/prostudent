<?php include_once 'konfig.php'; ?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php
		include_once 'template/head.php';
		?>
	</head>
	<body>
		<?php include_once 'template/header.php'; ?>
		<?php include_once 'template/logo.php'; ?>
		<?php include_once 'template/menu.php';  ?>
		
		<div class="row">
			<div class="item-wrapper">
				<div class="row" style="margin-top: 20px">
					<div class="large-4 columns" style="color: #1a80b6">
						<h1>Što je to Pro-Student?</h1> <br />
							<p id="tekst">Imate ideju za softver, maketu, <i>gadget</i>, prototip ili možda mobilnu aplikaciju? Isprogramirali biste svoj <i>matrix</i>
							i tako zavladali čovječanstvom? Napravili vremeplov? Džepni teleporter? Malog robota koji bi za Vas polagao 
							ispite? Možda nešto postojeće samo napravili malo bolje? Malo bolji Facebook, malo bolji Google? Puno bolji iPhone ili čak 
							Samsung koji neće eksplodirati? Ili želite nešto napraviti od čega nema nikakve koristi niti ima smisla, ali, eto, 
							samo zato što je "fora"? Ma može i to... Sve što trebate je javiti se na fakultetski natječaj <b>Pro-Student!</b> <br />
							Što se u zadnje dvije godine pod tim imenom realiziralo možete vidjeti u <a href="povijestprostudenta.php">"POVIJEST PRO-STUDENTA"</a>, a u 
							<a href="natjecaj17.php">2017. godini će se natječaj proširiti </a>s idejama koje imaju "komercijalni potencijal", a onda očekujemo i puno veći broj
							vaših ideja i prijava. 
							</p> 
					</div>
			
			<div class="large-4 columns" style="color: #1a80b6">
				<h1>Što znati o natječaju?</h1><br />
				
				<p id="tekst">Natječaj će vjerojatno biti raspisan u travnju ili svibnju, a detalje uvjeta natječaja možete očekivati do kraja ožujka. 
				Međutim, već sada možemo potvrditi suradnju s poduzetničkim inkubatorima Terom Tehnopolis, BIOS, SIOS, te s Ekonomskim fakultetom 
				Osijek koji će biti potpora u realizaciji odabranih projektnih prijedloga.  Uz to očekujemo i sudjelovanje nekih tvrtki sa Stupa,
				ali sve u svoje vrijeme. <br />   
				</p>
				<h4>Nemaš motivaciju???</h4>
				<p id="nagrada">Razmisli još malo. Za izradu ti nudimo 8000 kn sredstava, a nagrađujemo dodatno najbolje radove iznosom od 2000 kn. Hmm, 
				i dalje misliš da nije sve u novcu? Uz to, naši partneri BIOS, SIOS, Tera Tehnopolis i EFOS pobjednike također nagrađuju.
				 </p>

				
			</div>
			<div class="large-4 columns end" style="color: #1a80b6">
				<img src="<?php echo $putanjaAPP ?>img/naslovna.png" alt="PROSTUDENT" style="width:350px;height:350px;">
				<br/>
				<p id="dobrodosli">Dobro došli na portal <b>Pro-Student</b> Fakulteta elektrotehnike, računarstva i informacijskih tehnologija</p>
				<br/> <br/>
				
			</div>
		</div>
		</div>
		</div>

		<?php include_once 'template/footer.php' ?>
		<?php
			include_once 'template/script.php';
		?>
	</body>
</html>

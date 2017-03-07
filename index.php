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
			<h1>Što je to PRO-Student?</h1> <br />
				<p id="tekst">Imate ideju za software, maketu, gadget, prototip ili možda mobilnu aplikaciju? Isprogramirali biste svoj matrix
				i tako zavladali čovječanstvom? Napravili vremeplov? Džepni teleporter? Malog robota koji bi za Vas polagao 
				ispite? Možda nešto postojeće samo napravili malo bolje? Malo bolji Facebook, malo bolji Google? Puno bolji iPhone ili čak 
				Samsung koji neće eksplodirati? Ili želite nešto napraviti od čega nema nikakve koristi niti ima smisla, ali, eto, 
				samo zato što je "fora"? Ma može i to... Sve što trebate je javiti se na fakultetski natječaj <b>PRO-STUDENT!</b> <br />
				Što se u zadnje dvije godine pod tim imenom realiziralo možete vidjeti u "POVIJEST PRO-STUDENTA", a u 
				2017. godini će se natječaj proširiti s idejama koje imaju "komercijalni potencijal", a onda očekujemo i puno veći broj
				vaših ideja i prijava. 
				</p> 
			</div>
			
			<div class="large-4 columns" style="color: #1a80b6">
				<h1>Što znati o natječaju?</h1><br />
				<h5>Mogućnost prijave na natječaj: </h5>
				<dl>
					  <dt><u> ZANIMLJIVE IDEJE</u></dt>
					  <li id="main">- Ideju je potrebno samo prezentirati pred komisijom.</li> <br />
					  <dt><u> S KOMERCIJALNIM POTENCIJALOM</u></dt>
					  <li id="main">- Ideje koje je potrebno prezentirati te izraditi.</li>
				</dl>
				<p id="tekst">Natječaj će vjerojatno biti raspisan u travnju ili svibnju, a detalje uvjeta natječaja možete očekivati do kraja veljače. 
				Međutim, već sada možemo potvrditi suradnju s poduzetničkim inkubatorima Terom Tehnopolis, BIOS, te s Ekonomskim fakultetom 
				Osijek koji će biti potpora u realizaciji odabranih projektnih prijedloga.  Uz to očekujemo i sudjelovanje nekih tvrtki sa Stupa,
				ali sve u svoje vrijeme. <br />   
				</p>

				
			</div>
			<div class="large-4 columns end" style="color: #1a80b6">
				<img src="<?php echo $putanjaAPP ?>img/naslovna.png" alt="PROSTUDENT" style="width:350px;height:350px;">
				<br/> <br/>
				<h4>NEMAŠ MOTIVACIJU???</h4>
				<p id="nagrada">Razmisli još malo. Za izradu ti nudimo <b>8000 kn</b> sredstava, a nagrađujemo dodatno najbolje radove iznosom od <b>2000 kn</b>. Hmm, 
				i dalje misliš da nije sve u novcu? Uz to, naši partneri BIOS i Tera Tehnopolis pobjednike također nagrađuju.
				 </p>
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

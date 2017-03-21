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
			<div class="row column large-12 medium-centered">
				 <ul class="tabs text-center" data-tabs id="example-tabs">
				    <li class="tabs-title is-active"><a href="#zapro" aria-selected="true">ZAPRO-poziv</a></li>
				    <li class="tabs-title"><a href="#kompot">KOMPOT-poziv</a></li>
				 </ul>
				 
		  <div class="tabs-content" data-tabs-content="example-tabs" >
			<div class="tabs-panel" id="zapro">
				<p id="povijestpro">
					ZAPRO-poziv je poziv za prezentacijski zanimljive projekte, tj. to je zapravo poziv koji je bio i <a href="povijestprostudenta.php">prethodne dvije godine.</a>
					ZAPRO prijedlozi ocjenjivat će se prema sljedećim kriterijima:</p>
					<p id="povijestpro">-	povezanost s elektrotehnikom i/ili računarstvom i/ili IT-em 
					(ako je prijedlog nekakvo softversko rješenje, onda je to dovoljno „povezano“ s IT-em, 
					tj. sama tematika softvera NE MORA imati veze s elektrotehnikom, računarstvom, IT-em)</p>
					<p id="povijestpro">-	reinovativnost prijedloga 
					<p id="povijestpro">-	jasnoća što prijedlog predstavlja 
					<p id="povijestpro">-	aktualnost primijenjene tehnologije prilikom planirane realizacije prijedloga 
					<p id="povijestpro">-	jednostavnost postavljanja/podešavanja/pripreme za korištenje 
					<p id="povijestpro">-	jednostavnost korištenja za posjetitelje 
					<p id="povijestpro">-	razina interaktivnosti za posjetitelje
					<p id="povijestpro">-	zanimljivost/atraktivnost (neovisno o interaktivnosti) u svrhu promocije elektrotehnike i/ili računarstva i/ili IT-a 
					<p id="povijestpro">-	razina razlikovanja prijedloga u odnosu na prijedloge realizirane na <a href="povijestprostudenta.php">dosadašnjim Pro-Student natječajima</a>
					<p id="povijestpro">Detalje (npr. broj bodova po kategorijama, uvjete natječaja i sl.) možete očekivati najkasnije u travnju!
					Odabrani prijedlozi će dobiti punu podršku <a href="partneri.php">partnera!</a>

					<!-- DOWNLOAD DOKUMENATA -->

					<p id="povijestpro">
					<a href="download.php?link=Poziv_za_prijavu_FERIT-KOMPOT_poziv_2017-03-17.docx">Download Poziv za prijavu FERIT-KOMPOT poziv 2017-03-17 </a>
					</p>
					<p id="povijestpro">
					<a href="download.php?link=Poziv_za_prijavu_FERIT-ZAPRO_poziv_2017-03-17.docx">Download Poziv za prijavu FERIT-ZAPRO poziv 2017-03-17 </a>
					</p>
					<p id="povijestpro">
					<a href="download.php?link=Prijavni_obrazac_FERIT-KOMPOT_poziv_2017-03-17.docx">Download Prijavni obrazac FERIT-KOMPOT poziv 2017-03-17 </a>
					</p>
					<p id="povijestpro">
					<a href="download.php?link=Prijavni_obrazac_FERIT-ZAPRO_poziv_2017-03-17.docx">Download Prijavni obrazac FERIT-ZAPRO poziv 2017-03-17 </a>
					</p>
					<p id="povijestpro">
					<a href="download.php?link=Troskovnik_FERIT-KOMPOT_i_ZAPRO_2017-03-17.docx">Download Troškovnik FERIT-KOMPOT i ZAPRO 2017-03-17 </a>
					</p>
					<br /><br />

		    </div>
		    <div class="tabs-panel" id="kompot">
		    		<p id="povijestpro">KOMPOT-poziv je poziv za ideje s komercijalnim potencijalom. E, ovo je nešto novo! 
					KOMPOT prijedlozi ocjenjivat će se prema sljedećim kriterijima:
					<p id="povijestpro">-	povezanost s elektrotehnikom i/ili računarstvom i/ili IT-em (ako je prijedlog nekakvo softversko rješenje, onda je to dovoljno „povezano“ s IT-em, tj. sama tematika softvera NE MORA imati veze s elektrotehnikom, računarstvom, IT-em)
					<p id="povijestpro">-	inovativnost ideje
					<p id="povijestpro">-	jasnoća što ideja predstavlja
					<p id="povijestpro">-	aktualnost primijenjene tehnologije prilikom realizacije
					<p id="povijestpro">-	potencijal na tržištu
					<p id="povijestpro">-	koliko je trenutačna realizacija blizu razini spremnoj za komercijalizaciju
					
					<p id="povijestpro">Detalje (npr. broj bodova po kategorijama, uvjete natječaja i sl.) možete očekivati najkasnije u travnju!
					Odabrani prijedlozi će dobiti punu podršku <a href="partneri.php">partnera!</a>
					<br /><br /><br /><br /><br /><br /><br />
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
-
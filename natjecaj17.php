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
				    <li class="tabs-title is-active"><a class="underline" href="#zapro" aria-selected="true">ZAPRO-poziv</a></li>
				    <li class="tabs-title"><a class="underline" href="#kompot">KOMPOT-poziv</a></li>
				 </ul>
				 
		  <div class="tabs-content" data-tabs-content="example-tabs" >
			<div class="tabs-panel" id="zapro">
			<center><img src="<?php echo $putanjaAPP ?>img/kljuc.png" alt="ZAPRO" style="width:200px;height:200px;"> </center>
			<br /><br />
				<p id="povijestpro">
					ZAPRO-poziv je poziv za prezentacijski zanimljive projekte, tj. to je zapravo poziv koji je bio i <a href="povijestprostudenta.php">prethodne dvije godine.</a>
					ZAPRO prijedlozi ocjenjivat će se prema sljedećim kriterijima:</p>
					
						<ul>
							<li id="povijestpro">
								povezanost s elektrotehnikom i/ili računarstvom i/ili IT-em 
								(ako je prijedlog nekakvo softversko rješenje, onda je to dovoljno „povezano“ s IT-em, 
								tj. sama tematika softvera NE MORA imati veze s elektrotehnikom, računarstvom, IT-em)
							</li>
							<li id="povijestpro">
								reinovativnost prijedloga
							</li>
							<li id="povijestpro">
								jasnoća što prijedlog predstavlja
							</li>
							<li id="povijestpro">
								aktualnost primijenjene tehnologije prilikom planirane realizacije prijedloga
							</li>
							<li id="povijestpro">
								jednostavnost postavljanja/podešavanja/pripreme za korištenje 
							</li>
							<li id="povijestpro">
								jednostavnost korištenja za posjetitelje 
							</li>
							<li id="povijestpro">
								razina interaktivnosti za posjetitelje
							</li>
							<li id="povijestpro">
								zanimljivost/atraktivnost (neovisno o interaktivnosti) u svrhu promocije elektrotehnike i/ili računarstva i/ili IT-a
							</li>
							<li id="povijestpro">
								razina razlikovanja prijedloga u odnosu na prijedloge realizirane na <a href="povijestprostudenta.php">dosadašnjim Pro-Student natječajima</a>
							</li>
							
						</ul>
					<p id="povijestpro">
						Odabrani prijedlozi će dobiti punu podršku <a href="partneri.php">partnera!</a>
					</p>
					<!-- DOWNLOAD DOKUMENATA -->

					
					<p id="povijestpro">
					<a href="download.php?link=Poziv_za_prijavu_FERIT-ZAPRO_poziv_2017-03-17.docx">Preuzmi Poziv za prijavu FERIT-ZAPRO poziv </a>
					</p>
					
					<p id="povijestpro">
					<a href="download.php?link=Prijavni_obrazac_FERIT-ZAPRO_poziv_2017-03-17.docx">Preuzmi Prijavni obrazac FERIT-ZAPRO poziv </a>
					</p>
					<p id="povijestpro">
					<a href="download.php?link=Troskovnik_FERIT-KOMPOT_i_ZAPRO_2017-03-17.docx">Preuzmi Troškovnik FERIT-KOMPOT i ZAPRO</a>
					</p>
					<br /><br />

		    </div>
		    <div class="tabs-panel" id="kompot">
		    
		    <center><img src="<?php echo $putanjaAPP ?>img/tegla.png" alt="KOMPRO" style="width:200px;height:200px;"> </center>
		    <br /><br />
		    		<p id="povijestpro">KOMPOT-poziv je poziv za ideje s komercijalnim potencijalom. E, ovo je nešto novo! 
					KOMPOT prijedlozi ocjenjivat će se prema sljedećim kriterijima:
					<ul>
							<li id="povijestpro">
								povezanost s elektrotehnikom i/ili računarstvom i/ili IT-em (ako je prijedlog nekakvo 
								softversko rješenje, onda je to dovoljno „povezano“ s IT-em, tj. sama tematika softvera NE MORA imati veze s 
								elektrotehnikom, računarstvom, IT-em)
							</li>
							<li id="povijestpro">
								inovativnost ideje
							</li>
							<li id="povijestpro">
								jasnoća što ideja predstavlja
							</li>
							<li id="povijestpro">
								koliko je trenutačna realizacija blizu razini spremnoj za komercijalizaciju
							</li>
							<li id="povijestpro">
								potencijal na tržištu
							</li>
							
							
						</ul>
					
					
					<p id="povijestpro">
					Odabrani prijedlozi će dobiti punu podršku <a href="partneri.php">partnera!</a>
					
					<p id="povijestpro">
					<a href="download.php?link=Poziv_za_prijavu_FERIT-KOMPOT_poziv_2017-03-17.docx">Preuzmi Poziv za prijavu FERIT-KOMPOT poziv</a>
					</p>
					<p id="povijestpro">
					<a href="download.php?link=Prijavni_obrazac_FERIT-KOMPOT_poziv_2017-03-17.docx">Preuzmi Prijavni obrazac FERIT-KOMPOT poziv </a>
					</p>
					
					<p id="povijestpro">
					<a href="download.php?link=Troskovnik_FERIT-KOMPOT_i_ZAPRO_2017-03-17.docx">Preuzmi Troškovnik FERIT-KOMPOT i ZAPRO </a>
					</p>
					<br /><br />
					
					
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
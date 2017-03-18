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
					ZAPRO-poziv je poziv za prezentacijski zanimljive projekte, tj. to je zapravo poziv koji je bio i <a href="povijestprostudenta.php">prethodne dvije godine.</a>
					ZAPRO prijedlozi ocjenjivat će se prema sljedećim kriterijima:
					-	povezanost s elektrotehnikom i/ili računarstvom i/ili IT-em (ako je prijedlog nekakvo softversko rješenje, onda je to dovoljno „povezano“ s IT-em, tj. sama tematika softvera NE MORA imati veze s elektrotehnikom, računarstvom, IT-em)
					-	inovativnost prijedloga 
					-	jasnoća što prijedlog predstavlja 
					-	aktualnost primijenjene tehnologije prilikom planirane realizacije prijedloga 
					-	jednostavnost postavljanja/podešavanja/pripreme za korištenje 
					-	jednostavnost korištenja za posjetitelje 
					-	razina interaktivnosti za posjetitelje
					-	zanimljivost/atraktivnost (neovisno o interaktivnosti) u svrhu promocije elektrotehnike i/ili računarstva i/ili IT-a 
					-	razina razlikovanja prijedloga u odnosu na prijedloge realizirane na <a href="povijestprostudenta.php">dosadašnjim Pro-Student natječajima</a>
					Detalje (npr. broj bodova po kategorijama, uvjete natječaja i sl.) možete očekivati najkasnije u travnju!
					Odabrani prijedlozi će dobiti punu podršku <a href="partneri.php">partnera!</a>

		    </div>
		    <div class="tabs-panel" id="kompot">
		    		KOMPOT-poziv je poziv za ideje s komercijalnim potencijalom. E, ovo je nešto novo! 
					KOMPOT prijedlozi ocjenjivat će se prema sljedećim kriterijima:
					-	povezanost s elektrotehnikom i/ili računarstvom i/ili IT-em (ako je prijedlog nekakvo softversko rješenje, onda je to dovoljno „povezano“ s IT-em, tj. sama tematika softvera NE MORA imati veze s elektrotehnikom, računarstvom, IT-em)
					-	inovativnost ideje
					-	jasnoća što ideja predstavlja
					-	aktualnost primijenjene tehnologije prilikom realizacije
					-	potencijal na tržištu
					-	koliko je trenutačna realizacija blizu razini spremnoj za komercijalizaciju
					
					Detalje (npr. broj bodova po kategorijama, uvjete natječaja i sl.) možete očekivati najkasnije u travnju!
					Odabrani prijedlozi će dobiti punu podršku <a href="partneri.php">partnera!</a>

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

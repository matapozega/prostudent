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
		<div class="row">
			<div class="large-4 small-12 medium-6 columns">
				<div class="item-wrapper">
					<a target="_blank" href="http://web.tera.hr/#"><img class="displayed" src="<?php echo $putanjaAPP ?>img/bios-logo-main.png" width="128px" height="70px" /> </a>
					<br/><br /> 
					<p id="partneri"> Što ti nudi BIOS? </p>
						<ul>
							<li>
								subvencionirani zakup poslovnog prostora
							</li>
							<li>
								pružanje savjetodavne i organizacijske
							</li>
							<li>
								poduzetnička i tehnološka edukacija
							</li>
							<li>
								prijenos znanja i tehnologije
							</li>
							<li>
								usluge poslovnog planiranja i razvoja
							</li>
							<li>
								istraživanje tržišta i promocija
							</li> 
							<li>
								razvoj poslovnih vještina
							</li>
							<li>
								edukacija o zaštiti intelektualnog vlasništva
							</li>
							<li>
								savjetodavna pomoć pri ISO certificiranju
							</li>
							<li>
								prezentacija stanara na sajmovima
							</li>
							<li>
								umrežavanje poduzetnika
							</li>
							<li>
								pružanje dodatnih usluga klijentima (web design, grafičke usluge i sl)
							</li>
							<li>
								besplatan brzi Internet pristup
							</li>
							<li>
								najam konferencijske prostorije i audio vizualne opreme
							</li>
							<li>
								korištenje telefaksa i uređaja za kopiranje
							</li>
							<li>
								računovodstvene i pravne usluge
							</li>
							<li>
								predstavljanje stanara na portalu www.inkubator.hr
							</li>
							<li>
								administrativne usluge
							</li><br /> 
							<dd><a href="<?php echo $putanjaAPP;  ?>oteri.php"><u>Saznajte više o BIOS-u!</u></a></li>
						</ul>
					</p>
				</div>
			</div>
			
				<div class="large-4 small-12 medium-6 columns">
					<div class="item-wrapper">
						<a target="_blank" href="http://inkubator.hr/hr_HR/ "><img class="displayed" src="<?php echo $putanjaAPP ?>img/Tera_logo_63.png" width="190px" height="140px" /></a>
						<br/><br /> 
					<p id="partneri"> Što ti nudi Tera technopolis? </p>
						<ul>
							<li>
								uključivanje dobitnika u finale natjecanja BUDI UZOR®
							</li>
							<li>
								dobitnika u studentskom poduzetničkom inkubatoru StudOS kroz korištenje radne stanice do 6 mjeseci bez naknade
							</li>
							<li>
								Savjetodavne usluge u području zaštite intelektualnog vlasništva
							</li>
							<li>
								Korištenje web aplikacije za izradu poslovnog plana Promo BUDI UZOR®
							</li>
							<li>
								Uključivanje natjecatelja u projekt ERASMUS za mlade poduzetnike - odlazak na rad u inozemstvo u trajanju do 6 mjeseci
							</li>
							<li>
								Uključivanje natjecatelja u projekt Europske poduzetničke mreže EEN - ponuda proizvoda/usluga/tehnologije na inozemnom tržištu
							</li> <br /> 
							<dd><a href="<?php echo $putanjaAPP;  ?>oteri.php"><u>Saznajte više o Teri!</u></a></li>
						</ul>
					</p>
					</div>
				</div>

				<div class="large-4 small-12 medium-6 columns">
					<div class="item-wrapper">
						<a target="_blank" href="http://www.efos.unios.hr/"><img class="displayed" src="<?php echo $putanjaAPP ?>img/efos-logo.png" width="200px" height="10px"/></a>
						<br/><br/>
						<p id="partneri">Ekonomski fakultet Osijek </p>
						
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

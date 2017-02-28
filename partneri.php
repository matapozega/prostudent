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
					<a target="_blank" href="http://web.tera.hr/#"><img id="slika1" src="<?php echo $putanjaAPP ?>img/Tera_logo_63.png" /></a>
					<p>
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
							</li>
							<li><a href="<?php echo $putanjaAPP;  ?>oteri.php">Saznajte više o Teri!</a></li>
						</ul>
					</p>
				</div>
			</div>
			
				<div class="large-4 small-12 medium-6 columns">
					<div class="item-wrapper">
						<a target="_blank" href="http://inkubator.hr/hr_HR/ "><img src="<?php echo $putanjaAPP ?>img/bios-logo-main.png" /></a>
						<p></p>
					</div>
				</div>

				<div class="large-4 small-12 medium-6 columns">
					<div class="item-wrapper">
						<a target="_blank" href="http://www.efos.unios.hr/"><img src="<?php echo $putanjaAPP ?>img/efos-logo.png" /></a>
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

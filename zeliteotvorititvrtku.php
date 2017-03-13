<?php include_once 'konfig.php'; ?>

<!doctype html>
<html class="no-js" lang="hr" dir="ltr">
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
				<div class="row" style="margin-top: 20px; color: #1a80b6">
					<div class="large-8 small-12 medium-12 columns">
						<center><h4>Želite otvoriti tvrtku?</h4></center>
					</div>
					<div class="large-4 small-12 medium-12 columns">
						&nbsp;
					</div>
					<div class="large-8 small-12 medium-12 columns">
						<p id="tekst" style="text-align:center;">Želite otvoriti tvrtku, a ne znate kako?<br />
						<b>Imate sreće, sve odgovore imamo mi!</b></p>
						<p id="tekst" style="text-align:left;">Zahvaljujemo osječkim poduzetničkim inkubatorima na ustupljenim informacijama za ovu kratku infografiku:</p>
						<ul style="text-align:center;" id="tekst">
							<li style="text-align:left"><b><u><a href="http://inkubator.hr/hr_HR/">BIOS</a></u></b></li>
							<li style="text-align:left"><b><u><a href="http://web.tera.hr/">Tera Tehnopolis</a></u></b></li>
						</ul>
						<p id="tekst" style="text-align:left;">Princip otvaranja tvrtke:</p>
						<table id="tablica">
							<tr>
								<th rowspan="2" id="tabl">Izvor:</th>
								<th rowspan="2" id="tabl">Osnovna pitanja:</th>
								<th colspan="3" id="tabl"><center>Gdje se nalaze odgovori:</center></th>
							</tr>
							<tr>
								<th id="tabl">Obrt</th>
								<th id="tabl">J.D.O.O.</th>
								<th id="tabl">D.O.O.</th>
							</tr>
							<tr>
								<td id="tera"><b>Tera</b></td>
								<td rowspan="2" id="tabl">Koji su pravni oblici poduzeća u RH?</td>
								<td id="tera">2.1 Obrt</td>
								<td id="tera">2.2 Jednostavno društvo s ograničenom odgovornošću - j.d.o.o.</td>
								<td id="tera">2.3 Društvo s ograničenom odgovornošću - d.o.o.</td>
							</tr>
							<tr>
								<td id="bios"><b>BIOS</b></td>
								<td id="bios">6.1 Obrt</td>
								<td id="bios">6.3 Jednostavno društvo s ograničenom odgovornošću - j.d.o.o.</td>
								<td id="bios">6.2 Društvo s ograničenom odgovornošću - d.o.o.</td>
							</tr>
							<tr>
								<td id="tera"><b>Tera</b></td>
								<td rowspan="2" id="tabl">Koji su prvi koraci pri pokretanju poslova?</td>
								<td id="tera">2.1.2 Otvaranje obrta</td>
								<td id="tera">2.2.1 Koraci pri otvaranju j.d.o.o.</td>
								<td id="tera">2.3.1 Koraci pri otvaranju d.o.o.</td>
							</tr>
							<tr>
								<td id="bios"><b>BIOS</b></td>
								<td id="bios">6.1.3 Osnivanje obrta</td>
								<td id="bios">6.3.1 Osnivanje j.d.o.o.</td>
								<td id="bios">6.2.2 Osnivanje d.o.o.</td>
							</tr>
							<tr>
								<td id="tera"><b>Tera</b></td>
								<td rowspan="2" id="tabl">Koje su obveze prema državi?</td>
								<td id="tera">2.1.1 Porezi i prirezi</td>
								<td colspan="2" id="tera"><center>2.4 Porezi i prirezi</center></td>
							</tr>
							<tr>
								<td id="bios"><b>BIOS</b></td>
								<td colspan="3" id="bios"><center>10. Obveze poduzetnika prema državi</center></td>
							</tr>
							<tr>
								<td id="tera"><b>Tera</b></td>
								<td rowspan="2" id="tabl">Kako ostvariti financiranje pri pokretanju posla?</td>
								<td colspan="3" id="tera"><center>3. Financiranje i podrška poduzetničkim subjektima</center></td>
							</tr>
							<tr>
								<td id="bios"><b>BIOS</b></td>
								<td colspan="3" id="bios"><center>7. Financiranje - gdje pronaći novac potreban za početak poslovanja</center></td>
							</tr>
						</table>
						<br />
					</div>

					
					<div class="large-4 small-12 medium-12 columns">
						<br/> <br/>
						<center><img src="<?php echo $putanjaAPP ?>img/tvrtka.jpg" alt="tvrtka" style="width:400px; height:350px;"></center>
					</div>
							
					<div class="large-6 small-12 medium-12 columns">
						<p id="tekst">Sve ostale informacije studenti mogu pogledati u cjelovitim verzijama dokumenata:</p>
						<ul id="tekst">
							<li><b><u>dokument Tere</u></b></li>
							<li><b><u>dokument BIOS-a</u></b></li>
						</ul>
						<p id="tekst">i/ili se javiti na kontakt adrese poduzetničkih inkubatora:</p>
						<ul>
							<li><b><u><a href="http://inkubator.hr/hr_HR/">BIOS</a></u></b></li>
							<li><b><u><a href="http://web.tera.hr/">Tera Tehnopolis</a></u></b></li>
						</ul>
					</div>
					<div class="large-6 small-12 medium-12 columns">
						<p id="tekst">Pravne savjete studenti mogu dobiti u <b><u><a href="http://www.efos.unios.hr/pravno-ekonomska-klinika/o-nama/">Pravno ekonomskoj klinici</a></u></b> gdje će dobiti sve relevantne informacije o potencijalnim zamkama koje ih čekaju te odgovore na pitanja kao što su: Može li redoviti student biti direktor tvrtke, vlasnik tvrtke, itd.</p>
					</div>
					<div class="large-12 small-12 medium-12 columns">
						<p id="tekst" style="text-align:left">Dodatni korisni linkovi:</p>
						<ul style="text-align:center;" id="tekst">
							<li style="text-align:left;"><b><u><a href="http://www.hup.hr/EasyEdit/UserFiles/Osijek/Publikacija_Osmislite svoju ideju.pdf">Hrvatska udruga poslodavaca - Osmislite svoju ideju</a></u></b></li>
							<li style="text-align:left;"><b><u><a href="http://www.mspi.hr/mreza-studentskih-poduzetnickih-inkubatora/">Mreža studentskih poduzetničkih inkubatora</a></u></b></li>
						</ul>
					</div>
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

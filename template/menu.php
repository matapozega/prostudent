<?php
$json = file_get_contents('menu.json', FILE_USE_INCLUDE_PATH);
$json = str_replace("/PUTANJA/", $putanjaAPP, $json);
$i = json_decode($json);
 ?>
	<div class="menu-centered">
		<ul class="menu" style="font-size: 1em;">
			<?php 
			foreach ($i as $lista) : ?>
			<li <?php
			if ($_SERVER["PHP_SELF"] == $lista -> href) :?>
				class="aktivno"
			<?php endif;
				?>>
			<a href="<?php echo $lista -> href; ?>"><span><?php echo $lista->naslov  ?></span></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
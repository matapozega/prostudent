<?php
$json = file_get_contents('menu.json', FILE_USE_INCLUDE_PATH);
$json = str_replace("/PUTANJA/", $putanjaAPP, $json);
$i = json_decode($json);
 ?>
	<div class="title-bar" data-responsive-toggle="header-menu" data-hide-for="medium">
		<button class="menu-icon" type="button" data-toggle="example-menu"></button>
	</div>
	
	<div class="top-bar" id="header-menu">
		<div class="menu-centered">
			<ul class="dropdown vertical medium-horizontal menu" data-dropdown-menu style="font-size: 1em;">
				<?php 
				foreach ($i as $lista) : ?>
				<li <?php
				if ($_SERVER["PHP_SELF"] == $lista -> href) :?>
					class="aktivno"
				<?php endif;
					?>>
				<a class="underline" id="<?php echo $lista -> id; ?>" href="<?php echo $lista -> href; ?>"><span><?php echo $lista->naslov  ?></span></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
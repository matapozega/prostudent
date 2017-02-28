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

		<div class="row extended">
			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				<ul class="orbit-container">
					<li class="orbit-slide">
						<div>
							 <img class="orbit-image" src="<?php echo $putanjaAPP; ?>img/Tera_logo_63.png" alt="Space">
							<h3 class="text-center">2: You can also throw some text in here!</h3>
							<p class="text-center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.
							</p>
							<h3 class="text-center">This Orbit slider does not use animations.</h3>
						</div>
					</li>
				</ul>
				<nav class="orbit-bullets">
					<button class="is-active" data-slide="0">
						<span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span>
					</button>
					<button data-slide="1">
						<span class="show-for-sr">Second slide details.</span>
					</button>
					<button data-slide="2">
						<span class="show-for-sr">Third slide details.</span>
					</button>
					<button data-slide="3">
						<span class="show-for-sr">Fourth slide details.</span>
					</button>
				</nav>
			</div>
		</div>
	
		<?php include_once 'template/footer.php' ?>
		<?php
		include_once 'template/script.php';
		?>
	</body>
</html>

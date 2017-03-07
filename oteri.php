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
		
		<div class="row column large-12 medium-centered">
  <ul class="tabs text-center" data-tabs id="example-tabs">
    <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">O Biosu</a></li>
    <li class="tabs-title"><a href="#panel2">O Teri</a></li>
  </ul>
  <div class="tabs-content" data-tabs-content="example-tabs">
    <div class="tabs-panel is-active" id="panel1">
     	<iframe src="http://inkubator.hr/hr_HR/o-nama" width="100%" height="500px"></iframe>
    </div>
    <div class="tabs-panel" id="panel2">
    	<iframe src="http://web.tera.hr/" width="100%" height="500px"></iframe>
    </div>
  </div>
</div>
		<?php include_once 'template/footer.php' ?>
		<?php
	include_once 'template/script.php';
		?>
	</body>
</html>

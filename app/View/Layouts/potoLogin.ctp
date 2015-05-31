<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<?php
		echo $this->Html->css(
			array(
				'/poto/vendor/bootstrap/css/bootstrap.css',
				'/poto/vendor/font-awesome/css/font-awesome.css',
				'/poto/vendor/magnific-popup/magnific-popup.css',
				'/poto/vendor/bootstrap-datepicker/css/datepicker3.css'
			)
		);
		?>

		<!-- Theme CSS -->
		<?php
		echo $this->Html->css(
			array(
				'/poto/stylesheets/theme.css'
			)
		);
		?>

		<!-- Skin CSS -->
		<?php
		echo $this->Html->css(
			array(
				'/poto/stylesheets/skins/default.css'
			)
		);
		?>

		<!-- Theme Custom CSS -->
		<?php
		echo $this->Html->css(
			array(
				'/poto/stylesheets/theme-custom.css'
			)
		);
		?>

		<!-- Head Libs -->
		<?php
		echo $this->Html->script(
			array(
				'/poto/vendor/modernizr/modernizr.js'
			)
		);
		?>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<?php echo $this->fetch('content'); ?>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<?php
		echo $this->Html->script(
			array(
				'/poto/vendor/jquery/jquery.js',
				'/poto/vendor/jquery-browser-mobile/jquery.browser.mobile.js',
				'/poto/vendor/bootstrap/js/bootstrap.js',
				'/poto/vendor/nanoscroller/nanoscroller.js',
				'/poto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js',
				'/poto/vendor/magnific-popup/magnific-popup.js',
				'/poto/vendor/jquery-placeholder/jquery.placeholder.js'
			)
		);
		?>
			
		<!-- Theme Base, Components and Settings -->
		<?php
		echo $this->Html->script(
			array(
				'/poto/javascripts/theme.js'
			)
		);
		?>
		
		<!-- Theme Custom -->
		<?php
		echo $this->Html->script(
			array(
				'/poto/javascripts/theme.custom.js'
			)
		);
		?>
		
		<!-- Theme Initialization Files -->
		<?php
		echo $this->Html->script(
			array(
				'/poto/javascripts/theme.init.js'
			)
		);
		?>

	</body>
</html>
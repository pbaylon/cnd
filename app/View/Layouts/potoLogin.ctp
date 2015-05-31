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
				<a href="/" class="logo pull-left">
					<img src="/poto/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form action="index.html" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="pages-recover-password.html" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="pwd" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
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
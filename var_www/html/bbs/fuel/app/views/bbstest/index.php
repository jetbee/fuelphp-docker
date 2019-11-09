<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Framework</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		#logo{
			display: block;
			width: 179px;
			height: 45px;
			position: relative;
			top: 15px;
		}
		header{
			height: 75px;
			width: 100%;
			margin-bottom: 40px;
		}
		a{
			color: #883ced;
		}
		a:hover{
			color: #af4cf0;
		}
		body { margin: 0px 0px 40px 0px; }
	</style>
</head>
<body>
	<header>
		<div class="container">
			BBS TEST
		</div>
	</header>
	<div class="container">
		<div class="jumbotron">
			<h1>BBS TEST!</h1>
			<p>BBS TEST DAYO!</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h2>Get Started</h2>
				<p>The controller generating this page is found at <code>APPPATH/classes/controller/welcome.php</code>.</p>
			</div>
			<div class="col-md-4">
				<h2>Contribute</h2>
				<p>FuelPHP wouldn't exist without awesome contributions from the community.  Use the links below to get contributing.</p>
				<ul>
					<li><a href="https://docs.fuelphp.com/general/coding_standards.html">Coding Standards</a></li>
					<li><a href="https://github.com/fuel/fuel">GitHub Respository</a></li>
					<li><a href="https://fuelphp.com/contribute/issue-tracker">Issue Tracker</a></li>
				</ul>
			</div>
		</div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="https://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo Fuel::VERSION; ?></small>
			</p>
		</footer>
	</div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: Testing &amp; Breaking Stuff</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Laravel</h1>
			<h2>Playground</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<div role="main" class="main">
			<div class="home">
<h2>Testing Various Functionality &mdash; <?php echo HTML::link('/test', "View this Secion"); ?></h2>
<h2>Testing the Delicious API &mdash; <?php echo HTML::link('/delicious', "View this Section"); ?></h2>
			</div>
		</div>
	</div>

<?php echo $footer; ?>

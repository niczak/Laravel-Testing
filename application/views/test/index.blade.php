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
<h2>Controller Data</h2>
<?php print_r($data); ?>
<h2>Eloquent ORM</h2>
<?php var_dump($database); ?>
<h2>Delicious API</h2>
<?php var_dump($bookmarks); ?>
<h2>String Functions</h2>
<?php echo Str::random(32); ?>
			</div>
		</div>
	</div>
<?php echo $footer; ?>
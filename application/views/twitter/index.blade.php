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
<h2>Testing Twitter API</h2>
<?php  
// echo "<pre>";
// var_dump($tweets->results);
// echo "</pre>";

foreach($tweets->results as $tweet) {
	printf("<div class=\"tweet\"><img src=\"%s\" />%s</div>\n", 
		$tweet->profile_image_url, $tweet->text);
}


?>
			</div>
		</div>
	</div>
<?php echo $footer; ?>

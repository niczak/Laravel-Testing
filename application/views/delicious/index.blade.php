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
<h2>Testing Delicious API - Last 5 Bookmarks</h2>
<?php  
foreach($bookmarks as $bookmark) {
	printf("<a href=\"%s\">%s</a> -> Tags: %s<br />\n",
		$bookmark->u, substr($bookmark->d, 0, 35), implode(",", $bookmark->t));
}
?>
			</div>
		</div>
	</div>
<?php echo $footer; ?>

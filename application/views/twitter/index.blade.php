<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: Testing &amp; Breaking Stuff</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".tweetbody").each(function() {
			var tweet = replaceURLWithHTMLLinks($(this).html());
			$(this).html(tweet);
		});
	});
	
	function replaceURLWithHTMLLinks(text) {
	    var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
	    return text.replace(exp,"<a href='$1' target=\"_blank\">$1</a>"); 
	}
	</script>
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
foreach($tweets->results as $tweet) {
	printf("<div class=\"tweet\"><a href=\"http://twitter.com/%s\" target=\"_blank\"><img src=\"%s\" /></a><span class=\"tweetbody\">%s</span></div>\n", 
		$tweet->from_user, $tweet->profile_image_url, $tweet->text);
}

echo "<pre>";
var_dump($tweets->results);
echo "</pre>";

?>
			</div>
		</div>
	</div>
<?php echo $footer; ?>

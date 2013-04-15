<?php echo $header; ?>

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

<?php echo $footer; ?>

<?php echo $header; ?>

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

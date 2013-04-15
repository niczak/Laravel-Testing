<?php echo $header; ?>

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
<script src="timezone.js"></script>
<h1>Timezone</h1>
<?php
	require_once('Timezone.php');
	$zone=\infrajs\timezone\Timezone::detect();
	if ($zone) {
		echo $zone;
	} else {
		echo 'Временная зона неопределена. Вероятней всего это первое посещение страницы. И страницу нужно обновить.';
	}
?>
<p>GitHub <a href="https://github.com/infrajs/timezone">infrajs/timezone</a></p>
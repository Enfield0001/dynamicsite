<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Site: <?= $page->title() ?></title>
	<?= css('assets/css/main.php') ?>
</head>
<body>
	<h1><?= $page->title() ?></h1>
	<?php snippet('test') ?>
</body>
</html>
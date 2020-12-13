<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php if($page->isHomePage()): ?>
	<title><?= html($site->title()) ?></title>
	<?php else: ?>
	<title><?= html($site->title() . ': ' . $page->title()) ?></title>
	<?php endif ?>

	<?php if($page->description()->isNotEmpty()): ?>
	<meta name="description" content="<?= $page->description() ?>"/>
	<?php else: ?>
	<meta name="description" content="<?= $site->description() ?>"/>
	<?php endif ?>

	<!-- "Author" in this context considers the creator of the site code. Please refer to the inner content author if referencing site content rather than raw code. -->
	<meta name="Author" content=<?= html($site->author()) ?>/>


	<?php
		$maincss = asset('assets/css/main.css')->url();
		$mainjs = asset('assets/scripts/main.js')->url();

		$expandsvg = asset('assets/images/expand.svg')->url();
		$logo_whitesvg = asset('assets/images/logo_white.svg')->url();
		$logotype_nooutlinesvg = asset('assets/images/logotype_nooutline.svg')->url();

		$standardsplash = asset('assets/images/splash1200px.jpg')->url();
	?>


	<link rel="preload" href="<?= $maincss ?>" as="style">
	<link rel="preload" href="<?= $mainjs ?>" as="script">

	<link rel="preload" href="<?= $expandsvg ?>" as="image">
	<link rel="preload" href="<?= $logo_whitesvg ?>" as="image">
	<link rel="preload" href="<?= $logotype_nooutlinesvg ?>" as="image">

	<?php if($page->isHomePage()): ?>
	<link rel="preload" href="<?= $standardsplash ?>" as="image">
	<?php endif ?>

	<link rel="stylesheet" type="text/css" href="<?= $maincss ?>">

	<?php if($page->private()->toBool($default = false)): ?>
	<meta name="robots" content="noindex">
	<?php endif ?>
</head>
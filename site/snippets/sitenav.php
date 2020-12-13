<?php
$expandsvg = asset('assets/images/expand.svg')->url();
$logo_whitesvg = asset('assets/images/logo_white.svg')->url();
$logotype_nooutlinesvg = asset('assets/images/logotype_nooutline.svg')->url();
?>

<body id="pg<?= $page->css_ref() ?>">
<div class="flank left">
	<div class="halftone left"></div>
</div>
<div id="interior">
<div id="barkit" class="menumodifier">
	<header>
		<div id="menutoggler">
			<img class="menumodifier" src="<?= $expandsvg ?>" alt="">
		</div>
		<img class="menumodifier" src="<?= $logo_whitesvg ?>" alt="">
		<img class="menumodifier" src="<?= $logotype_nooutlinesvg ?>" alt="">
	</header>
	<nav class="menumodifier">
		<ul>
			<?php foreach($site->children()->listed() as $firstlvlitem): ?>
				<?php if($firstlvlitem->cssref() == "works"): ?>
					<!-- Plus 2 to include the topmost "Works" button first. Plus 1 to refer to the rest of the buttons. -->
					<?php
						$workspos = $firstlvlitem->num();
						$worksarray = $firstlvlitem->nums();
						$workssum = count($firstlvlitem->children());
						$worksend = $workspos + $workssum;
					?>
					<li class="<?= $firstlvlitem->cssref() ?>" style="grid-row: <?= $workspos ?> / <?= $worksend + 2 ?>;">
						<a href="<?= $firstlvlitem->url() ?>"><?= $firstlvlitem->title() ?></a><ul style="grid-row: 2 / <?= $workssum + 1 ?>;">
							<?php foreach($firstlvlitem->children() as $seclvlitem): ?>
								<li class="<?= $seclvlitem->cssref() ?>">
									<a href="<?= $seclvlitem->url() ?>"><span>Done in</span> <br>
										<?= $seclvlitem->title() ?></a>
								</li>
							<?php endforeach ?>
						</ul>
					</li>
				<?php else: ?>
					<li class="<?= $firstlvlitem->cssref() ?>"><a href="<?= $firstlvlitem->url() ?>"><?= $firstlvlitem->title() ?></a></li>
				<?php endif ?>
			<?php endforeach ?>
		</ul>
		<div>
			<p markdown="1"><?= $site->legal()->kirbytext() ?></p>
		</div>
	</nav>
</div>
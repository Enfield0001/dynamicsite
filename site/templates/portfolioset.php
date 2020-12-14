<?php 
$mainjs = asset('assets/scripts/main.js')->url();
?>

<?= snippet('sitehead') ?>
<?= snippet('sitenav') ?>

<main>
	<div class="maininterior">
		<h2><?= html($page->title()) ?></h2>
		<article>
			<img
				<?php $bodyimg = $page->bodyimg()->toFile() ?>
				src="<?= $bodyimg->url() ?>"
				class="doodle"
				style="
					shape-outside: url('<?= $bodyimg->url() ?>');
					<?php if($bodyimg->shape_margin()->isNotEmpty()): ?>
						shape-margin: <?= $bodyimg->shape_margin() ?>rem;
					<? endif ?>"
				alt="">
			<?= $page->bodycopy()->kirbytext() ?>
		</article>
	</div>
</main>

<!-- To end the sitenav maininterior -->
</div>
<div class="flank right">
	<div class="halftone right"></div>
</div>
<script src="<?= $mainjs ?>"></script>
</body>
</html>
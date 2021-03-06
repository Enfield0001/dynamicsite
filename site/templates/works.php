<?php 
$mainjs = asset('assets/scripts/main.js')->url();
?>

<?= snippet('sitehead') ?>
<?= snippet('sitenav') ?>

<main>
	<div class="maininterior">
		<h2><?= html($page->copyhead()) ?></h2>
		<article>
			<img
				src="<?= $page->images()->first()->url() ?>"
				class="doodle"
				style="
					shape-outside: url('<?= $page->images()->first()->url() ?>');
					<?php if($page->images()->first()->shape_margin()->isNotEmpty()): ?>
						shape-margin: <?= $page->images()->first()->shape_margin() ?>rem;
					<? endif ?>"
				alt="">
			<?= $page->bodycopy()->kirbytext() ?>
		</article>
		<div class="worksgrid">
			<?php foreach($page->children()->listed() as $category): ?>
				<a href="<?= $category->url() ?>" style="
					background-image: url('<?= $category->buttonimg()->toFile()->url() ?>');
				">
					Done in <br>
					<strong><?= $category->title() ?></strong>
				</a>
			<?php endforeach ?>
		</div>
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
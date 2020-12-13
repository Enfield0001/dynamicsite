<?php 
$mainjs = asset('scripts/main.js')->url();
?>

<?= snippet('sitehead') ?>
<?= snippet('sitenav') ?>

<main>
	<div class="maininterior">
		<h2><?= html($page->copyhead()) ?></h2>
		<article>
			<p><?= html($page->bodycopy()) ?></p>
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
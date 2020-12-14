<?php 
$mainjs = asset('assets/scripts/main.js')->url();
?>

<?= snippet('sitehead') ?>
<?= snippet('sitenav') ?>

<main>
	<?= $page->bodycopy()->kirbytext() ?>
</main>

<!-- To end the sitenav maininterior -->
</div>
<div class="flank right">
	<div class="halftone right"></div>
</div>

<div class="legalwrap legalmodifier">
	<div class="spacer"></div>
	<div class="mobilelegal legalmodifier">
		<div id="legaltoggler">
			<img class="legalmodifier" src="<?= asset('assets/images/expand.svg')->url() ?>" alt=""> Legal information
		</div>
		<div>
			<?= $site->legal()->kirbytext() ?>
		</div>
	</div>
</div>
<script src="<?= $mainjs ?>"></script>
</body>
</html>
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
		<div class="worksgrid portfolio">
			<?php foreach($page->children()->listed()->sortBy($field = 'completiondate', $direction = 'desc') as $piece): ?>
				<?php if($piece->file('rclmexception.png')): ?>
					<?php $herothumb = $piece->file('rclmexception.png')->url() ?>
				<?php else: ?>
					<?php $herothumb = $piece->heroimg()->
					toFile()->
					thumb([
						'width'   => 800,
						'height'  => 400,
						'quality' => 100
					])->url();?>
				<?php endif ?>
				<?php if($piece->file('enfieldhero.jpg')):
					$buttonalign = 'background-position: initial;' ?>
				<?php else: 
					$buttonalign = 'background-position: center;' ?>
				<?php endif ?>
				<a href="<?= $piece->url() ?>" style="
					background-image: url('<?= $herothumb ?>');
					<?= $buttonalign ?>
				">
					<div>
						<div><?= $piece->completiondate()->toDate('Y') ?></div>
						<div>
							<h3><?= $piece->title() ?></h3>
							<p><?= $piece->synopsis() ?></p>
						</div>
					</div>
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
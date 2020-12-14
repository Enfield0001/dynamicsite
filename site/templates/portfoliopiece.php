<?php 
$mainjs = asset('assets/scripts/main.js')->url();
?>

<?= snippet('sitehead') ?>
<?= snippet('sitenav') ?>

<main>
	<div class="hero" style="
		background-image: url('<?= $page->heroimg()->toFile()->url() ?>');
	">
		<div>
			<div class="herotext">
				<p><?= $page->completiondate()->toDate('F Y') ?></p>
				<h2><?= $page->title() ?></h2>
			</div>
			<div class="halftone right"></div>
		</div>
		<div>
			<div class="herotext">
				<p><strong>The prompt:</strong> <?= $page->theprompt() ?></p>
				<p><strong>The product:</strong> <?= $page->theproduct() ?></p>
			</div>
			<div class="halftone right"></div>
		</div>
	</div>
	<div class="maininterior">
		<h3>Project statistics</h3>
		<ul class="statisticshead">
			<li><strong>Timeframe:</strong> <?= $page->approxtimeframe() ?></li>
			<li><strong>General role:</strong> <?= $page->genrole() ?></li>
			<?php if($page->projectclient()->isNotEmpty()): ?>
			<li><strong>Client:</strong> <?= $page->projectclient() ?></li>
			<?php endif ?>
			<?php if($page->projectemployer()->isNotEmpty()): ?>
			<li><strong>Employer:</strong> <?= $page->projectemployer() ?></li>
			<?php endif ?>
		</ul>
		<div class="statisticsbody">
			<div>
				<h4>Software utilized</h4>
				<?php if($page->software1tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software1icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software1dsc()->kirbytext() ?>
					</div>
				</div>
				<?php else: ?>
				<?php endif ?>
				<?php if($page->software2tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software2icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software2dsc()->kirbytext() ?>
					</div>
				</div>
				<?php endif ?>
				<?php if($page->software3tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software3icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software3dsc()->kirbytext() ?>
					</div>
				</div>
				<?php endif ?>
				<?php if($page->software4tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software4icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software4dsc()->kirbytext() ?>
					</div>
				</div>
				<?php endif ?>
				<?php if($page->software5tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software5icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software5dsc()->kirbytext() ?>
					</div>
				</div>
				<?php endif ?>
				<?php if($page->software6tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software6icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software6dsc()->kirbytext() ?>
					</div>
				</div>
				<?php endif ?>
				<?php if($page->software7tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software7icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software7dsc()->kirbytext() ?>
					</div>
				</div>
				<?php endif ?>
				<?php if($page->software8tgl()->toBool() === true): ?>
				<div class="software">
					<img src="<?= asset('assets/images/apps/'.$page->software8icn().'.png')->url() ?>" alt="">
					<div>
						<?= $page->software8dsc()->kirbytext() ?>
					</div>
				</div>
				<?php endif ?>
				<?php if($page->miscsoftware()->isNotEmpty()): ?>
				<div class="honorablemention">
					<h5>Miscellaneous specialty programs/services</h5>
					<?= $page->miscsoftware()->kirbytext() ?>
				</div>
				<?php endif ?>
			</div>
			<div>
				<h4>Skillsets emphasized</h4>
				<?= $page->skillsets()->kirbytext() ?>
			</div>
		</div>
		<div class="separator">
			<img src="<?= asset('assets/images/logobadge.png')->url() ?>" alt="">
			<div class="sepline">
				<div class="halftone left"></div>
				<div></div>
				<div class="halftone right"></div>
			</div>
		</div>
		<article>
		<?= $page->portfolioarticle()->kirbytext() ?>
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
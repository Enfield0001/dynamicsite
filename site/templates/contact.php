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
					shape-margin: <?= $page->images()->first()->shape_margin() ?>rem;"
				alt="<?= $page->images()->first()->alt() ?>">
			<?= $page->bodycopy()->kirbytext() ?>
		</article>
		<div>
			<?= $page->contactcopy()->kirbytext() ?>
			<form action="<?= asset('assets/scripts/form.php')?>" method="post">
				<fieldset>
					<legend>= Required</legend>
					<li>
						<label for="name" class="required">Full Name</label>
						<input type="text" name="name" placeholder="eg. John Doe" required />
					</li>
					<li>
						<label for="email" class="required">Email</label>
						<input type="email" name="email" placeholder="eg. john@doemail.com" required />
					</li>
					<li>
						<label for="formsubject">Subject</label>
						<input type="text" name="formsubject"/>
					</li>
					<li>
						<label for="message" class="required">Message</label>
						<textarea name="message" placeholder="Tell me whatcha thinkin about"></textarea>
					</li>
			
					<li>
						<input type="submit" name="submitted" />
					</li>
				</fieldset>
			</form>
		</div>
		<div>
		<?= $page->emailcopy()->kirbytext() ?>
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
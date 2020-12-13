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
			<li class="home"><a href="../index.html">Home</a></li>
			<li class="works" style="grid-row: 2 / 6;">
				<a href="../works/">Works</a><ul style="grid-row: 2 / 5;">
					<li class="passion">
						<a href="../works/passion/"><span>Done in</span> <br>
							Passion</a>
					</li>
					<li class="academics">
						<a href="../works/academics/"><span>Done in</span> <br>
							Academics</a>
					</li>
					<li class="business">
						<a href="../works/business/"><span>Done in</span> <br>
							Business</a>
					</li>
				</ul></li>
			<li class="about"><a href="index.html">About</a></li>
			<li class="contact"><a href="../contact/">Contact</a></li>
		</ul>
		<div>
			<p>&copy; 2020 Paul Edmiston.<br>
			All rights reserved.</p>
			<p>The Roundel and Logotype are trademarks of Paul Edmiston that really ought to be registered.</p>
		</div>
	</nav>
</div>
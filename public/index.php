<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="A JavaScript tetris experiment" />

	<title>a JavaScript Tetris experiment</title>

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/themes/ui-darkness/jquery-ui.css" />
	<link rel="stylesheet" href="/css/front.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
	<script src="/js/front/compiled.js"></script>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="main-container">
		<hgroup>
			<h1>a JavaScript tetris experiment</h1>
			<h2>©2013 Miloš Levačić</h2>
		</hgroup>

		<button id="tetris-pause">Pause</button>
		<button id="tetris-continue">Continue</button>

		<div id="tetris-main-container">
			<div id="tetris-container">
				<?php for ( $i = 0; $i < 20; $i++ ) : ?>
					<div class="tetris-row" data-row="<?php echo $i; ?>">
						<?php for ( $j = 0; $j < 10; $j++ ) : ?>
							<div class="tetris-cell" data-row="<?php echo $i; ?>" data-column="<?php echo $j; ?>">
							</div>
						<?php endfor; ?>
					</div>
				<?php endfor; ?>
			</div>
			<div id="tetris-overlay">
				<p id="tetris-message">PAUSED</p>
			</div>
			<aside id="tetris-sidebar">
				<section id="tetris-sidebar-next-block">
					<h1>NEXT BLOCK</h1>
					<div id="tetris-next-block-container">
						<?php for ( $i = 0; $i < 4; $i++ ) : ?>
							<div class="tetris-row" data-row="<?php echo $i; ?>">
								<?php for ( $j = 0; $j < 4; $j++ ) : ?>
									<div class="tetris-cell" data-row="<?php echo $i; ?>" data-column="<?php echo $j; ?>">
									</div>
								<?php endfor; ?>
							</div>
						<?php endfor; ?>
					</div>
				</section>
				<section id="tetris-sidebar-score">
					<h1>SCORE</h1>
					<p id="tetris-current-score">0000000000</p>
				</section>
			</aside>
		</div>
	</div>
</body>
</html>
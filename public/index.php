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
	</div>
</body>
</html>
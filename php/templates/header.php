<!DOCTYPE >
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>oNews</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="wrapper">

		<!-- emmet: header>h1+p+nav>ul>li*3>a -->
		<header class="left <?= (isset($isContact) && $isContact === true) ? 'left--contact' : ''; ?>">
			<h1 class="left__title">O'Clock Students News</h1>
			<div class="left__paragraph">

				<?php if(isset($isContact) && $isContact === true ): ?>

					<h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> contact us</h2>

				<?php else : ?>

					<h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>

				<?php endif; ?>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
				</p>
			</div>
			<nav>
				<ul class="left__nav">
					<?php include 'nav.php'; ?>
				</ul>
			</nav>
		</header>

		<main class="right">
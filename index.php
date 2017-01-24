<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php
	require __DIR__ . '/vendor/autoload.php';
	use League\Csv\Reader;
	$csv = Reader::createFromPath(__DIR__ . '/cs_figures.csv');
	// Retire la première ligne du csv et garde le reste
	$figures = $csv->setOffset(1)->fetchAll();
	?>
	
	<div class="container">
		<h1>Computer science figures</h1>

		<div class="ui three column grid">

			<?php foreach ($figures as $figure) : ?>
				<div class="ui column">
					<div class="ui link cards">
						<div class="card">
							<div class="image">
								<img src="<?= $figure[5] ?>">
							</div>
							<div class="content">
								<div class="header"><?= $figure[0] ?></div>
								<div class="meta">
									<a href="<?= $figure[4] ?>"><?= $figure[2] ?></a>
								</div>
								<div class="description">
									<?= $figure[3] ?>
								</div>
							</div>
							<div class="extra content">
								<span class="right floated">
									Born in <?= $figure[1] ?>
								</span>
							</div>
						</div>
					</div>
				</div>

			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>
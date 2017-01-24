<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<?php
	require __DIR__ . '/vendor/autoload.php';
	use League\Csv\Reader;
	$csv = Reader::createFromPath(__DIR__ . '/cs_figures.csv');
	// Retire la première ligne du csv et garde le reste
	$data = $csv->setOffset(1)->fetchAll();
	?>

	<h1>Computer science figures</h1>

	<?php foreach ($data as $row) : ?>

		<div class="ui link cards">
			<div class="card">
				<div class="image">
					<img src="/images/avatar2/large/matthew.png">
				</div>
				<div class="content">
					<div class="header"><?= $row[0] ?></div>
					<div class="meta">
						<a>Friends</a>
					</div>
					<div class="description">
						Matthew is an interior designer living in New York.
					</div>
				</div>
				<div class="extra content">
					<span class="right floated">
						Joined in 2013
					</span>
				</div>
			</div>
		</div>
	
	<?php endforeach; ?>

</body>
</html>
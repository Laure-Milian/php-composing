<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

hello

<?php
require __DIR__ . '/vendor/autoload.php';

use League\Csv\Reader;
$csv = Reader::createFromPath(__DIR__ . '/cs_figures.csv');

?>

<div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="/images/avatar2/large/matthew.png">
    </div>
    <div class="content">
      <div class="header">Matt Giampietro</div>
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


//We are going to insert some data into the users table

$csv = Reader::createFromPath('/path/to/your/csv/file.csv');
$csv->setOffset(1); //because we don't want to insert the header
$nbInsert = $csv->each(function ($row) use (&$sth) {
	//Do not forget to validate your data before inserting it in your database
	$sth->bindValue(':firstname', $row[0], PDO::PARAM_STR);
	$sth->bindValue(':lastname', $row[1], PDO::PARAM_STR);
	$sth->bindValue(':email', $row[2], PDO::PARAM_STR);

	return $sth->execute(); //if the function return false then the iteration will stop
}); ?>

<?php 

/*use League\Csv\Reader;


$header = $csv->fetchOne();
var_dump($header);

$res = $csv->setOffset(1)->setLimit(10)->fetchAll();
var_dump($res);
*/
?>
<?php

/*use League\Csv\Reader;

$csv = Reader::createFromPath('/path/to/your/csv/file.csv');

//get the first row, usually the CSV header
$headers = $csv->fetchOne();

//get 25 rows starting from the 11th row
$res = $csv->setOffset(10)->setLimit(25)->fetchAll();*/
?>

</body>
</html>
<?php
	include('config.php');
	$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Ιστορίες Χρήσης" για την <?php echo $cityname; ?> - Πληροφορίες</title>
	</head>
	<body>
			<h1>Πληροφορίες</h1>
			<p></p>
	</body>
</html>
<?php
	include('config.php');
	$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Ιστορίες Χρήσης" για την <?php echo $cityname; ?></title>
	<style>
		.highlight {
			background-color: #eee;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>"Ιστορίες Χρήσης" για την <?php echo $cityname; ?></h1>
	<form method="post" action="exportcsv.php" target="_self">
        <input type="submit" value="Εξαγωγή σε CSV"/>
    </form>
	<form method="POST" action="submit.php"  target="_self">
		<h2><label for="text">Ως...</label></h2>
		<input type="text" id="asa" name="asa" required><br>
		<p><i>(<u>Οδηγίες συμπλήρωσης</u>: εδώ περιγράφεται ο ρόλος - π.χ. ως δημότης, ως οδηγός, ως πεζός, ως ΑΜΕΑ, κ.ο.κ. -)</i></p>
		<h2><label>θα ήθελα...</label></h2>
		<textarea id="iwant" name="iwant" rows="3" cols="50" required></textarea><br>
		<p><i>(<u>Οδηγίες συμπλήρωσης</u>: εδώ περιγράφεται το αίτημα - π.χ. θα ήθελα περισσότερα αστικά λεωφορεία, καλύτερη φροντίδα των δρόμων, κ.ο.κ. -)</i></p>
		<h2><label>ώστε...</label></h2>
		<textarea id="sothat" name="sothat" rows="3" cols="50" required></textarea><br>
		<p><i>(<u>Οδηγίες συμπλήρωσης</u>: εδώ περιγράφεται το αποτέλεσμα - π.χ. να μετακινούμαι ταχύτερα / ασφαλέστερα, να μην ταλαιπωρείται το αυτοκίνητό μου κ.ο.κ. -)</i></p>
		<input type="submit" value="ΑΠΟΣΤΟΛΗ"><br><br>
	</form>
	<hr>
	<h2>Τα αιτήματα*:</h2>
	<p><i>(* ταξινομημένα από το πιο πρόσφατο στο παλαιότερο)</i></p>
	<?php 
		$sql = mysqli_query($conn, "SELECT * from stories ORDER BY id DESC") or die (mysqli_error($conn));
		while ($result = mysqli_fetch_assoc($sql)) { 
	?>
	<div style="padding: 5px; width: 50%">
		<u>ΑΙΤΗΜΑ #<?php echo $result['id']; ?></u>:
		Ως <span class="highlight"><?php echo $result['asauser']; ?></span>
		θα ήθελα <span class="highlight"><?php echo $result['iwant']; ?></span>
		ώστε <span class="highlight"><?php echo $result['sothat']; ?></span><br>
	</div><br>
	<?php } ?>
</body>
</html>
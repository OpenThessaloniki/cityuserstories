<?php
	include('config.php');
    include('submit.php');
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset('utf8');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Ιστορίες Χρήσης" για την <?php echo $cityname; ?></title>
	<style>
		.highlight {
			background-color: #eee;
			font-weight: bold;
		}
	</style>
	<script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
       function onSubmit(token) {
         document.getElementById("theform").submit();
       }
    </script>
</head>
<body>
    <!-- Error messages -->
    <?php if(!empty($response)) {?>
    <div class="form-group col-12 text-center">
      <div class="alert text-center <?php echo $response['status']; ?>">
        <?php echo $response['message']; ?>
      </div>
    </div>
    <?php }?>
    
	<h1>"Ιστορίες Χρήσης" για την <?php echo $cityname; ?></h1>
	<form method="post" action="exportcsv.php" target="_self">
        <input type="submit" value="Εξαγωγή σε CSV"/>
    </form>
	
	<form id="theform" method="POST" action="submit.php" target="_self">
		<h2><label for="text">Ως...</label></h2>
		<input type="text" id="asa" name="asa" required><br>
		<p><i><span style="color:red">(υποχρεωτικό πεδίο)</span><br>(<u>Οδηγίες συμπλήρωσης</u>: εδώ περιγράφεται ο ρόλος - π.χ. ως δημότης, ως οδηγός, ως πεζός, ως ΑΜΕΑ, κ.ο.κ. -)</i></p>
		<h2><label>θα ήθελα...</label></h2>
		<textarea id="iwant" name="iwant" rows="3" cols="50" required></textarea><br>
		<p><i><span style="color:red">(υποχρεωτικό πεδίο)</span><br>(<u>Οδηγίες συμπλήρωσης</u>: εδώ περιγράφεται το αίτημα - π.χ. θα ήθελα περισσότερα αστικά λεωφορεία, καλύτερη φροντίδα των δρόμων, κ.ο.κ. -)</i></p>
		<h2><label>ώστε...</label></h2>
		<textarea id="sothat" name="sothat" rows="3" cols="50" required></textarea><br>
		<p><i><span style="color:red">(υποχρεωτικό πεδίο)</span><br>(<u>Οδηγίες συμπλήρωσης</u>: εδώ περιγράφεται το επιθυμητό αποτέλεσμα - π.χ. να μετακινούμαι ταχύτερα / ασφαλέστερα, να μην ταλαιπωρείται το αυτοκίνητό μου κ.ο.κ. -)</i></p>
		<button name="send" id="send" value="ΑΠΟΣΤΟΛΗ" class="g-recaptcha" 
        data-sitekey="6LdXkzEfAAAAAKDU2Xd-O54NjfZtPWEOt9EOlG4f" 
        data-callback='onSubmit' 
        data-action='submit'>ΑΠΟΣΤΟΛΗ</button><br><br>
	</form>
	<hr>
	<h2>Τα αιτήματα*:</h2>
	<p><i>(* ταξινομημένα από το πιο πρόσφατο στο παλαιότερο)</i></p>
	<?php 
		$sql = mysqli_query($conn, "SELECT * from stories ORDER BY id DESC") or die (mysqli_error($conn));
		while ($result = mysqli_fetch_assoc($sql)) {
		    if ($result[moderation] != "yes") {
	?>
	<div style="width:100%; padding: 5px;">
		[ <?php echo date("d/m/Y", strtotime($result[timestamp])); ?> ] <u><b>ΑΙΤΗΜΑ #<?php echo $result['id']; ?></b></u>:
		Ως <span class="highlight"><?php echo $result['asauser']; ?></span>
		θα ήθελα <span class="highlight"><?php echo $result['iwant']; ?></span>
		ώστε <span class="highlight"><?php echo $result['sothat']; ?></span><br>
	</div><br>
	<?php }
	    } ?>
</body>
</html>
<?php
include('config.php');
$conn = new mysqli($servername, $username, $password, $dbname);


header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=cityuserstories.csv');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
echo "\xEF\xBB\xBF"; // UTF-8 BOM
$output = fopen('php://output', 'w');
fputcsv($output, array('Α/Α', 'Ως...', 'θα ήθελα...', 'ώστε...'));

$sql = mysqli_query($conn, "SELECT * from stories ORDER BY id DESC") or die (mysqli_error($conn));
while ($result = mysqli_fetch_assoc($sql)) {
     fputcsv($output, $result);
}

fclose($output);
?>
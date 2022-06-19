<?php

include('config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset('utf8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST["asa"]) && isset($_POST["iwant"]) && isset($_POST["sothat"])) {
    if($_POST["asa"]!="" && $_POST["iwant"]!="" && $_POST["sothat"]!="") {
        $dt = new DateTime();
        $sql = "INSERT INTO stories (asauser, iwant, sothat, timestamp, moderation) VALUES ('" . $_POST["asa"] . "','" . $_POST["iwant"] . "','" . $_POST["sothat"] . "','" . $dt->format('Y-m-d H:i:s') . "','" . 'no' . "');";
        if ($conn->query($sql) === TRUE) {
            header('Location: ' . $home_dir);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        header('Location: ' . $home_dir);
    }
}
?>
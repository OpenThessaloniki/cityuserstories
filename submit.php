<?php

include('config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["asa"]) && isset($_POST["iwant"]) && isset($_POST["sothat"])) {
    $sql = "INSERT INTO stories (asauser, iwant, sothat) VALUES ('" . $_POST["asa"] . "','" . $_POST["iwant"] . "','" . $_POST["sothat"] . "');";
    if ($conn->query($sql) === TRUE) {
        header('Location: ' . $home_dir);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
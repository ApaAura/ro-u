<?php
include 'conexiune.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nume', $nume);
    $stmt->execute();

    header("Location: index.php");
}
?>

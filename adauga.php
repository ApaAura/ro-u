<?php
include 'conexiune.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume=$_POST["nume"];
    $autor=$_POST["autor"];
    $pagini=$_POST["pagini"];

    $sql = "INSERT INTO carti (nume, autor, pagini) VALUES (:nume, :autor, :pagini)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nume', $nume);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':pagini', $pagini);
    $stmt->execute();

    header("Location: index.php");
}
?>

<?php
include "db.php";

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (username, email) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>

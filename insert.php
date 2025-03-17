<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $sql = "INSERT INTO users (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>✅ บันทึกข้อมูลเรียบร้อยแล้ว!</p>";
        echo "<a href='index.php' class='btn'>📋 ดูรายการข้อมูล</a></div>";
    } else {
        echo "<div class='container'><p style='color: red;'>❌ เกิดข้อผิดพลาด: " . $conn->error . "</p></div>";
    }

    $conn->close();
}
?>

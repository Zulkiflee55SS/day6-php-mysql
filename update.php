<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $sql = "UPDATE users SET name='$name', email='$email', message='$message' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p> แก้ไขข้อมูลสำเร็จ!</p>";
        echo "<a href='index.php' class='btn'>📋 กลับหน้าหลัก</a></div>";
    } else {
        echo "<div class='container'><p style='color: red;'>❌ แก้ไขข้อมูลไม่สำเร็จ: " . $conn->error . "</p></div>";
    }

    $conn->close();
}
?>

<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'><p>✅ ลบข้อมูลเรียบร้อยแล้ว!</p>";
    } else {
        echo "<div class='container'><p style='color: red;'>❌ ลบข้อมูลไม่สำเร็จ: " . $conn->error . "</p></div>";
    }

    echo "<a href='index.php' class='btn'>📋 กลับหน้าหลัก</a></div>";
    $conn->close();
} else {
    echo "<div class='container'><p style='color: red;'>❌ ไม่พบข้อมูลที่ต้องการลบ!</p></div>";
}
?>

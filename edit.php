
<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "<div class='container'><p style='color: red;'>❌ ไม่พบข้อมูล</p></div>";
        exit();
    }
} else {
    echo "<div class='container'><p style='color: red;'>❌ ไม่พบ ID</p></div>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูล</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>✏ แก้ไขข้อมูล</h1>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <label for="name">ชื่อ:</label>
            <input type="text" name="name" id="name" value="<?= $row['name'] ?>" required>

            <label for="email">อีเมล:</label>
            <input type="email" name="email" id="email" value="<?= $row['email'] ?>" required>

            <label for="message">ข้อความ:</label>
            <textarea name="message" id="message" required><?= $row['message'] ?></textarea>

            <button type="submit">📥 บันทึกการแก้ไข</button>
        </form>

        <a href="index.php" class="btn back">⬅ ยกเลิก</a>
    </div>

</body>
</html>

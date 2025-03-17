<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มลงทะเบียน</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>📝 เพิ่มข้อมูลผู้ใช้</h1>

        <form action="insert.php" method="POST">
            <label for="name">ชื่อ:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">อีเมล:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">ข้อความ:</label>
            <textarea name="message" id="message" required></textarea>

            <button type="submit"> บันทึกข้อมูล</button>
        </form>

        <a href="index.php" class="btn back">⬅ กลับไปยังรายการ</a>
    </div>

</body>
</html>

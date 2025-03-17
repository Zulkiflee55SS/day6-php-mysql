<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการข้อมูล</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1> รายการข้อมูลผู้ใช้</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ชื่อ</th>
                    <th>อีเมล</th>
                    <th>ข้อความ</th>
                    <th>วันที่สร้าง</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['name']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['message']}</td>
                                <td>{$row['created_at']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>ไม่มีข้อมูล</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <a href="form.php" class="btn">➕ เพิ่มข้อมูล</a>
    </div>

</body>
</html>

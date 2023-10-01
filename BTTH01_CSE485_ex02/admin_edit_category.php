<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'btth01_cse485';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Không thể kết nối tới cơ sở dữ liệu: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ma_tloai = $_POST['ma_tloai'];
    $ten_tloai = $_POST['ten_tloai'];

    $sql = "UPDATE theloai SET ten_tloai = '$ten_tloai' WHERE ma_tloai = '$ma_tloai'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href = 'admin_edit_category.php';</script>";
    } else {
        echo 'Lỗi: ' . $sql . '<br>' . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
        main {
            text-align: center;
        }

        .header {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .input-group {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .input-group-text {
            font-weight: bolder;
            text-transform: uppercase;
        }

        .form-control {
            width: 70%;
        }

        .button_game {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .button_game :nth-child(1) {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <?php include 'header_admin_category.php'; ?>
    <main>
        <div class="container">
            <div class="header">
                <h2>sửa thông tin thể loại</h2>
            </div>
            <form action="admin_edit_category.php" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Mã thể loại</span>
                <input type="text" id="ma_tloai" name="ma_tloai" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Tên thể loại</span>
                <input type="text" id="ten_tloai" name="ten_tloai" required>
            </div>
            <div class="button_game">
            <button class="btn btn-success" type="submit">Lưu Lại</button>
                <a href="admin_category.php"><button class="btn btn-success" type="submit">Quay lại</button></a>
            </div>
            </form>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>
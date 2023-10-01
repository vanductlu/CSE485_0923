<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'btth01_cse485';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Không thể kết nối đến cơ sở dữ liệu: ' . $e->getMessage());
}

if (isset($_GET["delete_id"])) {
    $id = $_GET["delete_id"];

    $sql = "DELETE FROM theloai WHERE ma_tloai = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "<script>window.location.href = 'admin_delete_category.php';</script>";
    } else {
        echo "Lỗi: " . $stmt->errorInfo()[2];
    }
}

$sql = "SELECT * FROM theloai";
$result = $conn->query($sql);
$conn = null;
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
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        td i {
            color: rgb(95, 150, 215);
        }
    </style>
</head>

<body>
    <?php include 'header_admin_category.php'; ?>

    <div class="container">
        <div class="mb-3">
            <button type="button" class="btn btn-success">Thêm mới</button>
        </div>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col-md-1">#</th>
                    <th scope="col-md-1">Thêm thể loại</th>
                    <th scope="col-md-3">Sửa</th>
                    <th scope="col-md-3">Xóa</th>
                </tr>
            </thead>
            <?php
            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?= $row["ma_tloai"] ?></td>
                        <td><?= $row["ten_tloai"] ?></td>
                        <td><a href="admin_edit_category.php?edit_id=<?= $row["ma_tloai"] ?>"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="admin_category.php?delete_id=<?= $row["ma_tloai"] ?>" onclick="return confirmDelete()"><i class="bi bi-trash"></i></a></td>
                    </tr>
            <?php }
            }
            ?>
        </table>
    </div>
    <script>
        function confirmDelete() {
            return confirm("Bạn có chắc chắn muốn xóa thể loại này?");
        }
    </script>
    <?php include 'footer.php'; ?>
</body>

</html>
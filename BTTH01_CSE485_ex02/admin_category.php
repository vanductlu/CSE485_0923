<?php
$servername='localhost';
$username='root';
$password='';
$dbname='btth01_cse485';
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die ('cant connect'.$conn->connect_error);
}
$sql='SELECT * FROM theloai';
$result=$conn->query($sql);
$conn->close();

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
        td i
        {
            color:rgb(95, 150, 215);
        }
    </style>
</head>
<body>
    <?php include 'header_admin_category.php'; ?>
    
    <div class="container">
        <div class="mb-3">
            <a href="admin_add_category.php"><button type="button" class="btn btn-success">Thêm mới</button>
</a>
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
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){ ?>
                        <tr>                     
                        <td><?= $row["ma_tloai"] ?></td>
                        <td><?= $row["ten_tloai"]?></td>
                        <td><a href="admin_edit_category.php"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="admin_delete_category.php"><i class="bi bi-trash"></i></a></td>
                        </tr>

                <?php    }
                }
                ?> 
        </table>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
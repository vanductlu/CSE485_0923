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
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nhạc trữ tình</td>
                    <td><i class="bi bi-pencil-square"></i></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Nhà cách mạng</td>
                    <td><i class="bi bi-pencil-square"></i></td>
                    <td><i class="bi bi-trash"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <?php include 'footer.php'; ?>
</body>
</html>
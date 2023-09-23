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
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Mã thể loại</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Tên thể loại</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="button_game">
                <button type="button" class="btn btn-success">Lưu lại</button>
                <button type="button" class="btn btn-warning">Quay lại</button>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>

</html>
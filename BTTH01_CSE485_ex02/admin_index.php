<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Detail</title>
</head>
<style>
    .vertical-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            border: 1px solid rgba(128, 128, 128, 0.5);
            padding: 10px;
        }
    h3
    {
        color:rgb(95, 150, 215);
    }
</style>
<body>
    <?php 
    include 'header_admin.php';
    ?>
    <main>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="vertical-center">
                    <h3>Người dùng</h3>
                    <p>110</p>
                </div>
            </div>
            <div class="col">
                <div class="vertical-center">
                    <h3>Thể loại</h3>
                    <p>10</p>
                </div>
            </div>
            <div class="col">
                <div class="vertical-center">
                    <h3>Tác giả</h3>
                    <p>20</p>
                </div>
            </div>
            <div class="col">
                <div class="vertical-center">
                    <h3>Bài viết</h3>
                    <p>110</p>
                </div>
            </div>
        </div>
    </div>
</main>
    <?php 
    include 'footer.php';
    ?>
    
</body>
</html>
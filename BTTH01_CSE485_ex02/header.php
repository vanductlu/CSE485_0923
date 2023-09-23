<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        padding: 2rem;
      }
      .navbar-brand img
      {
        width: 200px;
      }
      .nav-item
      {
        font-size: 18px;
      }
      </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="./img/header.jpg" alt="Logo"></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Trang Chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Đăng Nhập</a>
          </li>
        </ul>
        <form class="form-inline">
          <input class="form-control" type="search" placeholder="Tìm kiếm" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm</button>
        </form>
      </div>
    </nav>
  </header>
</body>
</html>
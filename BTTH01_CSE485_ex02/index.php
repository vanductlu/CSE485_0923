<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chủ</title>
  <style>
    .slider-img {
      width: 100%;
    }

    .top-bai-hat {
      display: block;
      text-align: center;
      margin-top: 20px;
    }
    
    .card-title {
      margin-bottom: 20px;
    }
    .card-title img
    {
      width: 100%;
      height: 100%;
    }
    .card-body
    {
      padding: 0 !important;
    }
    .card-text
    {
      display: flex;
      justify-content: center;
      color: rgb(95, 150, 215);
    }
    h2
    {
      color: rgb(95, 150, 215);
    }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  
    <?php
    include 'header.php';
    ?>

  <main>
    <img class="slider-img" src="./img/slider.jpg" alt="Slider Image">

    <h2 class="top-bai-hat">Top bài hát yêu thích</h2>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <!-- <img src="image1.jpg" class="card-img-top" alt="Image 1"> -->
          <div class="card-body">
            <a href="detail.php">
            <h5 class="card-title"><img src="./img/music1.jpg" alt="Image 1"></h5>
            <p class="card-text">Cây, lá và gió</p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <!-- <img src="image2.jpg" class="card-img-top" alt="Image 2"> -->
          <div class="card-body">
            <h5 class="card-title"><img src="./img/music2.jpg" alt="Image 2"></h5>
            <p class="card-text">Cuộc sống mến thương</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <!-- <img src="image3.jpg" class="card-img-top" alt="Image 3"> -->
          <div class="card-body">
            <h5 class="card-title"><img src="./img/music3.jpg" alt="Image 3"></h5>
            <p class="card-text">Lòng mẹ</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <!-- <img src="image4.jpg" class="card-img-top" alt="Image 4"> -->
          <div class="card-body">
            <h5 class="card-title"><img src="./img/music4.jpg" alt="Image 4"></h5>
            <p class="card-text">Phôi pha</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <!-- <img src="image5.jpg" class="card-img-top" alt="Image 5"> -->
          <div class="card-body">
            <h5 class="card-title"><img src="./img/music5.jpg" alt="Image 5"></h5>
            <p class="card-text">Nơi tình yêu bắt đầu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

    <?php 
    include 'footer.php';
    ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
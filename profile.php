<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flexbook </title>
  <!-- Liên kết đến tệp CSS của Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Flexbook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bạn bè</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thông báo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tin nhắn</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Cover Photo -->
  <div class="container mt-4">
    <div class="card">
      <img class="card-img-top h-10" src="https://wallpaperaccess.com/full/337247.jpg" alt="Cover Photo">
      <div class="card-body">
        <h5 class="card-title">John</h5>
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae fuga incidunt consequatur tenetur doloremque officia corrupti provident tempore vitae labore?</p>
      </div>
    </div>
  </div>

  <!-- Profile Information -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Thông tin cá nhân</h5>
            <p class="card-text">Ngày sinh: Ngày/Tháng/Năm</p>
            <p class="card-text">Giới tính: Nam/Nữ</p>
            <p class="card-text">Địa chỉ: Địa chỉ của bạn</p>
            <p class="card-text">Số điện thoại: Số điện thoại của bạn</p>
            <p class="card-text">Email: Email của bạn</p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bài viết</h5>
            <p class="card-text">Nội dung bài viết thứ nhất</p>
            <p class="card-text">Nội dung bài viết thứ hai</p>
            <!-- Thêm các bài viết khác ở đây -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Liên kết đến tệp JavaScript của Bootstrap và jQuery (cần cho các phần tương tác) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

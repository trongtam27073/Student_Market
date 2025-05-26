<?php
if (session_status() == PHP_SESSION_NONE) session_start();

// Lấy tên file hiện tại (ví dụ: index.php)
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Chợ Sinh Viên</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Reset margin padding cho toàn trang */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    /* Body nền tối với background hình vân tay */
    body {
      background-color: #121212;
      background-image: url('assets/img/bg-sinhvien.png');
      background-repeat: repeat;
      background-attachment: fixed;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      overflow-x: hidden;
    }

    /* Navbar nền nâu đậm, chữ trắng */
    .navbar {
      background-color: #4B2E05;
      box-shadow: 0 4px 10px rgba(75, 46, 5, 0.8);
      font-weight: 600;
      font-size: 1.1rem;
    }

    /* Link trong navbar */
    .navbar .nav-link, .navbar-brand {
      color: #fff !important;
      transition: color 0.3s ease;
      display: flex;
      align-items: center;
    }

    /* Icon bên cạnh chữ Chợ Sinh Viên */
    .navbar-brand svg, .navbar-brand .icon {
      margin-right: 8px;
      width: 24px;
      height: 24px;
      fill: #FFD580;
    }

    /* Hiệu ứng hover vàng nhẹ */
    .navbar .nav-link:hover {
      color: #FFD580 !important;
      text-shadow: 0 0 8px #FFD580;
    }

    /* Menu đang active sẽ sáng màu vàng */
    .navbar .nav-link.active {
      color: #FFD580 !important;
      text-shadow: 0 0 10px #FFD580;
      font-weight: 700;
    }

    /* Nút primary custom */
    .btn-primary {
      background-color: #4B2E05;
      border-color: #4B2E05;
      font-weight: 600;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-primary:hover, .btn-primary:focus {
      background-color: #6E4519;
      border-color: #6E4519;
      box-shadow: 0 0 10px #FFD580;
    }

    /* Input, textarea, select nền tối, viền nâu */
    input, textarea, select {
      background-color: #222;
      color: #fff;
      border: 1px solid #4B2E05;
      transition: border-color 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    }

    /* Focus input */
    input:focus, textarea:focus, select:focus {
      border-color: #FFD580;
      background-color: #2A2A2A;
      box-shadow: 0 0 8px #FFD580;
      outline: none;
      color: #fff;
    }

    /* Container chính phủ toàn màn hình, nền mờ hơn */
    .container.mt-4 {
      background-color: rgba(43, 43, 43, 0.6);
      padding: 25px 30px;
      border-radius: 10px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.7);
      height: 100vh;        /* Chiều cao chính xác 100% màn hình */
      width: 100vw;
      max-width: 100vw;
      margin: 0;            /* Không để margin gây hở */
      box-sizing: border-box;
      overflow-y: auto;     /* Scroll nếu nội dung vượt */
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <!-- Icon giỏ hàng SVG -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon" aria-hidden="true" focusable="false">
        <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-13.43-2.5l1.393-8h14.834l-1.38 7.996c-.07.4-.397.7-.798.7H6.16a.75.75 0 0 1-.59-1.196zm1.512-9h14.965v2H5.746l-1.24-1.999z"/>
      </svg>
      Chợ Sinh Viên
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">Trang chủ</a>
        </li>
        <?php if (isset($_SESSION['user_id'])): ?>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'post_item.php') ? 'active' : '' ?>" href="post_item.php">Đăng bài</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Đăng xuất (<?= htmlspecialchars($_SESSION['user_name']) ?>)</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'login.php') ? 'active' : '' ?>" href="login.php">Đăng nhập</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page == 'register.php') ? 'active' : '' ?>" href="register.php">Đăng ký</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
<!-- Nội dung trang ở đây -->

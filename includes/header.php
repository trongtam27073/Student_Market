<?php
if (session_status() == PHP_SESSION_NONE) session_start();


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
  
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      display: flex;
  flex-direction: column;
    }

    
    body {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  padding-top: 35px;
  background-color: #121212;
  background-image: url('assets/img/bg-sinhvien.png');
  background-repeat: repeat;
  background-attachment: fixed;
  color: #fff;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  overflow-x: hidden;
}

   
    .navbar {
  background-color: #4B2E05;
  box-shadow: 0 4px 10px rgba(75, 46, 5, 0.8);
  font-weight: 600;
  font-size: 1.1rem;
  z-index: 10;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%; 
}


    
    .navbar .nav-link, .navbar-brand {
      color: #fff !important;
      transition: color 0.3s ease;
      display: flex;
      align-items: center;
    }

    
    .navbar-brand svg, .navbar-brand .icon {
      margin-right: 8px;
      width: 24px;
      height: 24px;
      fill: #FFD580;
    }

    
    .navbar .nav-link:hover {
      color: #FFD580 !important;
      text-shadow: 0 0 8px #FFD580;
    }

   
    .navbar .nav-link.active {
      color: #FFD580 !important;
      text-shadow: 0 0 10px #FFD580;
      font-weight: 700;
    }

    
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

    
    input, textarea, select {
      background-color: #222;
      color: #fff;
      border: 1px solid #4B2E05;
      transition: border-color 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    }

    
    input:focus, textarea:focus, select:focus {
      border-color: #FFD580;
      background-color: #2A2A2A;
      box-shadow: 0 0 8px #FFD580;
      outline: none;
      color: #fff;
    }

    
    .container.mt-4 {
  background-color: rgba(43, 43, 43, 0.6);
  padding: 25px 30px;
  border-radius: 10px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.7);
  width: 100vw;
  max-width: 100vw;
  margin: 0;
  box-sizing: border-box;
  overflow-y: auto;
  min-height: 100vh; 
  display: flex;
  flex-direction: column;
}



    .search-wrapper {
      position: relative;
      display: flex;
      align-items: center;
      margin-left: 20px;
    }

    .btn-search {
      font-size: 1.25rem;
      padding: 6px 12px;
      cursor: pointer;
    }

    .search-form {
      display: flex;
      align-items: center;
      background-color: #222;
      border: 1px solid #4B2E05;
      border-radius: 6px;
      padding: 4px 8px;
      margin-left: 8px;
      animation: fadeIn 0.3s ease forwards;
    }

    .search-form input[type="search"] {
      background-color: #222;
      border: none;
      color: #fff;
      padding: 6px 10px;
      width: 180px;
      font-size: 1rem;
      outline: none;
    }

    .search-form input[type="search"]:focus {
      box-shadow: 0 0 8px #FFD580;
      border-radius: 4px;
    }

    .search-form .btn-submit,
    .search-form .btn-close {
      background-color: #4B2E05;
      border: none;
      color: #FFD580;
      font-weight: 600;
      margin-left: 6px;
      padding: 6px 12px;
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .search-form .btn-submit:hover,
    .search-form .btn-close:hover {
      background-color: #6E4519;
      box-shadow: 0 0 10px #FFD580;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.95);}
      to {opacity: 1; transform: scale(1);}
    }
  </style>
</head>


<body style="min-height: 100vh; display: flex; flex-direction: column;">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="index.php">
 
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


      <div class="search-wrapper">
        <button type="button" class="btn btn-primary btn-search" aria-label="Mở tìm kiếm">
          🔍
        </button>

        <form action="search.php" method="GET" class="search-form" role="search" style="display:none;">
          <input type="search" name="q" placeholder="Tìm kiếm..." aria-label="Tìm kiếm" required />
          <button type="submit" class="btn btn-primary btn-submit">Tìm</button>
          <button type="button" class="btn btn-primary btn-close" aria-label="Đóng tìm kiếm">✖</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-4">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const btnSearch = document.querySelector('.btn-search');
    const searchForm = document.querySelector('.search-form');
    const btnClose = document.querySelector('.btn-close');

    btnSearch.addEventListener('click', function () {
      btnSearch.style.display = 'none';
      searchForm.style.display = 'flex';
      searchForm.querySelector('input[type="search"]').focus();
    });

    btnClose.addEventListener('click', function () {
      searchForm.style.display = 'none';
      btnSearch.style.display = 'inline-block';
    });
  });
</script>

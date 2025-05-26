<?php
include('includes/header.php');
?>

<!-- Link Bootstrap Icons nếu chưa có -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
  .card-link-wrapper {
    text-decoration: none;
    color: inherit;
  }

  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: rgba(75, 46, 5, 0.9);
    border: 1px solid #FFD580;
    border-radius: 12px;
    color: #fff;
    height: 100%;
  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(255, 213, 128, 0.4);
    z-index: 2;
  }

  .card .card-title {
    font-size: 1.25rem;
    font-weight: bold;
    text-shadow: 0 1px 2px #000;
  }

  .card .card-text {
    color: #f8f9fa;
    text-shadow: 0 1px 1px #000;
  }

  .card i.bi {
    font-size: 2.5rem;
    color: #FFD580;
    margin-bottom: 10px;
    transition: transform 0.2s ease;
  }

  .card:hover i.bi {
    transform: scale(1.15);
  }

  .welcome-title {
    font-size: 2rem;
    font-weight: 700;
    color: #FFD580;
    text-align: center;
    margin-bottom: 20px;
  }
</style>

<h2 class="welcome-title">Chào mừng đến với Chợ Sinh Viên!</h2>
<p class="text-center">Đăng nhập hoặc đăng ký để bắt đầu mua bán đồ dùng học tập, quần áo, đồ cũ, v.v.</p>

<div class="row mt-4 g-4">
  <div class="col-md-4">
    <a href="https://shorturl.at/Y9aPZ?type=hoc-tap" class="card-link-wrapper">
      <div class="card text-center p-4 h-100">
        <div class="card-body">
          <i class="bi bi-journal-bookmark"></i>
          <h5 class="card-title">Đồ dùng học tập</h5>
          <p class="card-text">Giấy, bút, sách, tài liệu học tập,...</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-4">
    <a href="https://shorturl.at/5DXjg?type=quan-ao" class="card-link-wrapper">
      <div class="card text-center p-4 h-100">
        <div class="card-body">
          <i class="bi bi-bag-check"></i>
          <h5 class="card-title">Quần áo sinh viên</h5>
          <p class="card-text">Áo khoác, đồng phục, đồ thể thao,...</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md-4">
    <a href="https://shorturl.at/F88a5?type=do-cu" class="card-link-wrapper">
      <div class="card text-center p-4 h-100">
        <div class="card-body">
          <i class="bi bi-house-door"></i>
          <h5 class="card-title">Đồ gia dụng, đồ cũ</h5>
          <p class="card-text">Nồi cơm, quạt, bàn ghế, đèn bàn,...</p>
        </div>
      </div>
    </a>
  </div>
</div>

<?php include('includes/footer.php'); ?>

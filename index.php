<?php include('includes/header.php'); echo '<div class="overlay">'; ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
  .card-link-wrapper {
    text-decoration: none;
    color: inherit;
    position: relative;
  }

  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: rgba(75, 46, 5, 0.9);
    border: 1px solid #FFD580;
    border-radius: 12px;
    color: #fff;
    height: 100%;
    cursor: pointer;
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
    text-shadow:
    2px 2px 4px rgba(0, 0, 0, 0.8), /* bóng đổ */
    -1px -1px 0 #3b2e1e, 1px -1px 0 #3b2e1e,
    -1px 1px 0 #3b2e1e, 1px 1px 0 #3b2e1e; /* viền giả */
  }

  .welcome-subtext {
    text-align: center;
    font-size: 1.1rem;
    color: #f8f9fa;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
  }


  .modal-content {
    background-color: #2c2c2c;
    border-radius: 15px;
    color: #fff;
    text-align: center;
    padding: 20px;
  }

  .modal-content img {
    max-width: 100%;
    max-height: 400px;
    border-radius: 12px;
    border: 2px solid #FFD580;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.6);
    margin-bottom: 15px;
  }

  .btn-home {
    background-color: #FFD580;
    color: #3b2e1e;
    font-weight: bold;
  }

  .btn-home:hover {
    background-color: #e6c16b;
    color: #2a2115;
  }

  /* Hiệu ứng rung */
  @keyframes shake {
    0% { transform: translate(1px, 1px) rotate(0deg); }
    10% { transform: translate(-1px, -2px) rotate(-1deg); }
    20% { transform: translate(-3px, 0px) rotate(1deg); }
    30% { transform: translate(3px, 2px) rotate(0deg); }
    40% { transform: translate(1px, -1px) rotate(1deg); }
    50% { transform: translate(-1px, 2px) rotate(-1deg); }
    60% { transform: translate(-3px, 1px) rotate(0deg); }
    70% { transform: translate(3px, 1px) rotate(-1deg); }
    80% { transform: translate(-1px, -1px) rotate(1deg); }
    90% { transform: translate(1px, 2px) rotate(0deg); }
    100% { transform: translate(1px, -2px) rotate(-1deg); }
  }

  .shake {
    animation: shake 0.8s;
  }

  
</style>

<h2 class="welcome-title">Chào mừng đến với Chợ Sinh Viên!</h2>
<p class="welcome-subtext">Đăng nhập hoặc đăng ký để bắt đầu mua bán đồ dùng học tập, quần áo, đồ cũ, v.v.</p>


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


<div class="row mt-4">
  <div class="col-md-4 offset-md-4">
    <div class="card-link-wrapper text-center" data-bs-toggle="modal" data-bs-target="#memeModal">
      <div class="card p-4">
        <div class="card-body">
          <i class="bi bi-emoji-heart-eyes"></i>
          <h5 class="card-title">Tâm đẹp trai</h5>
          <p class="card-text">Đơn giản là đẹp trai 😼</p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="memeModal" tabindex="-1" aria-labelledby="memeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark text-white">
      <div class="modal-body">
        <img id="meme-img" src="assets/img/meme-meo.jpg" alt="Meme mèo cute">
        <a href="index.php" class="btn btn-home mt-3">Quay lại trang chủ</a>
      </div>
    </div>
  </div>
</div>


<audio id="meow-sound" preload="auto">
  <source src="assets/sounds/meow.mp3" type="audio/mpeg">
  Trình duyệt của bạn không hỗ trợ âm thanh HTML5.
</audio>

<script>
  const memeModal = document.getElementById('memeModal');
  const meowSound = document.getElementById('meow-sound');
  const memeImg = document.getElementById('meme-img');

  memeModal.addEventListener('shown.bs.modal', () => {
  meowSound.currentTime = 0;
  meowSound.play();
  memeImg.classList.add('shake');
});

memeModal.addEventListener('hidden.bs.modal', () => {
  memeImg.classList.remove('shake');
});

</script>
</div>
</div>
<?php include('includes/footer.php'); ?>

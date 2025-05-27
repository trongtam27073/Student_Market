<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng bài mới - Chợ Sinh Viên</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
  <div class="container mt-5">
    <h2>Đăng bài mới</h2>
    <form action="save_post.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Mô tả</label>
        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Giá (VNĐ)</label>
        <input type="number" class="form-control" id="price" name="price" required>
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Ảnh sản phẩm</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>

      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">Đăng bài</button>
        <a href="index.php" class="btn btn-outline-light">quay về Trang chủ</a>
      </div>
    </form>
  </div>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$title = $_POST['title'] ?? '(không tiêu đề)';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng bài thành công</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #121212;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .message-box {
      background-color: #1e1e1e;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(255, 213, 128, 0.3);
      text-align: center;
    }

    .btn-home {
      background-color: #4B2E05;
      color: #FFD580;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 8px;
      margin-top: 20px;
      transition: 0.3s;
    }

    .btn-home:hover {
      background-color: #6E4519;
      box-shadow: 0 0 10px #FFD580;
    }
  </style>
</head>
<body>
  <div class="message-box">
    <h2>🎉 Đăng bài thành công (giả lập)</h2>
    <p>Cảm ơn bạn đã đăng bài: <strong><?= htmlspecialchars($title) ?></strong></p>
    <p>💡 Web chưa hoàn thiện, đăng bài cho vui tay thôi 😄</p>
    <a href="index.php" class="btn btn-home">← Quay về Trang chủ</a>
  </div>
</body>
</html>

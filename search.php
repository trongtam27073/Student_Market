<?php
if (session_status() == PHP_SESSION_NONE) session_start();

$q = isset($_GET['q']) ? trim($_GET['q']) : '';
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <title>Kết quả tìm kiếm cho "<?= htmlspecialchars($q) ?>"</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #121212;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 20px;
    }
    a {
      color: #FFD580;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
    .note {
      background-color: #2a2a2a;
      border: 1px solid #4B2E05;
      border-left: 5px solid #FFD580;
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 6px;
    }
  </style>
</head>
<body>

  <h1 class="mb-4">Kết quả tìm kiếm cho: "<em><?= htmlspecialchars($q) ?></em>"</h1>

  <div class="note">
    🔧 <strong>Ghi chú:</strong> Website <strong>chưa hoàn thiện</strong>, hiện chưa có sản phẩm thật. Dữ liệu chỉ là minh họa. <strong>Tâm đẹp trai</strong>.
  </div>

  <?php
  if ($q === '') {
    echo "<p>Vui lòng nhập từ khóa tìm kiếm.</p>";
  } else {
    $items = [
      ['title' => 'Balo đẹp cho sinh viên', 'link' => 'item1.php'],
      ['title' => 'Áo khoác ấm', 'link' => 'item2.php'],
      ['title' => 'Sách giáo khoa toán lớp 12', 'link' => 'item3.php'],
      ['title' => 'Laptop cũ giá tốt', 'link' => 'item4.php'],
    ];

    $results = array_filter($items, function($item) use ($q) {
      return stripos($item['title'], $q) !== false;
    });

    if (count($results) === 0) {
      echo "<p>Không tìm thấy kết quả nào phù hợp.</p>";
    } else {
      echo "<ul>";
      foreach ($results as $item) {
        echo "<li><a href=\"" . htmlspecialchars($item['link']) . "\">" . htmlspecialchars($item['title']) . "</a></li>";
      }
      echo "</ul>";
    }
  }
  ?>

  <p class="mt-4"><a href="index.php">← Quay lại Trang chủ</a></p>

</body>
</html>

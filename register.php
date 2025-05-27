<?php
include('includes/db.php');
include('includes/header.php');

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if (empty($name) || empty($email) || empty($password) || empty($confirm)) {
        $errors[] = "Vui lòng điền đầy đủ thông tin.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email không hợp lệ.";
    } elseif ($password !== $confirm) {
        $errors[] = "Mật khẩu xác nhận không khớp.";
    }

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        $errors[] = "Email đã được sử dụng.";
    }

    if (empty($errors)) {
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($conn, "INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashed);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        echo "<div class='alert alert-success'>Đăng ký thành công! <a href='login.php' style='color: #fff; text-decoration: underline;'>Đăng nhập</a></div>";
    }
}
?>

<style>
  .register-container {
    max-width: 420px;
    margin: 40px auto;
    padding: 30px 40px;
    background-color: #2c2c2c; /* nền tối */
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.4);
    color: #fff; /* chữ trắng */
    font-family: Arial, sans-serif;
  }

  .register-container h3 {
    color: #ff4444; /* đỏ nổi bật */
    text-transform: uppercase;
    text-shadow: 3px 3px 6px rgba(0,0,0,0.8);
    margin-bottom: 25px;
    text-align: center;
  }

  .register-container form label {
    color: #ddd;
  }

  .register-container form input {
    background-color: #444;
    border: 1px solid #555;
    color: #fff;
  }

  .register-container form input::placeholder {
    color: #bbb;
  }

  .register-container form input:focus {
    border-color: #ff4444;
    outline: none;
    box-shadow: 0 0 8px #ff4444;
  }

  .register-container .btn-primary {
    background-color: #ff4444;
    border: none;
    width: 100%;
    padding: 10px;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  .register-container .btn-primary:hover {
    background-color: #cc0000;
  }

  .register-container .alert-danger {
    background-color: #a94442;
    border-color: #843534;
    color: #f2dede;
    padding: 12px 15px;
    border-radius: 6px;
    margin-bottom: 20px;
  }

  .register-container .alert-success {
    background-color: #3c763d;
    border-color: #2b542c;
    color: #dff0d8;
    padding: 12px 15px;
    border-radius: 6px;
    margin-bottom: 20px;
    text-align: center;
  }
</style>

<div class="register-container">
  <h3>Đăng ký tài khoản</h3>

  <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($errors as $err): ?>
          <li><?= htmlspecialchars($err) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="POST">
    <div class="mb-3">
      <label>Họ tên</label>
      <input type="text" name="name" class="form-control" required placeholder="Nhập họ tên">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required placeholder="Nhập email">
    </div>
    <div class="mb-3">
      <label>Mật khẩu</label>
      <input type="password" name="password" class="form-control" required placeholder="Nhập mật khẩu">
    </div>
    <div class="mb-3">
      <label>Xác nhận mật khẩu</label>
      <input type="password" name="confirm" class="form-control" required placeholder="Xác nhận mật khẩu">
    </div>
    <button type="submit" class="btn btn-primary">Đăng ký</button>
  </form>
</div>

<?php include('includes/footer.php'); ?>

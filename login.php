<?php
session_start();
include('includes/db.php');

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            header("Location: index.php");
            exit();
        } else {
            $errors[] = "Mật khẩu không đúng.";
        }
    } else {
        $errors[] = "Email không tồn tại.";
    }
}

include('includes/header.php');
?>

<style>
  .login-container {
    max-width: 400px;
    margin: 40px auto;
    padding: 30px 40px;
    background-color: #2c2c2c;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    color: #fff;
    font-family: Arial, sans-serif;
  }
  .login-container h3 {
    color: #ff4444;
    text-transform: uppercase;
    text-shadow: 3px 3px 6px rgba(0,0,0,0.8);
    margin-bottom: 25px;
    text-align: center;
  }
  .login-container form label {
    color: #ddd;
  }
  .login-container form input {
    background-color: #444;
    border: 1px solid #555;
    color: #fff;
  }
  .login-container form input::placeholder {
    color: #bbb;
  }
  .login-container form input:focus {
    border-color: #ff4444;
    outline: none;
    box-shadow: 0 0 8px #ff4444;
  }
  .login-container .btn-primary {
    background-color: #ff4444;
    border: none;
    width: 100%;
    padding: 10px;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }
  .login-container .btn-primary:hover {
    background-color: #cc0000;
  }
  .login-container .alert-danger {
    background-color: #a94442;
    border-color: #843534;
    color: #f2dede;
    padding: 12px 15px;
    border-radius: 6px;
    margin-bottom: 20px;
  }
</style>

<div class="login-container">
  <h3>Đăng nhập</h3>

  <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($errors as $e): ?>
          <li><?= htmlspecialchars($e) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>

  <form method="POST" class="mt-3" autocomplete="off">
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input id="email" type="email" name="email" class="form-control" required placeholder="Nhập email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mật khẩu:</label>
      <input id="password" type="password" name="password" class="form-control" required placeholder="Nhập mật khẩu">
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
  </form>
</div>

<?php include('includes/footer.php'); ?>

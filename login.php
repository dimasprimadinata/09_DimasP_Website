<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <title>LOGIN</title>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<form class="box" action="" method="POST">
    <div class="wrapper">
      <div class="container">
        <div class="col-left">
          <div class="login-text">
            <h1>Welcome</h1>
          </div>
        </div>
        <div class="col-right">
          <div class="login-form">
            <h2>Admin MAX JDM login</h2><br>
            <p>Only Admin!</p><br>
            <form>
              <p>
                <label>Username</label>
                <input type="text" placeholder="Username" name="username" required>
              </p>
              <p>
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" required>
              </p>
              <p>
                <input type="submit" name="submit" value="Login" />
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
  // Mengambil nilai yang diinputkan oleh user
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Membuat session
  $_SESSION['username'] = "Dimas";
  $_SESSION['password'] = "123";

  // Lakukan pengecekan
  if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
    header('Location:admin.php');
  } else {
    echo "Username atau password salah !";
  }
}
?>
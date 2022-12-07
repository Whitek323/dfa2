<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>
  <?php require_once "server.php";?>
  <div class="container mt-5" style="width: 800px;">
    <h2>FoodApp</h2>
    <form action="post">
      <div class="mb-3">
        <label for="">อีเมลล์</label>
        <input type="password">
      </div>
      <div class="mb-3">
        <label for="">รหัสผ่าน</label>
        <input type="text">
      </div>
      <div class="mb-3">
        <button class="btn btn-primary">ล็อกอิน</button>
        <a href="register.php" class="btn btn-success">ลงทะเบียน</a>
      </div>
    </form>
  </div>
  <script src="./style/class.js"></script>

</body>
</html>
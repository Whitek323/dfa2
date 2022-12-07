<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
</head>
<body>
  <?php require_once "server.php";
        if(isset($_POST['submit'])){
          $data->insert($_POST['username'],$_POST['email'],$_POST['password'],$_POST['address'],$_POST['status']);
          $conn->query($text);
        }
  ?>
  <div class="container mt-5" style="width: 800px;">
    <h2>FoodApp</h2>
    <form method="post">
      <div>
        <label for="">ชื่อผู้ใช้งาน</label>
        <input type="text" name="username">
      </div>
      <div class="mb-3">
        <label for="">อีเมลล์</label>
        <input type="email" name="email">
      </div>
      <div>
        <label for="">รหัสผ่าน</label>
        <input type="password" name="password">
      </div>
      <div class="mb-3">
        <label for="">ที่อยู่</label>
        <input type="text" name="address">
      </div>
      <div>
        <select name="status" id="">
          <option value="100">ผู้ใช้งานทั่วไป</option>
          <option value="010">ไรเดอร์</option>
          <option value="001">ร้านอาหาร</option>
        </select>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary" type="submit" name="submit">ลงทะเบียน</button>
        <a href="index.php" class="btn btn-success" name>ล็อกอิน</a>
      </div>
    </form>
  </div>
  <script src="./style/class.js"></script>
</body>
</html>
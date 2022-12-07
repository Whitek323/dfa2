<?php
class FA{
  function __construct()
  {
    try{
      $conn = new PDO("mysql:host=localhost:3307;dbname=dfa2","root","");
    }catch(PDOException $e){
      echo $e->getMessage();
    }
    $this->dbcon = $conn;
  }
  function insert($a,$b,$c,$d,$e){
    $text = "INSERT INTO users(username,email,password,address,status) VALUES('$a','$b','$c','$d','$e')";
    return $this->dbcon->query($text);
  }
}
$data = new FA;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  $("form input").addClass("form-control")
</script>

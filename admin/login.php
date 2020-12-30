<?php
    ob_start();
    session_start();
    require "../db/dbCon.php";
  if (isset($_POST["create"])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
  
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $user = $conn->query($sql);
    if ($user->num_rows == 1) {
      $row = $user->fetch_assoc();
      
      $_SESSION["id"] = $row['id'];
      $_SESSION["username"] = $row['username'];
      $_SESSION["role"] = $row['role'];

      header('location: index.php');
    } else { ?>
      <div class="alert alert-danger" role="alert">
          Đăng nhập thất bại! Hãy thử lại
      </div>
    <?php } 
  }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SKT-Tech</title>
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="css/layout.css" rel="stylesheet">
</head>
<body>
<div class="container" style="padding-top: 5rem;">
    <div class="card p-5" style="max-width: 600px; width: 100%; margin: auto;">
        <form class="needs-validation" method="POST">
            <div class="form-row" >
              <div class="form-group col-md-12">
                <label for="inputName">Tên đăng nhập</label>
              	<input name="username" type="text" class="form-control" required placeholder="Tên của bạn">
              </div>
			      </div>
            <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="inputPhone">Mật khẩu</label>
                          <input name="password" type="password" class="form-control" placeholder="Mật khẩu">
                      </div>
            </div>
          <div style="width: 100px; margin:auto;">
            <button name="create" type="submit" class="btn btn-primary">Đăng nhập</button>
          </div>
        </form>
    </div>
</div>
</body>
</html>	
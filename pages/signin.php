<?php
  if (isset($_POST["create"])) {
    $username=$_POST["username"];
    $password=$_POST["password"];
  
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $user = $conn->query($sql);
    if ($user->num_rows == 1) {
      $row = $user->fetch_assoc();
      
      $_SESSION["id"] = $row['id'];
      $_SESSION["username"] = $row['username'];
      $_SESSION["phone"] = $row['phone'];
      $_SESSION["address"] = $row['address'];
      $_SESSION["email"] = $row['email'];

      header('location: index.php');
    } else { ?>
      <div class="alert alert-danger" role="alert">
          Đăng nhập thất bại! Hãy thử lại
      </div>
    <?php } 
  }
?>
<div class="container" id="content-contacts" style="padding-top: 5rem;">
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
          <div style="border-top: 1px solid #e2d3d3; margin-top: 20px;">
            <a href="index.php?p=signup">Đăng ký</a>
          </div>
        </form>
    </div>
    <div class="row mt-5">
        <div class="col-sm text-center">
            <h3 class="card-title" style="color: rgb(3, 3, 78); font-weight: bold;">Thông tin liên hệ</h3><br>
            <p class="card-text text-secondary">Quản lý doanh nghiệp thật dễ dàng. Bạn còn đang băn khoăn?</p>
            <p class="card-text text-secondary">Hãy để chúng tôi mang giải pháp đến cho bạn.</p>
        </div>
    </div>	

    <div class="row mt-5">
        <div class="col-sm">
          <div class="card text-center h-100">
              <div class="card-body">
                <h5 class="card-title" style="color: rgb(3, 3, 78); font-weight: bold;">SKT - The Smart Key for Transpotation</h5><br>
                <p class="card-text text-secondary">Landmark 6 - Vinhomes Central Park, 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, TP. Hồ Chí Minh</p>
              </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card text-center h-100">
              <div class="card-body">
                <h5 class="card-title" style="color: rgb(3, 3, 78); font-weight: bold;">Liên hệ kinh doanh</h5><br>
                <p class="card-text text-secondary">info@skt-tech.com</p>
              </div>
          </div>
        </div>
    </div>
</div>

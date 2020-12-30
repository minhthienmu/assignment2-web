<?php
    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["rePassword"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        $sql = "INSERT INTO user VALUES(null, '$username', '$password', '$phone', '$email', '$address')";

        if ($conn->query($sql)) { ?>
            <div class="alert alert-success" role="alert">
                Đăng kí thành công! <a href="index.php?p=signin">Đăng nhập ngay</a>
            </div>
        <?php
        } else { ?>
            <div class="alert alert-danger" role="alert">
                Đăng kí thất bại! Hãy thử lại
            </div>
          <?php 
        } 
    }
?>
<div class="container" id="content-contacts" style="padding-top: 5rem;">
    <div class="card p-5" style="max-width: 600px; width: 100%; margin: auto;">
        <form name="myForm" method="POST">
            <div class="form-row" >
              <div class="form-group col-md-12">
                <label for="inputName">Tên đăng nhập*</label>
			    <input name="username" name="username" type="text" class="form-control" placeholder="Tên của bạn">
              </div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Mật khẩu*</label>
                    <input name="password" name="password" type="password" class="form-control" placeholder="Mật khẩu">
                </div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Nhập lại mật khẩu*</label>
                    <input name="rePassword" name="rePassword" type="password" class="form-control"  placeholder="Nhập lại mật khẩu">
                </div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Số điện thoại*</label>
                    <input name="phone" name="phone" type="text" class="form-control"  placeholder="Số điện thoại">
                </div>
    
            </div>
			<div class="form-row" >
				<div class="form-group col-md-12">
				  <label for="inputEmail4">Email*</label>
				  <input name="email" name="email" type="email" class="form-control" placeholder="Email">
				</div>
			</div>
    
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Địa chỉ</label>
                    <input name="address" name="address" type="text" class="form-control" placeholder="Địa chỉ">
                </div>
            </div>
    
			<div style="width: 100px; margin:auto;">
				<button name="register" type="submit" class="btn btn-primary">Đăng ký</button>
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
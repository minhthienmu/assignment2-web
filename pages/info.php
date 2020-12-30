<?php
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM user where id = $id";
    $user = $conn->query($sql);
    $row = $user->fetch_assoc();

    if (isset($_POST["update"])) {
        $username = $_POST["username"];
        $password = $_POST["rePassword"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        $sql = "UPDATE User SET username='$username', password='$password', phone='$phone', email='$email', address='$address' WHERE id='$id'";
        $result = $conn->query($sql);
        if ($result) { ?>
            <div class="alert alert-success" role="alert">
                Cập nhật thành công!
            </div>
           
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                Lỗi!
            </div>
        <?php }
    }
?>
<div class="container" id="content-contacts" style="padding-top: 5rem;">
    <div class="card p-5" style="max-width: 600px; width: 100%; margin: auto;">
        <form method="POST">
            <div class="form-row" >
              <div class="form-group col-md-12">
                <label for="inputName">Tên đăng nhập*</label>
			    <input name="username" type="text" class="form-control" placeholder="Tên của bạn" value="<?php echo $row['username']; ?>">
              </div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Mật khẩu*</label>
                    <input name="password" type="password" class="form-control" placeholder="Mật khẩu" value="<?php echo $row['password']; ?>">
                </div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Nhập lại mật khẩu*</label>
                    <input name="rePassword" type="password" class="form-control" placeholder="Nhập lại mật khẩu" value="<?php echo $row['password']; ?>">
                </div>
			</div>
			<div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Số điện thoại*</label>
                    <input name="phone" type="text" class="form-control"  placeholder="Số điện thoại" value="<?php echo $row['phone']; ?>">
                </div>
    
            </div>
			<div class="form-row" >
				<div class="form-group col-md-12">
				  <label for="inputEmail4">Email*</label>
				  <input name="email" type="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
				</div>
			</div>
    
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Địa chỉ*</label>
                    <input name="address" type="text" class="form-control" placeholder="Địa chỉ" value="<?php echo $row['address']; ?>">
                </div>
            </div>
    
			<div style="width: 100px; margin:auto;">
				<button name="update" type="submit" class="btn btn-primary">Cập nhật</button>
			</div>
            
        </form>
    </div>
</div>
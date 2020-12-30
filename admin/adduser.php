<?php
    if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        $sql = "INSERT INTO user VALUES(null, '$username', '$password', '$phone', '$email', '$address', null)";

        if ($conn->query($sql)) {
            header('location: index.php?p=user');
        } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Add User</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
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
				<button name="register" type="submit" class="btn btn-primary">Xác nhận</button>
			</div>
            </form>
        </div>
    </div>
</div>
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM user where id = $id";
    $user = $conn->query($sql);
    $row = $user->fetch_assoc();

    if (isset($_POST["update"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];

        $sql = "UPDATE user SET username='$username', password='$password', phone='$phone', email='$email', address='$address' WHERE id='$id'";
        $result = $conn->query($sql);
         if ($result) {
            header('location: index.php?p=user');
        } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Edit User</h2>
        </div>
        <div class="card-body">
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
</div>
    
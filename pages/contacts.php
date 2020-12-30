<?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $message = $_POST["message"];

        $sql = "INSERT INTO `contact`(`id`, `name`, `phone`, `email`, `address`, `message`) VALUES ('id','name','phone','email','address','message')";
       
        if ($conn->query($sql)) { ?>
            <div class="alert alert-success" role="alert">
                Gửi thành công!
            </div>
        <?php
        } else { ?>
            <div class="alert alert-danger" role="alert">
                Lỗi! Hãy thử lại
            </div>
          <?php 
        } 
    }
?>
<div class="container" id="content-contacts" style="padding-top: 5rem;">
    <div class="card p-5">
        <form method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputName">Tên của bạn*</label>
              <input name="name" type="text" class="form-control" id="inputName" placeholder="Tên của bạn *">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email*</label>
                <input name="email" type="email" class="form-control" placeholder="Email*">
              </div>
            </div>
    
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPhone">Số điện thoại*</label>
                    <input name="phone" type="text" class="form-control" placeholder="Số điện thoại *">
                </div>
    
                <div class="form-group col-md-6">
                    <label for="inputAddress2">Địa chỉ</label>
                    <input name="address" type="text" class="form-control" placeholder="Địa chỉ *">
                </div>
            </div>
    
            <div class="form-group">
                <label for="message">Nội dung: </label>
                <textarea name="message" class="form-control" id="message" rows="3"></textarea>
            </div>
    
            <button name="submit" type="submit" class="btn btn-primary">Gửi</button>
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
<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM contact where id = $id";
    $user = $conn->query($sql);
    $row = $user->fetch_assoc();
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>View Contact</h2>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="form-row" >
                <div class="form-group col-md-12">
                    <label for="inputName">Tên</label>
                    <input name="username" type="text" class="form-control" placeholder="Tên của bạn" value="<?php echo $row['name']; ?>">
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

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputPhone">Nội dung*</label>
                        <textarea name="body" class="form-control" rows="3" placeholder="nội dung"><?php echo $row['message']; ?></textarea>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
    
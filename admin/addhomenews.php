<?php
    if (isset($_POST["submit"])) {
        $title = $_POST["title"];
        $body = $_POST["body"];
        $img = $_FILES["img"]["name"];

        $path = "img/";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $anh = $_FILES["img"]["name"];
        move_uploaded_file($tmp_name, $path.$anh);

        $sql = "INSERT INTO homenews VALUES(null, '$title', '$body', '$anh')";

        if ($conn->query($sql)) {
            header('location: index.php?p=homenews');
        } else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Add Home News</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
            <div class="form-row" >
              <div class="form-group col-md-12">
                <label for="inputName">Hình ảnh</label>
			    <input name="img" type="file" class="form-control" placeholder="ảnh">
              </div>
			</div>
    
			<div class="form-row" >
				<div class="form-group col-md-12">
				  <label for="inputEmail4">Tiêu đề*</label>
				  <input name="title" type="text" class="form-control" placeholder="tiêu đề">
				</div>
			</div>
    
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Nội dung*</label>
                    <textarea name="body" class="form-control" rows="3" placeholder="nội dung"></textarea>
                </div>
            </div>
    
            <div style="width: 100px; margin:auto;">
				<button name="submit" type="submit" class="btn btn-primary">Xác nhận</button>
			</div>
            </form>
        </div>
    </div>
</div>
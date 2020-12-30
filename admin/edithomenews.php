<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM homenews where id = $id";
    $news = $conn->query($sql);
    $row = $news->fetch_assoc();

    if (isset($_POST["submit"])) {
        $title = $_POST["title"];
        $body = $_POST["body"];
        $img = $_FILES["img"]["name"];

        $path = "img/";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $anh = $_FILES["img"]["name"];
        move_uploaded_file($tmp_name, $path.$anh);

        $sql = "UPDATE homenews SET title='$title', body='$body', img='$anh' WHERE id='$id'";;

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
			    <input name="img" type="file" class="form-control" placeholder="ảnh" value="<?php echo $row['img']; ?>">
              </div>
			</div>
    
			<div class="form-row" >
				<div class="form-group col-md-12">
				  <label for="inputEmail4">Tiêu đề*</label>
				  <input name="title" type="text" class="form-control" placeholder="tiêu đề" value="<?php echo $row['title']; ?>">
				</div>
			</div>
    
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputPhone">Nội dung*</label>
                    <textarea name="body" class="form-control" rows="3" placeholder="nội dung"><?php echo $row['body']; ?></textarea>
                </div>
            </div>
    
            <div style="width: 100px; margin:auto;">
				<button name="submit" type="submit" class="btn btn-primary">Xác nhận</button>
			</div>
            </form>
        </div>
    </div>
</div>
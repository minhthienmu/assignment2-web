<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM user where id = $id";
    $result = $conn->query($sql);
    if ($result) {
        header('location: index.php?p=user');
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
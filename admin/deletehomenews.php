<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM homenews where id = $id";
    $result = $conn->query($sql);
    if ($result) {
        header('location: index.php?p=homenews');
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
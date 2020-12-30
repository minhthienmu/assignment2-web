<?php
    function getHomeNews() {
        require "db/dbCon.php";
        $sql = "SELECT * FROM homenews";
        
        return $conn->query($sql);
    }
?>
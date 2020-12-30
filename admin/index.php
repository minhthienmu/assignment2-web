<?php
    ob_start();
    session_start();
    require "../db/dbCon.php";

    if(!isset($_SESSION['role'])) {
        header("location:login.php");
    }

    if(isset($_GET['p'])) {
        $p = $_GET['p'];
    } else {
        $p = "";
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SKT-Tech</title>
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="css/layout.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<div id="header">
    <?php
        require_once "./header.php"; 
    ?>
</div>
<div id="body">
<div class="container-fluit">
    <div class=row>
        <div class="col-sm-3">
        <?php
            require_once "./menu.php"; 
        ?>
        </div>
        <div class="col-sm-9">
        <?php 
            switch ($p) {
                case 'user': 
                    require_once 'user.php';
                    break;
                case 'adduser': 
                    require_once 'adduser.php';
                    break;  
                case 'edituser': 
                    require_once 'edituser.php';
                    break;  
                case 'deleteuser': 
                    require_once 'deleteuser.php';
                    break;  
                case 'homenews': 
                    require_once 'homenews.php';
                    break;
                 case 'addhomenews': 
                    require_once 'addhomenews.php';
                    break;  
                case 'edithomenews': 
                    require_once 'edithomenews.php';
                    break;  
                case 'deletehomenews': 
                    require_once 'deletehomenews.php';
                    break;  
                case 'contact': 
                    require_once 'contact.php';
                    break;   
                case 'viewcontact': 
                    require_once 'viewcontact.php';
                    break;   
            }
        ?>
        </div>
    </div>
</div>
</div>
</body>
</html>	
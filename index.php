<?php
    session_start();
    require "db/dbCon.php";
    require "controller/home-controller.php";
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
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<div id="header">
    <?php
    if (isset($_SESSION["id"])) {
        require "component/headerUser.php"; 
    } else {
        require "component/header.php"; 
    }
    ?>
</div>
<?php 
    switch ($p) {
        case 'home':
            require 'pages/home.php';
            break;
        case 'contacts':
            require 'pages/contacts.php';
            break;
        case 'about':
            require 'pages/about.php';
            break;
        //case 'price':
        //    require 'pages/price.php';
        //    break;
        case 'service':
            require 'pages/service.php';
            break;
        case 'signin':
            require 'pages/signin.php';
            break;
        case 'signup':
            require 'pages/signup.php';
            break;
        case 'info':
            require 'pages/info.php';
            break;
        case 'logout':
            require 'pages/logout.php';
            break;
        default: 
            require 'pages/home.php';
    }
?>
<footer>
    <?php require "component/footer.php"; ?>
</footer>
</body>
</html>	
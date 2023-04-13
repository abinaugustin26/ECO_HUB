<?php
include('connection.php');
session_start(); 
$login=$_SESSION['login_id'];
$query=mysqli_query($conn,"SELECT * FROM product_tb WHERE login_id=$login");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Workers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
    ============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icons.min.css">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">.pt-130 {padding-top:60px;}</style>
</head>

<body>
<?php include('include/header.php');?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2> VIEW WORKERS</h2>
            
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <!-- <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Cart</span></li> -->
            </ul>
        </div>
    </div>
</div>
<div class="cart-main-area pt-130 pb-130">
    <div class="container">
        <h3 class="cart-page-title">WORKERS</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                            
                                           
                                            <th scope="col">Name</th>
                                            <th></th>
                                            <th scope="col">place</th>
                                            <th></th>
                                            <th scope="col">mobile</th>
                                            <th></th>
                                            
                                </tr>
                            </thead>
                            <tbody>
                                           <?php 
                                           $query=mysqli_query($conn,"SELECT * FROM common_worker_tb ");
                                            $count=0;
                                            while ($row=mysqli_fetch_assoc($query)) { $count++;
                                            ?>
                                        <tr> 
                                                                                  
                                           
                                            <td><?php echo $row['name'];?></td>
                                            <td></td>
                                            <td><?php echo $row['place'];?></td>
                                            <td></td>
                                            <td><?php echo $row['mobile'];?></td>
                                            <td></td>
                                            
                                            
                                                 
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                        </table>
                    </div>
              
                </form>
             
            </div>
        </div>
    </div>
</div>

<footer class="footer-area">
   
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">ECO HUB</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Terms & Conditions of Use</a></li>
                            </ul>
                        </div>
                        <!--<div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>













<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="assets/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>
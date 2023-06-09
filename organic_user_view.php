<?php 
include('connection.php');
$query=mysqli_query($conn,"SELECT * FROM product_tb");
$count=mysqli_num_rows($query);



?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Glaxdu - Education Bootstrap 4 Template</title>
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
</head>

<body>
<?php include 'include/head.php';?>
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Shop Grid</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
               <!--  <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Shop Grid</span></li> -->
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-top-bar">
                    <div class="shop-tab-wrap">
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-toggle="tab">
                                <i class="fa fa-table"></i>
                            </a>
                            <a href="#shop-2" data-toggle="tab">
                                <i class="fa fa-list-ul"></i>
                            </a>
                        </div>
                        <p>Showing 1–12 of <?php echo $count;?> result</p>
                    </div>
                    <div class="shop-select">
                        <select>
                            <option value="">Sort By Popularity</option>
                            <option value="">A to Z</option>
                            <option value=""> Z to A</option>
                            <option value="">In stock</option>
                        </select>
                    </div>
                </div>
                <div class="shop-bottom-area mt-30">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                <?php while($row=mysqli_fetch_assoc($query)){?>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="single-product.html"><img src="product/<?php echo $row['image'];?>"width="270" height="343" alt=""></a>
                                            <span>Sale</span>
                                            <div class="product-action">
                                                <ul>
                                                    
                                                    <li><a title="Compare" style="width:100%;"><i class=""></i></a></li>
                                                    <li><a title="Add To Cart" href="cart.php" style="width:100%;"><i class="fa fa-cart-arrow-down"></i></a></li>
                                                    <!-- <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class=""></i></a></li> -->
                                                    <li><a title="Wishlist" style="width:100%;"><i class=""></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="pro-title-rating-wrap">
                                                <div class="product-title">
                                                    <h3><a href="single-product.html">Marker Pen</a></h3>
                                                </div>
                                                <div class="product-rating">
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                    <i class="zmdi zmdi-star"></i>
                                                </div>
                                            </div>
                                            <div class="pro-category-price">
                                                <span class="pro-category">Drawing</span>
                                                <span class="pro-price">$10</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <?php } ?>
                             
                            </div>
                        </div>
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-3.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-2.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!--<p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>-->
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-5.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!--<p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>-->
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-6.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!--<p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>-->
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-10.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <!--<p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>-->
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro-pagination-style text-center mt-30">
            <ul>
                <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="brand-logo-area pb-130">
    <div class="container">
        <div class="brand-logo-active owl-carousel">
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
            </div>
            <div class="single-brand-logo">
                <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
<footer class="footer-area">
    <!--<div class="footer-top bg-img default-overlay pt-130 pb-80" style="background-image:url(assets/img/bg/bg-4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            <p>Ugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natu</p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>Uttara, Dhaka, Bangladesh</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="#">education@email.com</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> +98 558 547 589</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="course.html">Courses</a></li>
                                <li><a href="#">Admission</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>COURSES</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">Under Graduate Programmes </a></li>
                                <li><a href="#">Graduate Programmes </a></li>
                                <li><a href="#">Diploma Courses</a></li>
                                <li><a href="#">Others Programmes</a></li>
                                <li><a href="#">Short Courses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>GALLERY</h4>
                        </div>
                        <div class="footer-gallery">
                            <ul>
                                <li><a href="#"><img src="assets/img/gallery/gallery-1.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/gallery/gallery-2.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/gallery/gallery-3.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/gallery/gallery-4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>News Latter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Dugiat nulla pariatur. Edeserunt mollit anim id est laborum. Sed ut perspiciatis unde</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Your E-mail Address" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="SUBMIT">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">


                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="tab-content quickview-big-img">
                            <div id="pro-1" class="tab-pane fade show active">
                                <img src="assets/img/product/quickview-l1.jpg" alt="">
                            </div>
                           
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                       
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2>Product Name</h2>
                            <div class="pro-details-rating-wrap">
                                <div class="pro-details-rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                </div>
                                <span>(1 customer review)</span>
                            </div>
                            <h3>$329</h3>
                            <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunca augue quis neque ultrices placerat sit amet quis mauris. Integer urna libero, aliquet neque posu ullamcorper fringilla dolor. Maecenas id mattis magna. </p>-->
                            <div class="pro-details-size-color2 mt-30">
                                <div class="pro-details-color2-wrap">
                                    <span>Color</span>
                                    <div class="pro-details-color2-content">
                                        <ul>
                                            <li class="blue"></li>
                                            <li class="maroon active"></li>
                                            <li class="gray"></li>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                            <li class="white"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size2">
                                    <span>Size</span>
                                    <div class="pro-details-size2-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality mt-50 mb-45">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart">
                                    <a class="default-btn btn-hover" href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a class=" btn-hover" href="#"><i class="fa fa-heart-o"></i></a>
                                </div>
                            </div>
                            <span><i class="fa fa-check"></i> In stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->











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
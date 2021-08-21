<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Vegefoods</title>
</head>
<body>

<header>
    <div class="header-top">
        <div class="container">

            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center">
                            <div class="icon-phone2">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="text">+ 1234 5678 90</div>
                    </div>
                    <div class="col-md d-flex topper">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center">
                            <div class="icon-paper-plane">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                        </div>
                        <div class="text">webpirets@gmail.com</div>
                    </div>
                    <div class="col-md d-flex topper ">
                        <div class="text">3-5 Business days delivery &amp; Free Returns</div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                VEGEFOODS
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">HOME <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item  active">
                        <a href="shop.php" class="nav-link" >SHOP </a>
                    </li>
                    <li class="nav-item"><a href="about.php" class="nav-link">ABOUT</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">LOGIN</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">CONTACT</a></li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-shopping-cart"></i> (0)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>

<section id="product" class="text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <h5 style="color: #ffffff;"><strong>Home Product</strong></h5>

                <h1 style="color: #ffffff;"><strong>PRODUCTS</strong></h1>

            </div>
        </div>
    </div>
</section>

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Product;
$_product = new Product();
$products = $_product->index();
?>


<section id="new-product">



    <div class="container">

        <div class="text">
            <h4>Featured Products</h4>
            <h1>Our Products</h1>
            <p><strong>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</strong></p>
        </div>



        <div class="container">
            <div class="card card-deck row  ">
                <?php
                foreach ($products as $product):
                    ?>


                    <div class="  col-md-6 flex d-flex ">
                        <div class="inner">
                            <img src="<?php echo $webroot?>/upload/<?php echo $product['picture']?>" class="card-img-top" alt="products">
                        </div>
                        <div class="container col-6 p-0">


                            <div class=" card-body">
                                <h5 class="card-title"><?php echo $product['title'] ?></h5>
                                <p class="card-text">&euro;<?php echo $product['mrp'] ?></p>
                                <a href="product/product1.html" target="_blank"><p><button>Add To Cart</button></p></a>


                            </div>
                        </div>

                    </div>

                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>

</section>




<footer class="footer">
    <div class="container">

        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md">
                <div class="ft-widget mb-4">
                    <h2 class="ft-heading">Vegefoods</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                    <ul class="ft-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ft-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="ft-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="ft-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ft-widget mb-4 ml-md-5">
                    <h2 class="ft-heading">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Shop</a></li>
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Journal</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ft-widget mb-4">
                    <h2 class="ft-heading">Help</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                            <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQs</a></li>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="ft-widget mb-4">
                    <h2 class="ft-heading">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul class="list-unstyled">

                            <li><i class="fas fa-map-marker-alt"></i><div class="text"> 203 Fake St. Mountain View, San Francisco, California, USA</div></li>

                            <li><a href="#"><i class="fas fa-phone-alt"></i><div class="text">+2 392 3929 210</div></a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i><div class="text">info@yourdomain.com</div></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright by Web Pirets 19

                </p>
            </div>
        </div>
    </div>
</footer>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $('.carousel').carousel({
        interval: 1600
    })
</script>
</body>
</html>
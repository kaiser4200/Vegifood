<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Product;
$_product = new Product();
$products = $_product->index();
?>


<!--<section id="new-product">-->
<!---->
<!---->
<!---->
<!--    <div class="container">-->
<!---->
<!--        <div class="text">-->
<!--            <h4>Featured Products</h4>-->
<!--        <h1>Our Products</h1>-->
<!--            <p><strong>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</strong></p>-->
<!--        </div>-->
<!---->
<!---->
<!---->
<!--        <div class="container">-->
<!--        <div class="card-deck row ">-->
<!--            --><?php
//            foreach ($products as $product):
//                ?>
<!---->
<!---->
<!--            <div class="card col-3">-->
<!--                <div class="inner">-->
<!--                    <img src="--><?php //echo $webroot?><!--/upload/--><?php //echo $product['picture']?><!--" class="card-img-top" alt="products">-->
<!---->
<!--              <!--  <div class="container col-6 p-0">-->-->
<!---->
<!---->
<!--                <div class=" card-body">-->
<!--                    <h5 class="card-title">--><?php //echo $product['title'] ?><!--</h5>-->
<!--                    <p class="card-text">&euro;--><?php //echo $product['mrp'] ?><!--</p>-->
<!--                    <a href="product/product1.html" target="_blank"><p><button>Add To Cart</button></p></a>-->
<!---->
<!---->
<!--                </div>-->
<!--</div>-->
<!---->
<!--            </div>-->
<!---->
<!--            --><?php
//            endforeach;
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!---->
<!--</section>-->


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
                                <a href="../public/product-details.php" target="_blank"><p><button>Add To Cart</button></p></a>


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



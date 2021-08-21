<?php
//$approot = $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
//$webroot = 'http://localhost/ecommerce';
//include_once($approot.'vendor/autoload.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');
$webroot = 'http://localhost/Hridoy';
use Bitm\Product;
$_product = new Product();
$product=$_product->show();
?>




<?php
include_once('../views/elements/head.php');
?>

<form action="<?php echo $webroot?>php/public/carts/add_to_cart.php" method="post">
    <?php
    include_once('../views/elements/header.php');
    ?>
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="details">
                    <div class="left-col">
                        <div class="product">
                            <img  class="hat" src="<?php echo $webroot;?>/upload/<?php echo $product['picture'];?>">
                        </div>
                    </div>
                    <div class="right-col">
                        <h1>Title : <span><?php echo $product['title']?></span></h1>
                        <p>Product Code:<?php echo $product['id']?> </p>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>

                        <p><b>Availability</b>In Stock</p>
                        <p><b>Condition</b>New</p>
                        <p><b>Brand</b>XYZ Company</p>

                        <label for="quantity">Quantity</label>
                        <input type="number" value="1" name="qty">
                        <input type="number" value="<?php echo $product['id'];?>" name="product_id" />
<!--                        <input type="text" value="--><?php //echo $_SESSION['user'];?><!--" name="user_id" />-->
                        <input type="text" value="<?php echo $product['title'];?>" name="product_title" />
                        <input type="text" value="<?php echo $product['mrp'];?>" name="unit_price" />
                        <input type="text" value="<?php echo $product['picture'];?>" name="picture" />


                        <p><a><span> &#10148;</span>Buy Now</a></p>
                        <br>
                        <button class="btn-success">Add to Cart</button>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Product Description-->
    <section class="product-description">
        <div class="container">
            <h3>Product Description</h3>
            <p><?php echo $product['description']?></p>
        </div>
    </section>

</form>
<!--Footer-->
<?php
include_once('../views/elements/footer.php');
//include_once('../views/elements/scrept.php');
?>

</script>

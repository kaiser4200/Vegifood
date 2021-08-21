<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once($approot.'vendor/autoload.php');

use Bitm\Cart;
$_cart = new Cart();
$cart=$_cart->show();

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Show</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <dl>
                    <dt>ID</dt>
                    <dd> <?php echo $cart['id'];?></dd>

                    <dt>Title</dt>
                    <dd> <?php echo $cart['user_id'];?></dd>

                    <dt>Short Description</dt>
                    <dd> <?php echo $cart['product_id'];?></dd>

                    <dt>Short Description</dt>
                    <dd> <?php echo $cart['product_title'];?></dd>

                    <dt>Total Sales</dt>
                    <dd> <?php echo $cart['unit_price'];?></dd>

                    <dt>Qty</dt>
                    <dd> <?php echo $cart['qty'];?></dd>

                    <dt>Total Price</dt>
                    <dd> <?php echo $cart['total_price'];?></dd>

                    <dt>Picture</dt>
                    <dd>

                        <img height="" width="" src="<?php echo $webroot;?>/upload/<?php echo $cart['picture'];?>">

                    </dd>
                </dl>

            </div>

        </div>

    </div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

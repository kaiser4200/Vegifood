<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/ecommerce_self_new/config.php');

use Bitm\Product;

$_id= $_GET['id'];
$_product = new Product();
$product=$_product->show($_id);
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
                    <dd> <?php echo $product['id'];?></dd>
                    <dt>Title</dt>
                    <dd> <?php echo $product['title'];?></dd>
                    <dt>Short Description</dt>
                    <dd> <?php echo $product['short_description'];?></dd>
                    <dt>Short Description</dt>
                    <dd> <?php echo $product['description'];?></dd>
                    <dt>Total Sales</dt>
                    <dd> <?php echo $product['total_sales'];?></dd>
                    <dt>Product Type</dt>
                    <dd> <?php echo $product['product_type'];?></dd>
                    <dt>Activity</dt>
                    <dd>
                        <?php
                        /*if ($banner['is_active']==1){
                            echo "Active";
                        }
                        else{
                            echo "Off line";
                        }*/
                        echo ($product['is_active'])?'Active' :'Off line';
                        ?>


                    </dd>
                    <dt>Is Delete</dt>
                    <dd>
                        <?php
                        /*if ($banner['is_active']==1){
                            echo "Active";
                        }
                        else{
                            echo "Off line";
                        }*/
                        echo ($product['is_deleted'])?'Deleted' :'Not Deleted';
                        ?>


                    </dd>
                    <dt>Picture</dt>
                    <dd>

                        <img height="" width="" src="<?php echo $webroot;?>/upload/<?php echo $product['picture'];?>">

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

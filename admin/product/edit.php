<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Product;
$_id = $_GET['id'];
$_product = new Product();
$product=$_product->edit($_id);
?>




<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Project Admin Edit</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="update.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden"
                               class="form-control"
                               id="admin_id"
                               name="id"
                               value="<?php echo $product['id'];?>" aria-describedby="titleHelp"
                               placeholder="Enter Admin id">
                    </div>
                    <div class="form-group">
                        <label for="productTitle">TITLE</label>
                        <input type="text"
                               class="form-control"
                               id="productTitle"
                               name="product_title"
                               value="<?php echo $product['title'];?>" aria-describedby="titleHelp"
                               placeholder="Enter Admin Name">
                    </div>
                    <div class="form-group">
                        <label for="product">Short Description</label>
                        <input type="text"
                               class="form-control"
                               id="product"
                               name="p_short_des"
                               value="<?php echo $product['short_description'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Admin Name">
                    </div>
                    <div class="form-group">
                        <label for="p_input_des">Description</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_des"
                               name="p_des"
                               value="<?php echo $product['description'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Admin Name">
                    </div>
                    <div class="form-group">
                        <label for="product_pic">Picture</label>
                        <input type="file"
                               class="form-control-file"
                               id="product_pic"
                               name="picture"
                               value="<?php echo $product['picture'];?>"
                        >
                        <img height="150px" width="150px" src="<?php echo $webroot;?>/upload/<?php echo $product['picture'];?>">
                        <input
                        type="hidden"
                        name="old_image"
                        value="<?php echo $product['picture'];?>"
                        >

                    </div>
                    <div class="form-group">
                        <label for="product_type">Product Type</label><br>
                        <select name="product_p_type" id="product_type">
                            <option value="jacket">Jackets</option>
                            <option value="Pants">Pants</option>
                            <option value="Shirts">Shirts</option>
                            <option value="Saree">Saree</option>
                            <option value="Jewellery">Jewellery</option>
                            <option value="bags">Bags</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="totalSales">Total Sales</label>
                        <input type="number"
                               class="form-control"
                               id="totalSales"
                               name="product_t_s"
                               value="<?php echo $product['total_sales'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Product Total Sales">
                    </div>
                    <div class="form-group">
                        <label for="p_mrp">MRP</label>
                        <input type="number"
                               class="form-control"
                               id="p_mrp"
                               name="mrp"
                               value="<?php echo $product['mrp'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter mrp">
                    </div>
                    <div class="form-group form-check">
                        <label for="banner_actv" class="form-check-label">
                            <?php
                            if ($product['is_active']==0 ){


                                ?>

                                <input type="checkbox"
                                       class="form-check-input"
                                       id="banner_actv"
                                       name="is_active"
                                       value="1"
                                       aria-describedby="isActiveHelp"
                                       placeholder="Enter Is Active">
                                <?php
                            }
                            else{


                                ?>
                                <input type="checkbox"
                                       class="form-check-input"
                                       id="banner_actv"
                                       name="is_active"
                                       value="1"
                                       checked="checked"
                                       aria-describedby="isActiveHelp"
                                       placeholder="Enter Is Active">
                                <?php
                            }
                            ?>
                            Is active
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label for="banner_del" class="form-check-label">
                            <?php
                            if ($product['is_deleted']==0 ){


                                ?>

                                <input type="checkbox"
                                       class="form-check-input"
                                       id="banner_del"
                                       name="is_deleted"
                                       value="1"
                                       aria-describedby="isDeleteHelp">
                                <?php
                            }
                            else{


                                ?>
                                <input type="checkbox"
                                       class="form-check-input"
                                       id="banner_del"
                                       name="is_deleted"
                                       value="1"
                                       checked="checked"
                                       aria-describedby="isDeleteHelp">
                                <?php
                            }
                            ?>
                            Is delete
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

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

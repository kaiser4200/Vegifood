<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');
//$approot= $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
//$webroot="http://localhost/ecommerce/";
//include_once ($approot.'vendor/autoload.php');
use Bitm\Product;
$_product = new Product();
$products = $_product->index();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Product Index</title>
</head>
<body>
<section>
    <div class="container">
        <p class="text-center text-success font-weight-bold mt-2">
            <?php if (isset($_SESSION))
            echo $_SESSION['message'];
            $_SESSION['message']="";
            ?>
        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link h4" href="create.php">
                            <button type="button" class="btn btn-outline-success">Add An Item</button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 justify-content-end">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link h4" href="trash_index.php">
                            <button type="button" class="btn btn-outline-danger">All Trash Item</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 table-responsive">
                <table class="table  table-hover table-striped">
                    <thead class="table-borderless thead-dark">
                    <tr>
                        <th scope="col"> Title</th>
                        <th scope="col"> Image</th>
                        <th scope="col"> Product Type</th>
                        <th scope="col"> Total Sale</th>
                        <th scope="col"> MRP</th>
                        <th scope="col"> Activity</th>
                        <th scope="col"> Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    if(count($products)>0):
                    foreach ($products as $pro) :
                        ?>
                        <tr>
                            <td> <a href="show.php? id= <?php echo $pro['id']?>"> <?php echo $pro['title']?></a> </td>
                            <td> <img height="150px" width="150px" src="<?php echo $webroot; ?>/uploads/<?php echo $pro['picture'];?>"></td>
                            <td>  <?php echo $pro['product_type']?> </td>
                            <td>  <?php echo $pro['total_sales']?> </td>
                            <td>  <?php echo $pro['mrp']?> </td>
                            <td>  <?php echo ($pro['is_active'])?'Active' :'Off line';?> </td>
                            <td>
                                <a href="edit.php?id=<?php echo $pro['id']?>">EDIT</a> |
                                <a href="delete.php?id=<?php echo $pro['id']?>" onclick="return confirm('Are you sure you want to delete')">DELETE</a> |
                                <a href="trash.php?id=<?php echo $pro['id']?>" onclick="return confirm('Are you sure you want to trash?')">Trash</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                        <tr>
                            <td colspan="6"> No Banner is Available. <a href="create.php">Click here to add one</a></td>
                        </tr>
                    <?php
                    endif;
                    ?>
                    </tbody>
                </table>

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

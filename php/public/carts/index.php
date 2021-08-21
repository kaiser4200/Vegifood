<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>



<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

//$approot= $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
//$webroot="http://localhost/ecommerce/";
//include_once ($approot.'vendor/autoload.php');
use Bitm\Cart;
$_cart = new Cart();
$carts = $_cart->mycart();

?>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <p class="welcome-message"> Welcome to our page</p>
                </div>
                <div class="col-8 d-none d-md-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link " href="#">My account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../public/carts/add_to_cart.php">Add to Card</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search entire store here" aria-label="Search entire store here" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </a>



                        </li>
                    </ul>
                </div>
                <div class="col-8 d-none d-sm-block d-md-none">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link " href="#"><i class="fas fa-user"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../login.php"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_to_cart.php"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <button type="button" class="btn btn-success"><i class="fas fa-search"></i></button >

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Markup for Header-->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#b99ebc;">
            <div class="container">
                <a id="ban"   class="navbar-brand" href="../menu.php">Vegefoods</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="../menu.php">Home</a>
                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Product
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="nav_item dropright">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Man & Woman
                                    </a>

                                    <div class="dropdown-menu submenu">
                                        <!-- Dropdown menu links -->
                                        <a class="dropdown-item" href="../product-catgeory.php">Casual wear</a>
                                        <a class="dropdown-item" href="#">Shoe</a>
                                        <a class="dropdown-item" href="#">Glass</a>
                                    </div>
                                </div>
                                <div class="nav_item dropright">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        children
                                    </a>
                                    <div class="dropdown-menu submenu">
                                        <!-- Dropdown menu links -->
                                        <a class="dropdown-item" href="#">Dress</a>
                                        <a class="dropdown-item" href="#">Shoe</a>
                                        <a class="dropdown-item" href="#">Toys</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Customs</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </div>
</header>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cart Index</title>
</head>
<body>
<section>
    <div class="container">
        <p class="text-center text-success font-weight-light mt-2">
            <?php if ( array_key_exists('message',$_SESSION ) && !empty($_SESSION['message']) ){
                        echo $_SESSION['message'];
                        $_SESSION['message']="";
            }
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
                        <a class="nav-link h4" href="#">
                            <button type="button" class="btn btn-outline-success">Processed to CheckOut</button>
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

                        <th scope="col"> Picture</th>
                        <th scope="col">Product Title</th>
                        <th scope="col"> Unit Price</th>
                        <th scope="col">Qty </th>
                        <th scope="col"> Total Price</th>

                        <th scope="col"> Action </th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    if(count($carts)>0):
                    foreach ($carts as $cart) :
                        ?>
                        <tr>

                            <td> <img height="150px" width="150px" src="<?php echo $webroot; ?>/upload/<?php echo $cart['picture'];?>"></td>
                            <td>  <?php echo $cart['product_title']?> </td>
                            <td>  <?php echo $cart['unit_price']?> </td>
                            <td>
                                <form action="../../../admin/cart/edit.php" method="post">
                                <input type="text" name="qty" value="<?php echo $cart['qty']?>" />
                                    <input type="hidden" name="id" value="<?php echo $cart['id']?>" />
                                    <button type="submit">Update</button>
                                </form>
                            </td>

                            <td>  <?php echo $cart['total_price']?> </td>


                            <td>
                                <a href="../../../admin/cart/edit.php?id=<?php echo $cart['id']?>"<i class="fas fa-edit"></i></a> |
                                <a href="../../../admin/cart/delete.php?id=<?php echo $cart['id']?>" onclick="return confirm('Are you sure you want to delete')"<i class="fas fa-trash"></i></a> |

                            </td>
                        </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                        <tr>
                            <td colspan="6"> No Item <in></in> Cart is Available.</td>
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

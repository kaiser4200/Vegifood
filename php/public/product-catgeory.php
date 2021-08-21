<?php
//$approot = $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
//$webroot = 'http://localhost/ecommerce';
//include_once($approot.'vendor/autoload.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\Product;
$_product = new Product();
$product=$_product->show($_id);
?>
<?php include_once('../views/elements/head.php');
include_once('../views/elements/header.php');
include_once('../views/elements/new-product.php');
include_once('../views/elements/footer.php');
 include_once('../views/elements/scrept.php'); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
</script>
</body>
</html>
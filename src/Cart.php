<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 11/26/2019
 * Time: 1:34 PM
 */

namespace Bitm;
use PDO;

class Cart
{
    public $conn=null;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        /*echo "connect successfully";*/
    }

    public function index(){

        $query ="SELECT * FROM carts";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $carts = $stmt-> fetchAll();
        return $carts;
    }

    public function mycart(){

        $query ="SELECT * FROM carts WHERE user_id = '".$_SESSION['user']."'";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $carts = $stmt-> fetchAll();
        return $carts;
    }



    public function store(){



        $_user_id = $_POST['user_id'];
        $_product_id = $_POST['product_id'];
        $_picture = $_POST['picture'];
        $_product_title =$_POST['product_title'];
        $_qty =$_POST['qty'];
        $_unit_price = $_POST['unit_price'];
        $_total_price = $_POST['total_price'];


        $_created_at = date('Y-m-d h:i:s',time());



        $query= "INSERT INTO carts( user_id,
                                    product_id,
                                    picture,
                                    product_title,
                                    qty,
                                    unit_price,
                                    total_price,
                                    created_at
                                    ) 
                             VALUES (:user_id,
                                    :product_id,
                                    :picture,
                                    :product_title,
                                    :qty,
                                    :unit_price,
                                    :total_price,
                                    :created_at
                                    )";

//prepare a statement
        $stmtp = $this->conn->prepare($query);
        $stmtp->bindParam( ':user_id',$_user_id);
        $stmtp->bindParam( ':product_id',$_product_id);
        $stmtp->bindParam( ':picture',$_picture);
        $stmtp->bindParam( ':product_title',$_product_title);
        $stmtp->bindParam( ':qty',$_qty);
        $stmtp->bindParam(':unit_price',$_unit_price);
        $stmtp->bindParam(':total_price',$_total_price);
        $stmtp->bindParam(':created_at',$_created_at);


        $result = $stmtp->execute();
        /*var_dump($result);*/

        if($result){
            $_SESSION['message']="Cart is added successfully";

        }
        else{
            $_SESSION['message']="Cart is not added";
        }

        header("location:index.php");
    }

    public function add_to_cart(){



        $_user_id = $_POST['user_id'];
        $_product_id = $_POST['product_id'];
        $_picture = $_POST['picture'];
        $_product_title =$_POST['product_title'];
        $_qty =$_POST['qty'];
        $_unit_price = $_POST['unit_price'];
        $_total_price = $_POST['total_price'];


        $_created_at = date('Y-m-d h:i:s',time());



        $query= "INSERT INTO carts( user_id,
                                    product_id,
                                    picture,
                                    product_title,
                                    qty,
                                    unit_price,
                                    total_price,
                                    created_at
                                    ) 
                             VALUES (:user_id,
                                    :product_id,
                                    :picture,
                                    :product_title,
                                    :qty,
                                    :unit_price,
                                    :total_price,
                                    :created_at
                                    )";

//prepare a statement
        $stmtp = $this->conn->prepare($query);
        $stmtp->bindParam( ':user_id',$_user_id);
        $stmtp->bindParam( ':product_id',$_product_id);
        $stmtp->bindParam( ':picture',$_picture);
        $stmtp->bindParam( ':product_title',$_product_title);
        $stmtp->bindParam( ':qty',$_qty);
        $stmtp->bindParam(':unit_price',$_unit_price);
        $stmtp->bindParam(':total_price',$_total_price);
        $stmtp->bindParam(':created_at',$_created_at);


        $result = $stmtp->execute();
        /*var_dump($result);*/

        if($result){
            $_SESSION['message']="Cart is added successfully";

        }
        else{
            $_SESSION['message']="Cart is not added";
        }

        header("location:http://localhost/Hridoy/php/public/carts/index.php");
    }

    public function show(){

//        $webroot="http://localhost/Hridoy/";
        $_id = $_GET['id'];
        $query ="SELECT * FROM carts where id= :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        $product = $stmt-> fetch();
       // header("location:http://localhost/Hridoy/php/public/product-details.php");
        return $product;
    }

    public function edit(){

        $_id = $_GET['id'];
        /*$approot= $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
        $webroot="http://localhost/ecommerce/";*/
        $query ="SELECT * FROM carts where id= :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        $product = $stmt-> fetch();
        return $product;
    }

    public function update(){



        $_id = $_POST['id'];
        $_user_id = $_POST['user_id'];
        $_product_id = $_POST['product_id'];
        $_picture = $_POST['picture'];
        $_product_title =$_POST['product_title'];
        $_qty =$_POST['qty'];
        $_unit_price = $_POST['unit_price'];
        $_total_price = $_POST['total_price'];

        $_updated_at = date('Y-m-d h:i:s',time());

//insert
        $query = "UPDATE carts SET 
            user_id = :user_id,
            product_id= :product_id,
            picture=:picture,
            product_title=:product_title,
            qty=:qty,
            unit_price=:unit_price,
            total_price=:total_price,
            updated_at=:updated_at 
        WHERE carts.id = :id";


//prepare a statement
        $stmt= $this->conn ->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':user_id',$_user_id);
        $stmt->bindParam(':product_id',$_product_id);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':product_title',$_product_title);
        $stmt->bindParam( ':qty',$_qty);
        $stmt->bindParam( ':unit_price',$_unit_price);
        $stmt->bindParam( ':total_price',$_total_price);
        $stmt->bindParam( ':updated_at',$_updated_at);



        $result = $stmt->execute();
        //var_dump($result);

        if($result){
            $_SESSION['message']="cart is updated successfully";

        }
        else{
            $_SESSION['message']="cart is not updated";
        }
        header("location:index.php");
    }

    public function delete(){
        $_id = $_GET['id'];

        $query ="DELETE FROM carts WHERE carts.id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        /*$banner = $stmt-> fetch();*/

        var_dump($result);

        if($result){
            $_SESSION['message']="product is deleted successfully";

        }
        else{
            $_SESSION['message']="product is not deleted";
        }
        header("location:index.php");
    }










}
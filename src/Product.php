<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 11/26/2019
 * Time: 1:34 PM
 */

namespace Bitm;
use PDO;

class Product
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

      /*  $start_from = 0;
        $total = 6;

        $query = "SELECT * FROM `products` WHERE  is_active = 1 LIMIT $start_from, $total";*/


     $query ="SELECT * FROM products where is_deleted=0";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $products = $stmt-> fetchAll();
        return $products;
    }

    public function getActiveProduct(){
        $query ="SELECT * FROM products where is_active=1";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $products = $stmt-> fetchAll();
        return $products;
    }

    public function store($data){
        /*$approot= $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
        $webroot="http://localhost/ecommerce/";
        //www te cole asche document_root diye thn path diye dbo
        //working with image upload
        $file_name ="IMG_".time()."_".$_FILES['picture']['name'];
        $target = $_FILES['picture']['tmp_name'];
        $destination = $approot.'upload/'.$file_name;

        $is_file_moved = move_uploaded_file($target, $destination);
        if ($is_file_moved){
            $_picture=$file_name;
        }
        else{
            $_picture=null;
        }*/
        $_picture=$this->upload();

        $_title1 = $data['pro_title'];
        $_short_des = $data['p_short_des'];
        $_des = $data['p_des'];
        $_pro_type=$data['product_p_type'];
        $_total_sale=$data['product_t_s'];
        $_mrp= $data['mrp'];
        ///
        $costttt= $data['product_t_s']*$data['mrp'];
        $_created_at = date('Y-m-d h:i:s',time());
        /*$_cost="$costttt";*/

        ///
        if (array_key_exists('is_active',$data)){
            $_isactive=$data['is_active'];

        }
        else{
            $_isactive=0;
        }

        if (array_key_exists('is_deleted',$data)){
            $_isdeletd=$data['is_deleted'];

        }
        else{
            $_isdeletd=0;
        }



//insert command

        $query1= "INSERT INTO products(title,picture,short_description,description,total_sales,product_type,is_active,is_deleted,created_at,mrp,cost) VALUES (:pro_title,:picture,:p_short_des,:p_des,:product_t_s,:product_p_type,:is_active,:is_deleted,:created_at,:mrp,:xyz)";

//prepare a statement
        $stmtp = $this->conn->prepare($query1);
        $stmtp->bindParam( ':pro_title',$_title1);
        $stmtp->bindParam( ':p_short_des',$_short_des);
        $stmtp->bindParam( ':p_des',$_des);
        $stmtp->bindParam( ':product_t_s',$_total_sale);
        $stmtp->bindParam( ':product_p_type',$_pro_type);
        $stmtp->bindParam(':picture',$_picture);
        $stmtp->bindParam(':is_active',$_isactive);
        $stmtp->bindParam(':is_deleted',$_isdeletd);
        $stmtp->bindParam(':mrp',$_mrp);
        $stmtp->bindParam(':xyz',$costttt);
        $stmtp->bindParam(':created_at',$_created_at);

        $result = $stmtp->execute();
        /*var_dump($result);*/

        if($result){
            $_SESSION['message']="product is added successfully";

        }
        else{
            $_SESSION['message']="product is not added";
        }

        header("location:index.php");
    }

    public function show(){
        /*$webroot="http://localhost/ecommerce/";*/
        $query ="SELECT * FROM products where id= :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        $product = $stmt-> fetch();
        return $product;
    }

    public function edit($_id){
        /*$approot= $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
        $webroot="http://localhost/ecommerce/";*/
        $query ="SELECT * FROM products where id= :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        $product = $stmt-> fetch();
        return $product;
    }

    public function update($data){
        /*$approot= $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
        $webroot="http://localhost/ecommerce/";
//www te cole asche document_root diye thn path diye dbo
//working with image upload
        if ($_FILES['picture']['name'] !="") {

            $file_name = "IMG_" . time() . "_" . $_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot . 'upload/' . $file_name;

            $is_file_moved = move_uploaded_file($target, $destination);
            if ($is_file_moved) {
                $_picture = $file_name;
            } else {
                $_picture = null;
            }
        }
        else{
            $_picture= $_POST['old_image'];
        }*/
        $_picture=$this->upload();

        $_id =$data['id'];
        $_title = $data['product_title'];
        $_short_des = $data['p_short_des'];
        $_des = $data['p_des'];
        $_total_sale=$data['product_t_s'];
        $_pro_type=$data['product_p_type'];
        $_mrp= $data['mrp'];
        $costttt= $data['product_t_s']*$data['mrp'];
        $_modified_at = date('Y-m-d h:i:s',time());
        if (array_key_exists('is_active',$data)){
            $_isactive=$data['is_active'];

        }
        else{
            $_isactive=0;
        }

        if (array_key_exists('is_deleted',$data)){
            $_isdeletd=$data['is_deleted'];

        }
        else{
            $_isdeletd=0;
        }
//insert
        $query = "UPDATE products SET title = :product_title,short_description= :p_short_des,description=:p_des,picture=:picture,total_sales=:product_t_s,product_type=:product_p_type,is_active=:is_active,is_deleted=:is_deleted,mrp=:mrp,cost=:xyz,modified_at=:modified_at WHERE products.id = :id";


//prepare a statement
        $stmt= $this->conn ->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':product_title',$_title);
        $stmt->bindParam(':p_short_des',$_short_des);
        $stmt->bindParam(':p_des',$_des);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam( ':product_t_s',$_total_sale);
        $stmt->bindParam( ':product_p_type',$_pro_type);
        $stmt->bindParam( ':is_active',$_isactive);
        $stmt->bindParam( ':is_deleted',$_isdeletd);
        $stmt->bindParam( ':mrp',$_mrp);
        $stmt->bindParam( ':xyz',$costttt);
        $stmt->bindParam(':modified_at',$_modified_at);



        $result = $stmt->execute();
        //var_dump($result);

        if($result){
            $_SESSION['message']="product is updated successfully";

        }
        else{
            $_SESSION['message']="product is not updated";
        }
        header("location:index.php");
    }

    public function delete($_id){

        $query ="DELETE FROM products WHERE products.id = :id";

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

    public function trash($_id){
        $_is_deleted= 1;

        $query = "UPDATE products SET is_deleted=:is_deleted WHERE products.id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result = $stmt->execute();

        /*$banner = $stmt-> fetch();*/

        var_dump($result);

        if($result){
            $_SESSION['message']="Product is deleted successfully";

        }
        else{
            $_SESSION['message']="Product is not deleted";
        }

        header("location:index.php");
    }

    public function trash_index(){

        $query ="SELECT * FROM products where is_deleted=1";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $products = $stmt-> fetchAll();
        return $products;
    }

    public function restore($_id){
        $_is_deleted= 0;

        $query = "UPDATE products SET is_deleted=:is_deleted WHERE products.id = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result = $stmt->execute();

        /*$banner = $stmt-> fetch();*/

        var_dump($result);

        if($result){
            $_SESSION['message']="Product is Restored successfully";

        }
        else{
            $_SESSION['message']="Product is not Restored";
        }

        header("location:index.php");
    }

    private function upload(){
        $approot= $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
        if ($_FILES['picture']['name'] !="") {

            $file_name = "IMG_" . time() . "_" . $_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot.'upload/' . $file_name;

            $is_file_moved = move_uploaded_file($target, $destination);
            if ($is_file_moved) {
                $_picture = $file_name;
            }
        }
        else{
            if($_POST['old_image']){
                $_picture= $_POST['old_image'];
            }
        }
        return $_picture;

    }


}
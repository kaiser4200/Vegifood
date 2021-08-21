<?php


namespace Bitm;

use PDO;


class Banner
{
    public $id = null;
    public $title = null;
    public $detail = null;

    public $conn = null;

    public function __construct()
    {

        //Connection to Database.
        $this->conn = new PDO("mysql:host=localhost;dbname=e_shop","root" , "");
// set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    private function upload()
    {
        $approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy';
        $_picture = null;

        if($_FILES['picture']['name'] != "") {
            $file_name = 'IMG_' . time() . '_' . $_FILES['picture']['name'];

            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot . '/upload/' . $file_name;
            $is_file_moved = move_uploaded_file($target, $destination);

            if ($is_file_moved) {
                $_picture = $file_name;
            }
        }else{
            if ($_POST['old_picture']){
            $_picture = $_POST['old_picture'];
            }

        }
        return $_picture;


    }

    public function index(){


//Insert Command
        $query = "SELECT * FROM `banners` WHERE  is_deleted = 0";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $banners = $stmt->fetchAll();
        return $banners;
    }

    public function getActiveBanners(){


        $start_from = 0;
        $total = 3;

        $query = "SELECT * FROM `banners` WHERE  is_active = 1 LIMIT $start_from, $total";
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $banners = $stmt->fetchAll();
        return $banners;
    }

    public function restore($_id){


        $_is_deleted = 0;

//Connect to database
        $conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Insert command
        $query = "UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id; ";

//Prepare a statement
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result = $stmt->execute();

        if($result){
            $_SESSION['message'] = "Banner is restored successfully.";
        }else{
            $_SESSION['message'] = "Banner can't be restored.";
        }

        header("location:index.php");
    }

    public function store($data){

//Working with image upload


        $_picture = $this->upload();
        $_title = $data['title'];
        $_detail = $data['detail'];

        if(array_key_exists('is_active', $data)){
            $_is_active = $data['is_active'];
        }else{
            $_is_active = 0;
        }

        if(array_key_exists('is_deleted', $data)){
            $_is_deleted = $data['is_deleted'];
        }else{
            $_is_deleted = 0;
        }

        $_created_at = date('Y-m-d h:i:s', time());




//Insert Command

        $query = "INSERT INTO `banners` (`title`, `detail`, `picture`, `is_active`, `is_deleted`, `created_at`) VALUES (:title, :detail, :picture, :is_active, :is_deleted, :created_at)";
        $stmt = $this->conn->prepare($query);
        $stmt ->bindParam(':title',$_title);
        $stmt ->bindParam(':detail',$_detail);
        $stmt ->bindParam(':picture',$_picture);
        $stmt ->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $stmt->bindParam(':created_at',$_created_at);


        $result = $stmt->execute();
        var_dump($result);
        if ($result){
            $_SESSION['message'] = "Banner is added successfully";
        }else{
            $_SESSION['message'] = "Banner is not added successfully";

        }
        header("location:index.php");
    }

    public function show($_id){
        $webroot = "http://localhost/Hridoy/";




//Insert Command
        $query = "SELECT * FROM `banners` WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt ->bindParam(':id',$_id);
        $result = $stmt->execute();
        $banner = $stmt->fetch();
        return $banner;
    }

    public function edit($_id){
        $webroot = "http://localhost/Hridoy/";


//Insert Command
        $query = "SELECT * FROM `banners` WHERE id=:id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $banner = $stmt->fetch();
        return $banner;
    }

    public function update($data){



$_picture = $this->upload();
$_title = $data['title'];
$_id =$data['id'];
$_detail =$data['detail'];
if (array_key_exists('is_active', $data)) {
    $_is_active = $data['is_active'];
}else {
    $_is_active = 0;
}
if(array_key_exists('is_deleted', $data)){
    $_is_deleted = $data['is_deleted'];
}else{
    $_is_deleted = 0;
}
$_modified_at = date('Y-m-d h:i:s', time());


//Insert DATA
$query= "UPDATE `banners` SET `title` = :title, `detail` = :detail, `picture` = :picture, `is_active` = :is_active, `is_deleted` = :is_deleted, `modified_at` = :modified_at WHERE `banners`.`id` = :id; ";

//Prepare a statement
$stmt = $this->conn->prepare($query);
$stmt->bindParam(':id',$_id);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':detail',$_detail);
$stmt->bindParam(':picture',$_picture);
$stmt->bindParam(':is_active',$_is_active);
$stmt->bindParam(':is_deleted',$_is_deleted);
$stmt->bindParam(':modified_at',$_modified_at);

$result= $stmt->execute();
//var_dump($result);
if ($result){
    $_SESSION['message'] = "Banner is updated successfully";
}else{
    $_SESSION['message'] = "Banner is not updated successfully";

}
header("location:index.php");

    }

    public function delete($_id){
        session_start();


//Insert DATA
        $query= "DELETE FROM `banners` WHERE `banners`.`id` = :id";
//Prepare Statement
        $stmt= $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result= $stmt->execute();
        var_dump($result);
        if ($result){
            $_SESSION['message'] = "Banner is deleted successfully";
        }else{
            $_SESSION['message'] = "Banner is not deleted successfully";

        }
        header("location:index.php");
    }

    public function trash($_id){
        session_start();

        $_is_deleted = 1;



//Insert command
        $query = "UPDATE `banners` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id; ";

//Prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result = $stmt->execute();

        if($result){
            $_SESSION['message'] = "Banner is deleted successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT deleted.";
        }

        header("location:index.php");
    }

    public function trash_index(){


//Insert command
        $query = "SELECT * FROM `banners` WHERE is_deleted = 1";

//Prepare a statement
        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $banners = $stmt->fetchAll();
        return $banners;
        /*echo "<pre>";
        var_dump($banners);
        echo "</pre>";*/
    }


}
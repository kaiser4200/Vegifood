<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 11/24/2019
 * Time: 6:34 PM
 */

namespace Bitm;

use PDO;


class Label
{
    public function index(){
        session_start();
//Connection to Database.
        $conn = new PDO("mysql:host=localhost;dbname=e_shop","root" , "");
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert Command
        $query = "SELECT * FROM `Labels` WHERE  is_deleted = 0";
        $stmt = $conn->prepare($query);
        $result = $stmt->execute();
        $labels = $stmt->fetchAll();
        return $labels;
    }

    public function store(){
        session_start();
//Working with image upload
        $approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy';
        $webroot = "http://localhost/Hridoy/";

        $file_name = 'IMG_'.time().'_'.$_FILES['picture']['name'];

        $target = $_FILES['picture']['tmp_name'];
        $destination = $approot.'/upload/'.$file_name;
        $is_file_moved = move_uploaded_file($target, $destination);

        if($is_file_moved){
            $_picture = $file_name;
        }else{
            $_picture = null;
        }

        $_title = $_POST['title'];
        $_detail = $_POST['detail'];

        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }else{
            $_is_active = 0;
        }

        if(array_key_exists('is_deleted', $_POST)){
            $_is_deleted = $_POST['is_deleted'];
        }else{
            $_is_deleted = 0;
        }

        $_created_at = date('Y-m-d h:i:s', time());



//Connect to Database PDO method
        $conn = new PDO("mysql:host=localhost;dbname=e_shop","root" , "");

// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert Command

        $query = "INSERT INTO `labels` (`title`, `detail`, `picture`, `is_active`, `is_deleted`, `created_at`) VALUES (:title, :detail, :picture, :is_active, :is_deleted, :created_at)";
        $stmt = $conn->prepare($query);
        $stmt ->bindParam(':title',$_title);
        $stmt ->bindParam(':detail',$_detail);
        $stmt ->bindParam(':picture',$_picture);
        $stmt ->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $stmt->bindParam(':created_at',$_created_at);


        $result = $stmt->execute();
        var_dump($result);
        if ($result){
            $_SESSION['message'] = "Label is added successfully";
        }else{
            $_SESSION['message'] = "Label is not added successfully";

        }
        header("location:index.php");
    }

    public function show(){
        $webroot = "http://localhost/Hridoy/";
        $_id =$_GET['id'];


//Connection to Database.
        $conn = new PDO("mysql:host=localhost;dbname=e_shop","root" , "");
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert Command
        $query = "SELECT * FROM `labels` WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt ->bindParam(':id',$_id);
        $result = $stmt->execute();
        $label = $stmt->fetch();
        return $label;
    }

    public function edit(){
        $webroot = "http://localhost/Hridoy/";
        $_id=$_GET['id'];
//connection to database
        $conn= new PDO("mysql:host=localhost;dbname=e_shop", "root" , "");
// set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert Command
        $query = "SELECT * FROM `labels` WHERE id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $label = $stmt->fetch();
        return $label;
    }

    public function update(){
        $approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
        $webroot = "http://localhost/Hridoy/";

//Working with image upload
        if($_FILES['picture']['name'] != ""){
            $file_name = 'IMG_'.time().'_'.$_FILES['picture']['name'];
            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot.'upload/'.$file_name;

            $is_file_moved = move_uploaded_file($target, $destination);

            if($is_file_moved){
                $_picture = $file_name;
            }else{
                $_picture = null;
            }
        }else{
            $_picture = $_POST['old_picture'];
        }


        session_start();
        $_title = $_POST['title'];
        $_id =$_POST['id'];
        $_detail =$_POST['detail'];
        if (array_key_exists('is_active', $_POST)) {
            $_is_active = $_POST['is_active'];
        }else {
            $_is_active = 0;
        }
        if(array_key_exists('is_deleted', $_POST)){
            $_is_deleted = $_POST['is_deleted'];
        }else{
            $_is_deleted = 0;
        }
        $_modified_at = date('Y-m-d h:i:s', time());

//Connection to Database
        $conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
//Set the PDO error mode to Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert DATA
        $query= "UPDATE `labels` SET `title` = :title, `detail` = :detail, `picture` = :picture, `is_active` = :is_active, `is_deleted` = :is_deleted, `modified_at` = :modified_at WHERE `labels`.`id` = :id; ";

//Prepare a statement
        $stmt = $conn->prepare($query);
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

    public function delete(){
        session_start();
        $_id =$_GET['id'];
//Connection to Database
        $conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
//Set the PDO error mode to Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert DATA
        $query= "DELETE FROM `labels` WHERE `labels`.`id` = :id";
//Prepare Statement
        $stmt= $conn->prepare($query);
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


}
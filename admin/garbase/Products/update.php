<?php
session_start();
$_title = $_POST['title'];
$_id =$_POST['id'];
$_detail =$_POST['detail'];
//Connection to Database
$conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
//Set the PDO error mode to Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert DATA
$query= "UPDATE `products` SET `title` = :title,`detail` = :detail WHERE `products`.`id` =:id; ";
//Prepare Statement
$stmt= $conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':id',$_id);
$stmt->bindParam(':detail',$_detail);
$result= $stmt->execute();
var_dump($result);
if ($result){
    $_SESSION['message'] = "Product is updated successfully";
}else{
    $_SESSION['message'] = "Product is not updated successfully";

}
header("location:index.php");

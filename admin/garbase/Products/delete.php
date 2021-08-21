<?php
session_start();
$_id =$_GET['id'];
//Connection to Database
$conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
//Set the PDO error mode to Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert DATA
$query= "DELETE FROM `products` WHERE `products`.`id` = :id";
//Prepare Statement
$stmt= $conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result= $stmt->execute();
var_dump($result);
if ($result){
    $_SESSION['message'] = "Product is deleted successfully";
}else{
    $_SESSION['message'] = "Product is not deleted successfully";

}
header("location:index.php");
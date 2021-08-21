<?php
session_start();
$_id = $_GET['id'];
$_is_deleted = 0;

//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Insert command
$query = "UPDATE `brands` SET `is_deleted` = :is_deleted WHERE `banners`.`id` = :id; ";

//Prepare a statement
$stmt = $conn->prepare($query);
$stmt->bindParam(':id',$_id);
$stmt->bindParam(':is_deleted',$_is_deleted);
$result = $stmt->execute();

if($result){
    $_SESSION['message'] = "Brand is restored successfully.";
}else{
    $_SESSION['message'] = "Brand can't be restored.";
}

header("location:index.php");
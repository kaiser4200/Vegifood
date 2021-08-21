<?php
session_start();
$_title = $_POST['title'];
$_detail = $_POST['detail'];

//Connect to Database PDO method
$conn = new PDO("mysql:host=localhost;dbname=e_shop","root" , "");

// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert Command

$query = "INSERT INTO `sponsers` (`title`, `detail`) VALUES (:title,:detail)";
$stmt = $conn->prepare($query);
$stmt ->bindParam(':title',$_title);
$stmt ->bindParam(':detail',$_detail);
$result = $stmt->execute();
var_dump($result);
if ($result){
    $_SESSION['message'] = "Sponser is added successfully";
}else{
    $_SESSION['message'] = "Sponser is not added successfully";

}
header("location:index.php");
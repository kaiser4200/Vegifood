<?php
$_title = $_POST['title'];
$_detail = $_POST['detail'];
//Connection to Database
$conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
//Set the PDO error mode to Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert DATA
$query= "INSERT INTO  `pages` (`title`,`detail`) VALUES (:title,:detail)";
//Prepare Statement
$stmt= $conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':detail',$_detail);
$result= $stmt->execute();
var_dump($result);
header("location:index.php");
?>

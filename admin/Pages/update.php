<?php
$_title = $_POST['title'];
$_id = $_POST['id'];
$_detail = $_POST['detail'];
//Connection to Database
$conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
//Set the PDO error mode to Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Update Data
$query= "UPDATE `pages` SET `title` = :title,`detail` = :detail WHERE `pages`.`id` = :id; ";
//Prepare Statement
$stmt= $conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':id',$_id);
$stmt->bindParam(':detail',$_detail);
$result= $stmt->execute();
header("location:index.php");

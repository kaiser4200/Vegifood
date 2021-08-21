<?php
$_id = $_GET['id'];
//Connection to Database
$conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
//Set the PDO error mode to Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert DATA
$query= "DELETE FROM `pages` WHERE `pages`.`id` = :id ";
//Prepare Statement
$stmt= $conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result= $stmt->execute();
header("location:index.php");
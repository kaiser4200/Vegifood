<?php


namespace Bitm;

use PDO;
class User
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
        $query ="SELECT * FROM users";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();

        $users = $stmt-> fetchAll();
        return $users;
    }

    public function store(){
        $_fullname = $_POST['full_name'];
        $_username = $_POST['user_name'];
        $_email = $_POST['email'];
        $_phone_number = $_POST['phone_number'];
        $_password = $_POST['password'];

        $query = "INSERT INTO users (full_name,user_name,email,phone_number,password) VALUES (:full_name,:user_name,:email,:phone_number,:password)";


        //prepare a statement
        $stmt= $this->conn ->prepare($query);
        $stmt->bindParam(':full_name',$_fullname);
        $stmt->bindParam(':user_name',$_username);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone_number',$_phone_number);
        $stmt->bindParam(':password',$_password);

        $result = $stmt->execute();

        if($result){
            $_SESSION['message']="User is added successfully";

        }
        else{
            $_SESSION['message']="User is not added";
        }
        header("location:index.php");
    }

    public function show(){
        $_id = $_GET['id'];

        $query ="SELECT * FROM users where id= :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        $admin = $stmt-> fetch();
        return $admin;
    }

    public function edit(){
        $_id = $_GET['id'];

        $query ="SELECT * FROM users where id= :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        $admin = $stmt-> fetch();
        return $admin;
    }

    public function update(){
        $_id =$_POST['id'];
        $_fullname = $_POST['full_name'];
        $_username = $_POST['user_name'];
        $_email = $_POST['email'];
        $_phone_number = $_POST['phone_number'];
        $_password = $_POST['password'];

//insert
        $query = "UPDATE users SET full_name = :full_name,user_name = :user_name,email= :email,phone_number=:phone_number,password=:password WHERE users.id = :id;";


//prepare a statement
        $stmt= $this->conn ->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':full_name',$_fullname);
        $stmt->bindParam(':user_name',$_username);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone_number',$_phone_number);
        $stmt->bindParam(':password',$_password);


        $result = $stmt->execute();
        var_dump($result);

        if($result){
            $_SESSION['message']="User Data is updated successfully";

        }
        else{
            $_SESSION['message']="User Data is not updated";
        }
        header("location:index.php");
    }

    public function delete(){
        $_id = $_GET['id'];

        $query ="DELETE FROM users WHERE users.id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        /*$banner = $stmt-> fetch();*/

        var_dump($result);
        if($result){
            $_SESSION['message']="User is deleted successfully";

        }
        else{
            $_SESSION['message']="User is not deleted";
        }
        header("location:index.php");
    }

    public function signup(){
        $_fullname = $_POST['full_name'];
        $_username = $_POST['user_name'];
        $_email = $_POST['email'];
        $_phone_number = $_POST['phone_number'];
        $_password = $_POST['password'];

        $query = "INSERT INTO users (full_name,user_name,email,phone_number,password) VALUES (:full_name,:user_name,:email,:phone_number,:password)";


        //prepare a statement
        $stmt= $this->conn ->prepare($query);
        $stmt->bindParam(':full_name',$_fullname);
        $stmt->bindParam(':user_name',$_username);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone_number',$_phone_number);
        $stmt->bindParam(':password',$_password);

        $result = $stmt->execute();

        if($result){
            $_SESSION['message']="User is added successfully";

        }
        else{
            $_SESSION['message']="User is not added";
        }
        header("location:http://localhost/Hridoy/php/public/login.php");
    }

    public function login($user_name, $password){
        $query = "SELECT COUNT(*)AS total FROM `users` WHERE user_name LIKE :user_name AND password LIKE :password ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_name',$user_name);
        $stmt->bindParam(':password',$password);
        $result = $stmt->execute();
        $totalfound = $stmt-> fetch();
        if($totalfound['total'] > 0){
            $_SESSION['is_authenticated']= true;
            header("location:http://localhost/Hridoy/admin/dashboard/index.php");
        }else{
            $_SESSION['is_authenticated']= false;
            header("location:http://localhost/Hridoy/404.php");
        }
    }

}
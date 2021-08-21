<?php
$_id=$_GET['id'];
//connection to database
$conn= new PDO("mysql:host=localhost;dbname=e_shop", "root" , "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Insert Command
$query = "SELECT * FROM `products` WHERE id=:id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result = $stmt->execute();
$product = $stmt->fetch();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Product Edit</title>
</head>
<body>
<h1 class="container">Product Admin</h1>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="update.php">
                    <div class="form-group">
                        <label for="input-id"></label>
                        <input
                            type="hidden"
                            class="form-control"
                            id="input-id"
                            name="id"
                            value="<?=$product['id']?>"
                            aria-describedby="titleHelp"
                            placeholder="Enter Product Title ID">
                    </div>
                    <div class="form-group">
                        <label for="input-title">Title</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-title"
                            name="title"
                            value="<?=$product['title']?>"
                            aria-describedby="titleHelp"
                            placeholder="Enter Product Title">

                    </div>
                    <div class="form-group">
                        <label for="input-detail">Detail</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-detail"
                            name="detail"
                            value="<?=$product['detail']?>"
                            aria-describedby="titleHelp"
                            placeholder="Enter Product Detail">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



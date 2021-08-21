<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\User;

$_admin = new User();
$admins=$_admin->show();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Project Admin Show</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <dl>
                    <dt>ID</dt>
                    <dd> <?php echo $admins['id'];?></dd>
                </dl>
                <dl>
                    <dt>Full Name</dt>
                    <dd> <?php echo $admins['full_name'];?></dd>
                </dl>
                <dl>
                    <dt>User Name</dt>
                    <dd> <?php echo $admins['user_name'];?></dd>
                </dl>
                <dl>
                    <dt>Phone Number</dt>
                    <dd> <?php echo $admins['phone_number'];?></dd>
                </dl>
                <dl>
                    <dt>Email</dt>
                    <dd> <?php echo $admins['email'];?></dd>
                </dl>
                <dl>
                    <dt>Password</dt>
                    <dd> <?php echo $admins['password'];?></dd>
                </dl>

            </div>

        </div>

    </div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

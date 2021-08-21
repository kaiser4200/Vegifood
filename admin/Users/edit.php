<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');

use Bitm\User;

$_admin = new User();
$admin=$_admin->edit();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>User Edit</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="update.php">
                    <div class="form-group">
                        <input type="hidden"
                               class="form-control"
                               id="admin_id"
                               name="id"
                               value="<?php echo $admin['id'];?>" aria-describedby="titleHelp"
                               placeholder="Enter Admin id">
                    </div>
                    <div class="form-group">
                        <label for="admin_name">Full Name</label>
                        <input type="text"
                               class="form-control"
                               id="admin_name"
                               name="full_name"
                               value="<?php echo $admin['full_name'];?>" aria-describedby="titleHelp"
                               placeholder="Enter Admin Name">
                    </div>
                    <div class="form-group">
                        <label for="admin_name">User Name</label>
                        <input type="text"
                               class="form-control"
                               id="admin_name"
                               name="user_name"
                               value="<?php echo $admin['user_name'];?>" aria-describedby="titleHelp"
                               placeholder="Enter Admin Name">
                    </div>
                    <div class="form-group">
                        <label for="admin_mail">Email</label>
                        <input type="email"
                               class="form-control"
                               id="admin_mail"
                               name="mail"
                               value="<?php echo $admin['email'];?>" aria-describedby="titleHelp"
                               placeholder="Update Your E-mail address">
                    </div>
                    <div class="form-group">
                        <label for="admin_mob">Phone</label>
                        <input type="text"
                               class="form-control"
                               id="admin_mob"
                               name="mob"
                               value="<?php echo $admin['phone_number'];?>" aria-describedby="titleHelp"
                               placeholder="Update Your E-mail address">
                    </div>
                    <div class="form-group">
                        <label for="admin_pass">Password</label>
                        <input type="password"
                               class="form-control"
                               id="admin_pass"
                               name="pass"
                               value="<?php echo $admin['password'];?>" aria-describedby="titleHelp"
                               placeholder="Update Your Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

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

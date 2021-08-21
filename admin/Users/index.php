<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');
use Bitm\User;
$_admin = new User();
$admins = $_admin->index();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Project Admin Index</title>
</head>
<body>
<section>
    <div class="container">
        <p class="text-center text-success font-weight-bold mt-2">
            <?php
            echo $_SESSION['message'];
            $_SESSION['message']="";
            ?>
        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link h4" href="create.php">
                            <button type="button" class="btn btn-outline-success">Add An Item</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-responsive table-hover">
                    <thead class="thead">
                    <tr class="" style="background-color: #82ae46">
                        <th scope="col"> Full Name</th>
                        <th scope="col"> User Name</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Phone</th>
                        <th scope="col"> Password</th>
                        <th scope="col"> Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    if(count($admins)>0):
                        foreach ($admins as $admin) :
                            ?>
                            <tr>
                                <td><a href="show.php?id=<?php echo $admin['id']?>"><?php echo $admin['full_name']?></a>  </td>
                                <td><a href="show.php?id=<?php echo $admin['id']?>"><?php echo $admin['user_name']?></a>  </td>
                                <td> <?php echo $admin['email']?> </td>
                                <td> <?php echo $admin['phone_number']?> </td>
                                <td> <?php echo $admin['password']?> </td>
                                <td><a href="edit.php?id=<?php echo $admin['id']?>">EDIT</a>  |
                                    <a href="delete.php?id=<?php echo $admin['id']?>"onclick="return confirm('Are you sure you want to delete')">Delete</a>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <tr>
                            <td colspan="2"> No Banner is Available. <a href="create.php">Click here to add one</a></td>
                        </tr>
                    <?php
                    endif;
                    ?>
                    </tbody>
                </table>

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

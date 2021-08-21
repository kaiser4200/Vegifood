<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once ($approot.'vendor/autoload.php');


$_brand = new \Bitm\Brand();
$brands = $_brand->index();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Brands</title>
</head>
<body>
<section>
    <div class="container">
        <p class="text-center font-weight-bolder text-success">
            <?php
                echo $_SESSION['message'];
                $_SESSION['message']= "";
            ?>
        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <strong><a class="nav-link" href="create.php">Add an item</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link" href="trash_index.php">All trashed items</a></strong>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Action</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (count($brands) > 0):
                    foreach ($brands as $brand):
                    ?>
                    <tr>
                        <td><a href="show.php?id=<?= $brand['id']; ?>"><?= $brand['title']; ?></a></td>
                        <td><a href="edit.php?id=<?=$brand['id']; ?>">Edit </a>|                                <a href="trash.php?id=<?= $brand['id'];?>" onclick="return confirm('Are you sure you want to trash?')">Trash</a></td>
                        <td>
                            <?php
                            echo ($brand['is_active'])?'Active':'Deactive';
                            ?>
                        </td>
                    </tr>
                    <?php
                        endforeach;
                        else:
                    ?>
                    <tr>
                        <td colspan="2">No brand is available. <a href="create.php">Click here to add Brand title.</a></td>
                    </tr>
                    <?php
                    endif;
                    ?>
                    </tbody>
                </table>
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

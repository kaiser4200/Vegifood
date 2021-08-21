<?php
session_start();
//Connect to database
$conn = new PDO("mysql:host=localhost;dbname=e_shop", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Insert command
$query = "SELECT * FROM `labels` WHERE is_deleted = 1";

//Prepare a statement
$stmt = $conn->prepare($query);
$result = $stmt->execute();
$labels = $stmt->fetchAll();
/*echo "<pre>";
var_dump($banners);
echo "</pre>";*/

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lists</title>


</head>
<body>
<section>
    <div class="container">
        <p class="text-center font-weight-bolder text-success">
            <?php
            echo $_SESSION['message'];
            $_SESSION['message'] = "";
            ?>
        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <ul class="nav">
                    <li class="nav-item">
                        <h4><a class="nav-link" href="index.php">All trashed items</a></h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <table class="table table-bordered">
                    <thead>
                    <tr>

                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(count($labels) > 0):
                        foreach($labels as $label):
                            ?>
                            <tr>

                                <td><a href="show.php?id=<?= $label['id'];?>"><?= $label['title'];?></a></td>
                                <td>
                                    <?php
                                    echo ($label['is_active'])?'Active':'Deactive';
                                    ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?= $label['id'];?>">Edit</a> |
                                    <a href="delete.php?id=<?= $label['id'];?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a> |

                                    <a href="restore.php?id=<?= $label['id'];?>" onclick="return confirm('Are you sure you want to restore?')">Restore</a>

                                </td>


                            </tr>
                        <?php
                        endforeach;
                    else:
                        ?>
                        <tr>
                            <td colspan="2">No trashed banner is available. <a href="index.php">Click here to trash one.</a></td>
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

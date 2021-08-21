<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once ($approot.'vendor/autoload.php');


$_label = new \Bitm\Label();
$label = $_label->show();


?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Label</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <dl>
                    <dt>ID</dt>
                    <dd><?=$label['id']; ?></dd>
                    <dt>Title</dt>
                    <dd><?=$label['title']; ?></dd>
                    <dt>Detail</dt>
                    <dd><?=$label['detail']; ?></dd>
                    <dt>Is Active</dt>
                    <dd>
                        <?php
                        /*if ($banner['is_active']== 1){
                            echo "This banner is active";
                        }else{
                            echo "This banner is deactive";

                        }*/
                        echo
                        ($label['is_active'])?'Active':'Deactive';
                        ?></dd>

                    <dt>Is Deleted</dt>
                    <dd>
                        <?php
                        echo ($label['is_deleted'])?'deleted':'Undeleted';
                        ?>
                    </dd>

                    <dt>Picture</dt>
                    <dd>
                        <?= $label['picture']; ?>
                        <img width="200" height="200" src="<?php echo $webroot;?>/upload/<?= $label['picture']; ?>">
                    </dd>
                    <dt>Created At</dt>
                    <dd><?= $label['created_at'];  ?></dd>
                    <dt>Modified At</dt>
                    <dd><?= $label['modified_at'];  ?></dd>
                </dl>
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




<?php
$approot = $_SERVER['DOCUMENT_ROOT'].'/Hridoy/';
$webroot = 'http://localhost/Hridoy';
include_once ($approot.'vendor/autoload.php');


$_label = new \Bitm\Label();
$_label = $_label->edit();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Label Edit</title>
</head>
<body>
<h1 class="container">Labels Admin</h1>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="update.php"enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="input-id"></label>
                        <input
                            type="hidden"
                            class="form-control"
                            id="input-id"
                            name="id"
                            value="<?= $label['id']; ?>"
                            aria-describedby="titleHelp"
                            placeholder="Enter Banner Title ID">
                    </div>
                    <div class="form-group">
                        <label for="input-title">Title</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-title"
                            name="title"
                            value="<?= $label['title']; ?>"
                            aria-describedby="titleHelp"
                            placeholder="Enter Banner Title">

                    </div>
                    <div class="form-group">
                        <label for="input-detail">Detail</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-detail"
                            name="detail"
                            value="<?= $label['detail']; ?>"
                            aria-describedby="titleHelp"
                            placeholder="Enter Banner Detail">
                    </div>

                    <div class="form-group">
                        <label for="input-link">Short Description</label>
                        <textarea
                                class="form-control"

                                name="short-description"
                                value=""
                        >
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="input-link">Description</label>
                        <textarea
                                class="form-control"
                                name="description"
                                value="">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="input-sales">Total Sales</label>
                        <input
                                type="number"
                                class="form-control"
                                id="input-sales"
                                name="total_sales"
                                value=""
                                aria-describedby="saleseHelp"
                        >

                    </div>
                    <div class="form-group">
                        <label for="input-product">Product Type</label>
                        <input
                                type="text"
                                class="form-control"
                                id="input-product"
                                name="product_type"
                                value="<?= $label['product type']; ?>"
                                aria-describedby="productHelp"
                        >
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label" for="input-is-new">
                        <input
                                type="checkbox"
                                class="form-check-input"
                                id="input-is-new"
                                name="is_new"
                                value=""
                        >Is New</label>
                    </div>
                    <div class="form-group">
                        <label for="input-cost">Cost</label>
                        <input
                                type="number"
                                class="form-control"
                                id="input-cost"
                                name="cost"
                                value=""
                        >
                    </div>
                    <div class="form-group">
                        <label for="input-mrp">MRP</label>
                        <input
                                type="number"
                                class="form-control"
                                id="input-mrp"
                                name="mrp"
                                value=""
                        >
                    </div>
                    <div class="form-group">
                        <label for="input-special-price">Special Price</label>
                        <input
                                type="number"
                                class="form-control"
                                id="input-special-price"
                                name="special_price"
                                value=""
                        >
                    </div>
                    <div class="form-group form-check">

                        <input
                                type="checkbox"
                                class="form-check-input"
                                id="input-soft-delete"
                                name="soft-delete"
                                value=""
                        >
                        <label for="input-soft-delete">Soft Delete</label>
                    </div>
                    <div class="form-group form-check">

                        <input
                                type="checkbox"
                                class="form-check-input"
                                id="input-is-draft"
                                name="is_draft"
                                value=""
                        >
                        <label for="input-is-draft">Is Draft</label>
                    </div>



                        <div class="form-group form-check">
                            <label for="input-is-active"
                                   class="form-check-label">
                                <?php
                                if ($banner['is_active'] == 0){
                                ?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="input-is-active"
                                        name="is_active"
                                        value="1"
                                        aria-describedby="isactiveHelp">
             <?php
             }else {

                                ?>
                                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="input-is-active"
                                        name="is_active"
                                        value="1"
                                        aria-describedby="isactiveHelp">
             <?php
             }
             ?>



                                Is Active</label>
                        </div>
                    <div class="form-group form-check">
                        <label for="input-is-deleted" class="form-check-label">
                            <?php
                            if($label['is_deleted'] == 0){
                                ?>

                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="input-is-deleted"
                                        name="is_deleted"
                                        value="1"
                                        aria-describedby="isDeletedHelp">
                                <?php
                            }else {
                                ?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="input-is-deleted"
                                        name="is_deleted"
                                        checked="checked"
                                        value="1"
                                        aria-describedby="isDeletedHelp">
                                <?php
                            }
                            ?>

                            Is Deleted
                        </label>
                    </div>


                    <div class="form-group">
                        <label for="input-img">Picture</label>
                        <input
                                type="file"
                                class="form-control-file"
                                id="input-img"
                                name="picture"
                                value="<?= $label['picture']; ?>">
                        <img src="<?php echo $webroot;?>upload/<?= $label['picture']; ?>">
                        <input
                                type="hidden"
                                name="old_picture"
                                value="<?= $label['picture']; ?>">
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



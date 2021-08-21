<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Create Product</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="store.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="p_input_title">Title</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_title"
                               name="pro_title"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product Title">
                    </div>

                    <div class="form-group">
                        <label for="p_input_shortdes">Short Description</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_shortdes"
                               name="p_short_des"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product short description">
                    </div>
                    <div class="form-group">
                        <label for="p_input_des">Description</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_des"
                               name="p_des"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product description">
                    </div>
                    <div class="form-group">
                        <label for="product_pic">Picture</label>
                        <input type="file"
                               class="form-control-file"
                               id="product_pic"
                               name="picture"
                               value=""
                        >
                    </div>
                    <div class="form-group">
                        <label for="p_mrp">MRP</label>
                        <input type="number"
                               class="form-control"
                               id="p_mrp"
                               name="mrp"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product description">
                    </div>
                    <div class="form-group">
                        <label for="totalSales">Total Sales</label>
                        <input type="number"
                               class="form-control"
                               id="totalSales"
                               name="product_t_s"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Product Total Sales">
                    </div>
                    <div class="form-group">
                        <label for="product_type">Product Type</label><br>
                        <select name="product_p_type" id="product_type">
                            <option value="jacket">Fruits</option>
                            <option value="Pants">Juices</option>
                            <option value="Shirts">Vegetables</option>
                            <option value="Saree">Dried</option>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <label for="product_actv" class="form-check-label">
                            <input type="checkbox"
                                   class="form-check-input"
                                   id="product_actv"
                                   name="is_active"
                                   value="1"
                                   aria-describedby="isActiveHelp"
                                   placeholder="Enter Is Active">
                            Is active
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label for="product_isdel" class="form-check-label">
                            <input type="checkbox"
                                   class="form-check-input"
                                   id="product_isdel"
                                   name="is_deleted"
                                   value="1"
                                   aria-describedby="isDeleteHelp">
                            Is delete
                        </label>
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
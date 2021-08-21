<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Vegefoods</title>
</head>
<body>


<header>
    <div class="header-top">
        <div class="container">

            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md d-flex topper">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center">
                            <div class="icon-phone2">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="text">+ 1234 5678 90</div>
                    </div>
                    <div class="col-md d-flex topper">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center">
                            <div class="icon-paper-plane">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                        </div>
                        <div class="text">webpirets@gmail.com</div>
                    </div>
                    <div class="col-md d-flex topper ">
                        <div class="text">3-5 Business days delivery &amp; Free Returns</div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                VEGEFOODS
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">HOME <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item">
                        <a href="shop.php" class="nav-link" >SHOP </a>
                    </li>
                    <li class="nav-item"><a href="about.php" class="nav-link">ABOUT</a></li>
                    <li class="nav-item active"><a href="login.php" class="nav-link">LOGIN</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT</a></li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-shopping-cart"></i> (0)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>


<?php

?>
<section id="createAnAccount" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-7 offset-2">
                <h4 class="createAccount">CREATE AN ACCOUNT</h4>
                <form method="post" action="<?=$webroot?>/admin/Users/signup.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="input-user-name">User Name</label>
                        <input
                                type="text"
                                class="form-control"
                                id="input-user-name"
                                name="user_name"
                                value="">
                    </div>
                    <div class="form-group">
                        <label for="input-password">Password</label>
                        <input
                                type="password"
                                class="form-control"
                                id="input-password"
                                name="password"
                                value="">
                    </div>

                    <div class="form-group">
                        <label for="input-full-name">Full Name</label>
                        <input
                                type="text"
                                class="form-control"
                                id="input-full-name"
                                name="full_name"
                                value="">
                    </div>
                    <div class="form-group">
                        <label for="input-email">Email</label>
                        <input
                                type="email"
                                class="form-control"
                                id="input-email"
                                name="email"
                                value="">
                    </div>
                    <div class="form-group">
                        <label for="input-phone-number">Phone Number</label>
                        <input
                                type="tel"
                                class="form-control"
                                id="input-phone-number"
                                name="phone_number"
                                value="">
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
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
<script>
    $('.carousel').carousel({
        interval: 1600
    })
</script>
</body>
</html>

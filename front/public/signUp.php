<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css">

    <title>Classic</title>
</head>
<body>
<!--Markup for Header-->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <p class="wc-message">Default Welcome Message !</p>
                </div>
                <div class="col-9 d-none d-lg-block">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">WishList</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CheckOut</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Company</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Login</a>
                        </li>
                        <li class="nav-item search">
                            <a class="nav-link" href="#">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search Entire store here" aria-label="Search Entire store here" aria-describedby="button-addon">
                                    <div class="input-group-append">
                                        <button class="btn btn-success" type="button" id="button-addon"><i class="fas fa-search d-inline-block"></i></button>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-9 d-lg-none">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-list"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-shopping-basket"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-blog"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">

                                <i class="fas fa-building"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-sign-in-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo-classic.png" alt="Logo Icon" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product-catgeory.html">WOMEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">MEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ELECTRONICS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FURNITURE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KIDS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CUSTOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CUSTOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-pound-sign"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-euro-sign"></i></a>
                    </li>
                    <li class="nav-item currency">
                        <a class="nav-link" href="#">
                            <i class="fas fa-dollar-sign"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="img/flag-united-kingdom.png" alt="United Kingdom Flag">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="img/flag-france.png" alt="United France">
                        </a>
                    </li>
                    <li class="nav-item flag">
                        <a class="nav-link" href="#">
                            <img src="img/flag-germany.png" alt="Germany">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-success" href="#">
                            <i class="fas fa-cart-plus"></i>
                            <span>(0)</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<!--Markup for create an account section-->
<section id="createAnAccount" class="mt-5">
    <div class="container">
        <h4 class="createAccount">CREATE AN ACCOUNT</h4>
        <form>
            <fieldset class="border p-3 m-2">
                <legend>Personal Information</legend>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input
                            type="text"
                            class="form-control"
                            id="firstName"
                            name="firstName"
                            value=""
                            aria-describedby="firstNameHelp"
                            placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="firstName">Last Name</label>
                    <input
                            type="text"
                            class="form-control"
                            id="lastName"
                            name="lastName"
                            value=""
                            aria-describedby="firstNameHelp"
                            placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <input
                            type="email"
                            class="form-control"
                            id="InputEmail1"
                            name="email"
                            value=""
                            aria-describedby="emailHelp"
                            placeholder="Enter email">
                </div>
                <div class="form-group form-check">
                    <input
                            type="checkbox"
                            class="form-check-input"
                            name="signUp"
                            value="signUp"
                            id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"><small>Sign Up for Newsletter</small></label>
                </div>
            </fieldset>
            <fieldset class="border p-3 m-2">
                <legend>Login In formation</legend>
                <div class="form-group">
                    <label for="inputPassword1">Password</label>
                    <input
                            type="password"
                            class="form-control"
                            id="inputPassword1"
                            name="password"
                            value=""
                            placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword1">Confirm Password</label>
                    <input
                            type="password"
                            class="form-control"
                            id="confirmPassword1"
                            name="password"
                            value=""
                            placeholder="Enter Confirm Password">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </fieldset>
        </form>
    </div>
</section>

<!--Markup for divider-->
<div id="divider">

</div>
<!--Markup for Footer-->
<footer class="mt-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-6">
                <div class="row info-text">
                    <div class="col-sm-6">
                        <h3>SERVICE FOR YOU</h3>
                        <ul class="fa-ul">
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>Order Status</li>
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>Payment Methods</li>
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>Delivery & Returns</li>
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>Privacy Policy</li>
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>Terms & Conditions</li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h3>ACCOUNT INFO</h3>
                        <ul class="fa-ul">
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>My Account</li>
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>Order History</li>
                            <li><span class="fa-li" ><i class="fas fa-caret-right fa-lg"></i></span>Wish List</li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-8 offset-2 payment">
                            <i class="fab fa-cc-visa fa-3x mr-1"></i> <i class="fab fa-cc-mastercard fa-3x mr-1"></i> <i class="fab fa-cc-stripe fa-3x mr-1"></i> <i class="fab fa-cc-jcb fa-3x mr-1"></i> <i class="fab fa-cc-paypal fa-3x mr-1"></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 info-text">
                <h3>OUR HISTORY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut cumque cupiditate deleniti dicta dolorem doloremque est et, inventore modi neque pariatur possimus quaerat qui rerum sit velit vero. Provident!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut cumque cupiditate deleniti dicta dolorem doloremque est et, inventore modi neque pariatur possimus quaerat qui rerum sit velit vero. Provident! </p>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-3 pb-3">
        <div class="container">
            <p class="text-center">&copy; Copyright 2015 by Classic. All Rights Reserved.</p>
        </div>
    </div>

</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
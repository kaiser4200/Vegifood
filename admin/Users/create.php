<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>User Create</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="store.php">
                    <div class="form-group">
                        <label for="user_fullname">Full Name</label>
                        <input type="text"
                               class="form-control"
                               id="user_fullname"
                               name="full_name"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter yor Full Name">
                    </div>
                    <div class="form-group">
                        <label for="user_username">User Name</label>
                        <input type="text"
                               class="form-control"
                               id="user_username"
                               name="user_name"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter yor User Name">
                    </div>
                    <div class="form-group">
                        <label for="user_mail">Email</label>
                        <input type="email"
                               class="form-control"
                               id="user_mail"
                               name="mail"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Your E-mail">
                    </div>
                    <div class="form-group">
                        <label for="user_mob">Mobile Number</label>
                        <input type="text"
                               class="form-control"
                               id="user_mob"
                               name="mobile"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="user_pass">Password</label>
                        <input type="password"
                               class="form-control"
                               id="user_pass"
                               name="pass"
                               value=""
                               aria-describedby="titleHelp"
                               placeholder="Enter Your Password">
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
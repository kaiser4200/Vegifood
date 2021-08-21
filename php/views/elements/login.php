

<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/Hridoy/config.php');
?>
<section>

<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-sm-center align-items-center">
            <div id="login-column" class="col-md-4">
                <div id="login-box" class="col-md-12">
                    <h2 class="text-center text-info">Login</h2>
        <form method="post" action="<?=$webroot?>../admin/Users/login-processor.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="input-user-name" class="text-info"><strong>User Name</strong></label>
                <input
                        type="text"
                        class="form-control"
                        id="input-user-name"
                        name="user_name"
                        value="">
            </div>
            <div class="form-group">
                <label for="input-password" class="text-info"><strong>Password</strong></label>
                <input
                        type="password"
                        class="form-control"
                        id="input-password"
                        name="password"
                        value="">
            </div>
            <div class="form-group">
                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label>
                <br>

                <button type="submit" class="text-success">Submit</button>
            </div>
            <div id="register-link" class="text-right" >
                <a href="signup.php" target="_blank" class="btn btn-primary">Sign Up here</a>
            </div>



        </form>
                </div>
            </div>
         </div>
      </div>
    </div>
</section>

<div class="container">
    <section id="login">
        <div class="row">

            <h1 class="section-title text-center">Login</h1>

            <div class="col-md-6 col-md-offset-3">

                <!-- checks username and password, if incorrect throws an error -->
                <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                    <div class="alert alert-danger">
                        <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['ERROR_MESSAGE']); ?>
                <?php endif; ?>

                <!-- checking to see if user is already signed in, if so success -->
                <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                    <div class="alert alert-success">
                        <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
                <?php endif; ?>

                <!-- LOGIN FORM -->
                <form method="POST" action="" data-validation data-required-message="This field is required" class="text-center">
                    <!-- checks to see if you are logged in -->
                    <?php
                        if (Auth::check()) {
                           echo '<h3>Login Successful</h3>'; 
                        }
                    ?>
                    <!-- email -->
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
                    </div>
                    <!-- password -->
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                    </div>

                    <div class="row">
                        <!-- login -->
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <button type="submit" class="btn btn-primary loginButtons">Login</button>
                        </div>
                        <!-- signup -->
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="/signup" class="btn btn-success loginButtons">Go To Signup</a>
                        </div>
                    </div>

                </form> <!-- closes form -->
            </div> <!-- closing div for col-md-6 -->
        </div> <!-- closes row -->
    </section> <!-- closes section login -->
</div> <!-- closes container -->

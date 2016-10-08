<!--Page for user account home-->
<div class="container">
    <section id="login">
        <div class="row">

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

<!-- form for sign up -->
                <form method="POST" class="text-center">
                    <div class="container">

                        <!-- image -->
                        <img class="img-circle" src="<?= $user->image_url; ?>">

                        <!-- usermna -->
                        <h1 class="section-title text-center"><?= $user->username; ?></h1>

                        <!-- profile info -->
                        <h4 class="section-title"><?= $user->email; ?></h4>

                        <!-- edit profile -->
                        <a href="/editUser?userId=<?php echo($user->attributes['id']); ?>" class="btn btn-primary btn-md active" role="button">Update Profile</a>
                    </div>

                    <!-- YOUR ADS -->
                    <div class="container">
                        <h1>Your Ads</h1>

                        <!-- ads info -->
                        <?php foreach ($items->attributes as $item) : ?>
                            <div class="row">
                                <div class="thumbnail">
                                <!-- image -->
                                    <!-- <div> -->
                                        <img src="<?= $item['image_url']; ?>" alt="Image File Path Bad">
                                    <!-- </div> -->

                                <!-- item info -->
                                    <div class="panel-body">
                                        <ul class="list-group">
                                            <li class="list-group-item active">Item Information</li>
                                            <li class="list-group-item"><b><?= $item['headline']; ?></b></li>
                                            <li class="list-group-item"><b>Price: </b><?= '$' . $item['price']; ?></li>
                                            <li class="list-group-item">
                                                <b>State: </b> <?= $item['state']; ?><br>
                                                <b>County:</b> <?= $item['county']; ?></li>
                                            <li class="list-group-item"><b>Description: </b><?= $item['description']; ?></li>
                                        </ul>

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                            <a href="/edit?itemId=<?php echo($item['id']); ?>" class="btn btn-primary loginButtons">Edit Ad</a>
                                        </div>
                                    </div>

                            </div> <!-- closes the row class -->
                        <?php endforeach; ?>
                    </div>
                </form>
        </div> <!-- close row -->
    </section> <!-- close login -->
</div> <!-- close container -->

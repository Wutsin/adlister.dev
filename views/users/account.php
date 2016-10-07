<!--Page for user account home-->
<div class="container">
    <section id="login">
        <div class="row">

            <h1 class="section-title text-center"><?= $user->username; ?></h1>

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
                        <h4></h4>
                        <img src="<?= $user->image_url; ?>">

                        <!-- profile info -->
                        <h4 class="section-title"></h4>

                        <h4 class="section-title"><?= $user->email; ?></h4>
                    </div>

                    <div class="container">
                        <h1>Your Ads</h1>

                        <!-- ads info -->
                        <?php foreach ($items->attributes as $item) : ?>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="thumbnail">
                                        <img src="<?= $item['image_url']; ?>" alt="Image File Path Bad" class="custom-adSHOW-ad-img">
                                        <div class="caption">
                                            <p>
                                                <?= $item['description']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary custom-adSHOW-show-btn center-block">Edit Ad</button>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="custom-adSHOW-center">
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                <li class="list-group-item active">Item Information</li>
                                                <li class="list-group-item"><?= $item['headline']; ?></li>
                                                <li class="list-group-item"><?= '$' . $item['price']; ?></li>
                                                <li class="list-group-item">State: <?= $item['state']; ?></li>
                                                <li class="list-group-item">County: <?= $item['county']; ?></li>
                                                <li class="list-group-item">Type of Item: <?= $item['item_type']; ?></li>
                                            </ul>
                                        </div>
                                        <p>Posted by <a href="/account?userId=<?= $user->id; ?>"><?= $user->username ; ?></a></p>
                                    </div>
                                    <button class="btn btn-danger custom-adSHOW-show-btn center-block">Delete Ad</button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>


        </div> <!-- close row -->
    </section> <!-- close login -->
</div> <!-- close container -->

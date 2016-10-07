<!-- adlister.dev/show -->
<!--Page for single advertisement -->

<main class="container">
    <h2 class="custom-adSHOW-ad-show-header">Item Description</h2>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="thumbnail">
                    <img src="<?= $items->attributes['image_url']; ?>" alt="Image File Path Bad" class="custom-adSHOW-ad-img">
                    <div class="caption">
                        <p>
                            <?= $items->attributes['description']; ?>
                        </p>
                    </div>
                </div>
                <a href="/edit?id=<?= $items->attributes['id']; ?>"><button class="btn btn-primary custom-adSHOW-show-btn center-block">Edit Ad</button></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="custom-adSHOW-center">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item active">Item Information</li>
                            <li class="list-group-item"><?= $items->attributes['headline']; ?></li>
                            <li class="list-group-item"><?= '$' . $items->attributes['price']; ?></li>
                            <li class="list-group-item">State: <?= $items->attributes['state']; ?></li>
                            <li class="list-group-item">County: <?= $items->attributes['county']; ?></li>
                            <li class="list-group-item">Type of Item: <?= $item_types->attributes['name']; ?></li>
                        </ul>
                    </div>
                    <p>Posted by <a href="/account?userId=<?= $user->id; ?>"><?= $user->username ; ?></a></p>
                </div>
                <button class="btn btn-danger custom-adSHOW-show-btn center-block">Delete Ad</button>
            </div>
        </div>
    </div>
</main>

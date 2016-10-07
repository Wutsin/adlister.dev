<main>
    <h2>Items for Sale</h2>
    <div class="container">
        <div class="row">

            <?php foreach($items->attributes as $item) : ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="thumbnail customThumbNail">
                    <a href="/show?itemId=<?= $item['id']; ?>" class="thumbnail custom-adINDEX-anchor">
                        <div class="caption customCaption">
                            <img src=<?= $item['image_url']; ?> alt="Image File Path Bad" class="custom-adINDEX-ad-img">
                            <h4 class="custom-adINDEX-h3"><?= $item['headline']; ?></h4>
                            <p><?= '$' . $item['price']; ?></p>
                            <p>State: <?= $item['state']; ?></p>
                            <p>County: <?= $item['county']; ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>

<main>
    <div class="container">
        <div class="row">
            <!-- SORT BY -->
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-12">
                <div class="dropdown form-group pull-right">
                    <label>Sort By</label>
                    <select name="item_type" onchange="location = this.value;" class="btn btn-default dropdown-toggle">
                        <option value="/ads?search=" selected="selected">--Sort By--</option>
                        <option value="/ads?search=">All</option>
                        <option value="/ads?search=bicycle">Bicycle</option>
                        <option value="/ads?search=unicycle">Unicycle</option>
                        <option value="/ads?search=skateboard">Skateboard</option>
                    </select>
                </div>
            </div>
            
            <!-- ITEMS FOR SALE -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 class="itemsForSaleHeader">Items for Sale</h2>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <?php if($search === null) : ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3>No Results Were Found</h3>
                    </div>
                <?php else : ?>
                <?php foreach($items->attributes as $item) : ?>
                    <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                        <div class="thumbnail customThumbNail">
                            <a href="/show?itemId=<?= $item['id']; ?>">
                                <div class="caption customCaption">
                                    <!-- item image -->
                                    <img src=<?= $item['image_url']; ?> alt="Image File Path Bad" class="custom-adINDEX-ad-img">
                                    <!-- item info -->
                                    <h4 class="custom-adINDEX-h3"><?= $item['headline']; ?></h4>
                                    <p><?= '$' . $item['price']; ?></p>
                                    <p>State: <?= $item['state']; ?></p>
                                    <p>County: <?= $item['county']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div> <!-- end row -->
    </div> <!-- end container -->
</main>

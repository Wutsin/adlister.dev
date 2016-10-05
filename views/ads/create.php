<!-- adlister.dev/create -->
<!--Page for creating new advertisement listings-->

<style type="text/css">
   /* * {
        border: 1px lime solid;
    }*/
    body {
        background-color: LightSteelBlue;
    }
    .custom-ad-img {
        width: 100%;
    }
    .custom-ad-img a {
        margin: 0;
    }
    .custom-h3 {
        text-align: center;
    }
    .custom-anchor {
        margin: 0;
    }
    .custom-ad-edit-main {
        text-align: center;
    }
</style>

<main class="container-fuid custom-ad-edit-main">
    <h2>Create Item</h2>
    <!-- <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2"> -->
    <div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
    <!-- <div> -->
        <form class="form-group">
            <label for="name">Name</label><br>
            <input id="name" type="text" name="name" class="form-control" value=""><br>
            <label>Price</label><br>
            <input id="price" type="text" name="price" class="form-control" value=""><br>
            <label>Description</label><br>
            <textarea id="description" type="text" name="description" class="form-control" value="" rows="5"></textarea><br>
            <button type="submit" class="btn btn-default">Submit</button><br>
        </form>
    <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-preview thumbnail round" style="width: 200px; height: 150px;"></div>
        <div>
            <span class="btn btn-file">
                <span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" />
            </span>
            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
        </div>
    </div>
    </div>
</main>



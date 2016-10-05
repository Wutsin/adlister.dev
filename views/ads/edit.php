<!-- adlister.dev/edit -->
<!--Page that includes the form to edit an existing ad-->

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
    <h2>Update Item</h2>
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
            <button type="submit" class="btn btn-default">Update</button><br>
        </form>
    </div>
</main>




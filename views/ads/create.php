<!-- adlister.dev/create -->
<!--Page for creating new advertisement listings-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ad Create Draft</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="===PATH HERE===">
</head>

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

<!-- image -->

<!-- jQuery Version 1.11.1 -->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



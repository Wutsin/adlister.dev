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


    .imageupload.imageupload-disabled {
      cursor: not-allowed;
      opacity: 0.60;
    }
    .imageupload.imageupload-disabled > * {
      pointer-events: none;
    }
    .imageupload .panel-title {
      padding-top: 8px;
    }
    .imageupload .alert {
      margin-bottom: 10px;
    }
    .imageupload .btn-file {
      overflow: hidden;
      position: relative;
    }
    .imageupload .btn-file input[type="file"] {
      cursor: inherit;
      display: block;
      font-size: 100px;
      min-height: 100%;
      min-width: 100%;
      opacity: 0;
      position: absolute;
      right: 0;
      text-align: right;
      top: 0;
    }
    .imageupload .file-tab button {
      display: none;
    }
    .imageupload .file-tab .thumbnail {
      margin-bottom: 10px;
    }
    .imageupload .url-tab {
      display: none;
    }
    .imageupload .url-tab .thumbnail {
      margin: 10px 0;
    }
</style>

<main class="container-fluid custom-ad-edit-main imageupload">
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
            
           <!-- Image uploader -->
            <div class="imageupload panel panel-default">
                <!-- top of image upload box -->
                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Upload Image</h3>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default active">File</button>
                        <button type="button" class="btn btn-default">URL</button>
                    </div>
                </div>

                <!-- middle of image box -->
                <div class="file-tab panel-body">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>

                <!-- bellow box -->
                <div class="url-tab panel-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Image URL">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default">Submit</button>
                        </div>
                    </div>

                    <!-- The URL is stored here. -->
                    <button type="button" class="btn btn-default">Remove</button>
                    <input type="hidden" name="image-url">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button><br>

        </form>
    <!-- <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-preview thumbnail round" style="width: 200px; height: 150px;"></div>
        <div>
            <span class="btn btn-file">
                <span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" />
            </span>
            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
        </div>
    </div> -->


    </div>
</main>


<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
<script type="text/javascript" src="/js/image-load.js"></script>
<script>
    $('.imageupload').imageupload();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



<!-- adlister.dev/edit -->
<!--Page that includes the form to edit an existing ad-->

<style type="text/css">
   /* Styling for ad edit */

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

    /*Image Upload CSS*/
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

    /* Country/County uploader */
    #county_drop_down, #no_county_drop_down, #loading_county_drop_down {
        display: none;
    }
</style>

<main class="container-fluid custom-ad-edit-main imageupload">
    <h2>Update Item</h2>
    <!-- <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2"> -->
    <div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
    <!-- <div> -->
        <form class="form-group" name="form">
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



            <!-- States/Counties Selector -->
            <table class="table table-bordered">
               <tr>
                 <td>State</td>
                 <td><select id="state" name="state" class="btn btn-default dropdown-toggle">
                   <option value='AL'>Alabama</option>
                   <option value='AK'>Alaska</option>
                   <option value='AZ'>Arizona</option>
                   <option value='AR'>Arkansas</option>
                   <option value='CA'>California</option>
                   <option value='CO'>Colorado</option>
                   <option value='CT'>Connecticut</option>
                   <option value='DE'>Delaware</option>
                   <option value='DC'>District of Columbia</option>
                   <option value='FL'>Florida</option>
                   <option value='GA'>Georgia</option>
                   <option value='HI'>Hawaii</option>
                   <option value='ID'>Idaho</option>
                   <option value='IL'>Illinois</option>
                   <option value='IN'>Indiana</option>
                   <option value='IA'>Iowa</option>
                   <option value='KS'>Kansas</option>
                   <option value='KY'>Kentucky</option>
                   <option value='LA'>Louisiana</option>
                   <option value='ME'>Maine</option>
                   <option value='MD'>Maryland</option>
                   <option value='MA'>Massachusetts</option>
                   <option value='MI'>Michigan</option>
                   <option value='MN'>Minnesota</option>
                   <option value='MS'>Mississippi</option>
                   <option value='MO'>Missouri</option>
                   <option value='MT'>Montana</option>
                   <option value='NE'>Nebraska</option>
                   <option value='NV'>Nevada</option>
                   <option value='NH'>New Hampshire</option>
                   <option value='NJ'>New Jersey</option>
                   <option value='NM'>New Mexico</option>
                   <option value='NY'>New York</option>
                   <option value='NC'>North Carolina</option>
                   <option value='ND'>North Dakota</option>
                   <option value='OH'>Ohio</option>
                   <option value='OK'>Oklahoma</option>
                   <option value='OR'>Oregon</option>
                   <option value='PA'>Pennsylvania</option>
                   <option value='RI'>Rhode Island</option>
                   <option value='SC'>South Carolina</option>
                   <option value='SD'>South Dakota</option>
                   <option value='TN'>Tennessee</option>
                   <option value='TX'>Texas</option>
                   <option value='UT'>Utah</option>
                   <option value='VT'>Vermont</option>
                   <option value='VA'>Virginia</option>
                   <option value='WA'>Washington</option>
                   <option value='WV'>West Virginia</option>
                   <option value='WI'>Wisconsin</option>
                   <option value='WY'>Wyoming</option>
                 </select></td>
               </tr>
               <tr>
                 <td height="33">County</td>
                 <td><div id="county_drop_down"><select id="county" name="county" class="btn btn-default dropdown-toggle"><option value="">County...</option></select></div>
                 <span id="loading_county_drop_down"><img src="style/loader.gif" width="16" height="16" align="absmiddle">&nbsp;Loading...</span>
                 <div id="no_county_drop_down">This state has no counties.</div></td>
               </tr>
             </table>

            <button type="submit" class="btn btn-default">Update</button><br>
        </form>
    </div>
</main>

<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
<script type="text/javascript" src="/js/image-load.js"></script>
<script type="text/javascript" src="/js/drop_down.js"></script>
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



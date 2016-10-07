<!-- adlister.dev/create -->
<!--Page for creating new advertisement listings-->


<main class="container-fluid custom-adCREATE-ad-edit-main imageupload">
    <div class="row">
        <h2>Create Item</h2>
        <!-- <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2"> -->
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4">
        <!-- <div> -->
            <form class="form-group" name="form" method="POST" enctype="multipart/form-data">
                <label for="headline">Headline</label><br>
                <input id="headline" type="text" name="headline" class="form-control" value=""><br>
                <label>Price</label><br>
                <input id="price" type="text" name="price" class="form-control" value=""><br>
                <label>Description</label><br>
                <textarea id="description" type="text" name="description" class="form-control" value="" rows="5"></textarea><br>
                <label>Choose Type of Item for Sale</label>
                <div class="dropdown form-group">
                    <select class="btn btn-default dropdown-toggle" name="item_type">
                        <option value="1">Bicycle</option>
                        <option value="2">Unicycle</option>
                        <option value="3">Skateboard</option>
                    </select>
                </div>

               <!-- Image uploader -->
                <div class="imageupload panel panel-default">
                    <!-- top of image upload box -->
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">Upload Image</h3>
                        <div class="btn-group pull-right">
                        </div>
                    </div>

                    <!-- middle of image box -->
                    <div class="file-tab panel-body">
                        <label class="btn btn-default btn-file">
                            <span>Browse</span>
                            <!-- The file is stored here. -->
                            <input type="file" name="image_url">
                        </label>
                        <button type="button" class="btn btn-default">Remove</button>
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

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <button type="submit" class="btn btn-success adcreateButton">Submit</button><br>
                </div>
            </div>

            </form>

        </div>
    </div>
</main>

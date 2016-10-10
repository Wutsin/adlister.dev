<div class="container">
    <section id="login">
        <div class="row">

            <h1 class="section-title text-center">Edit Account</h1><br>

            <div class="col-md-6 col-md-offset-3">

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

				<!-- PROFILE UPDATE FORM -->
				<form method="POST" action="" data-validation data-required-message="This field is required" class="text-center" enctype="multipart/form-data">
				
					<!-- IMAGE UPLOADER -->
	            	<div class="imageupload panel panel-default">
		                <!-- top of image upload box -->
		                <div class="panel-heading clearfix">
		                    <h3 class="panel-title pull-left">Upload Image</h3>
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

					<!-- UPDATE INFO -->
					<!-- username -->
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->attributes['username']; ?>" data-required>
					</div>

					<!-- email -->
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->attributes['email']; ?>" data-required>
					</div>
					
					<!-- password -->
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>

					<!-- password confermation -->
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Confirm Password" data-required>
					</div>
					
					<!-- update accoutn -->
					<button type="submit" class="btn btn-primary loginButtons">Update Account</button>

				</form> <!-- closes form -->
			</div>
		</div>
	</section>
</div>



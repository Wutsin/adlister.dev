<div class="container">
	<section id="login">
		<div class="row">

			<h1 class="section-title text-center">Edit Account</h1>

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

<!-- form for profile update -->
				<form method="POST" action="" data-validation data-required-message="This field is required" class="text-center">

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
		            
					<!-- form update info -->
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?//= $user->username; ?>" data-required>
					</div>

					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?//= $user->email; ?>" data-required>
					</div>

					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>

					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Confirm Password" data-required>
					</div>


					<button type="submit" class="btn btn-primary">Update Account</button>

				</form> <!-- closes form -->
			</div>
		</div>
	</section>
</div>



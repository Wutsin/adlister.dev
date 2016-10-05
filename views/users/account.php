<!--Page for user account home-->
<div class="container">
	<section id="login">
		<div class="row">

			<h1 class="section-title text-center"><?//= $user->username; ?></h1>

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

<!-- form for sign up -->
				<form method="POST" class="text-center">

					<div class="container">
						<!-- image -->
						<img src="">
						<h4><?//= $user->image; ?></h4>
						
						<!-- profile info -->
						<h4 class="section-title"><?//= $user->username; ?></h4>
						
						<h4 class="section-title"><?//= $user->email; ?></h4>
					</div>
					
					<div class="container">
						<h1>Your Ads</h1>
		
						<!-- ads info -->
						<h4 class="section-title"><?//= $user->ads; ?></h4>
					</div>

		</div> <!-- close row -->
	</section> <!-- close login -->
</div> <!-- close container -->









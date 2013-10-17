<?php
	require 'init.php';
	include('views/header.inc');

			echo ('
					<!DOCTYPE html>
					<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
					<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

					<head>
					    <meta charset="utf-8">
					    <meta name="viewport" content="width=device-width">
					    <title>Essence of Awesome Creamery</title>

					    <link rel="stylesheet" href="css/foundation.css">

					    <script src="js/vendor/custom.modernizr.js"></script>

					</head>
					<body>

					    <!-- Begin Main Body -->
						<div class="row">
							<div class="large-12 columns">
					            <div class="row">
					                <div class="large-6 columns">
								        <h3>Featured Flavors</h3>
					                </div>
					            </div>
					            <!-- Left Column -->
								<div class="row">
									<div class="large-8 columns">
										<div class="panel">
					                        <img src="img/vanilla.jpg" alt="Photo of Vanilla Ice Cream">
											<p>According to a recent survey, Vanilla is STILL the most popular flavor in America! Find out why, and check out our Vanilla special this month!</p>
					                        <p><a href="blog.php" class="button round">Go!</a></p>
										</div>
									</div>
					                <!-- Right Column -->
					                <div class="large-4 columns">
					                    <h3>Why we are the Essence of Awesome.</h3>
					                    <p>Essence of Awesome allows you to create your own special ice cream dessert. You get to choose up to 3 flavors, and 2 mix-ins, and have them shipped directly to your home!</p>
					                    <h3>Why YOU want to be the Essence of Awesome.</h3>
					                    <p>When you sign up with Essence of Awesome, you get exclusive deals on all our new flavors. Become a community member and share your favorite mixes of delicious flavors. Transform into the Essence of Awesome today!</p>
					                    <p><a href="signup.php" class="button round">Sign Up!</a></p>
					                </div>
					            </div>
							</div>
						</div>
					    <!-- End Main Body -->

					</body>
			    ');
	include('views/footer.inc');	
?>
<?php
	require 'init.php'; 
	include('views/header.inc');


		echo('
				<!DOCTYPE html>
					<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
					<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

				<head>
				    <meta charset="utf-8">
				    <meta name="viewport" content="width=device-width">
				    <title>Contact Us | EoA</title>

				    <link rel="stylesheet" href="css/foundation.css">

				    <script src="js/vendor/custom.modernizr.js"></script>

				</head>
				<body>
					<div class="row">
				        <div class="large-12 columns">
				            <div class="row">
				                <div class="large-6 columns">
				                    <h3>Contact Us</h3>
				                </div>
				            </div>
				            <!-- Left Column -->
				            <div class="row">
				                <div class="large-7 columns">
				                    <!-- <div class="panel"> -->
				                        <img src="img/social.jpg" height="216" width="216">
				                        <br>
				                        <img src="img/customer.jpg" height="245" width="406" alt="Customer placing order">
				                    <!-- </div> -->
				                </div>
				                <!-- Right Column -->
				                <div class="large-5 columns">
				                    <h4>Find us on all the Social Networks, or get ahold of us with this form. We promise we will get back to you as soon as possible.</h4>
				                    <div class="panel">
				                        <form>
				                            <label for="name" style="left: auto">Name: </label>
				                            <input type="text" contenteditable="true" name="name" id="name">
				                            <label for="email" style="left: auto">Email Address: </label>
				                            <input type="email" contenteditable="true" name="email" id="email">
				                            <label for="phone" style="left: auto">Phone Number: </label>
				                            <input type="text" contenteditable="true" name="phone" id="phone">
				                            <label for="reason" style="left: auto">Reason for Contact: </label>
				                            <textarea name="reason" id="reason" wrap="soft" maxlength="1060" cols="200" rows="50"></textarea>
				                            <p><a href="index.php" class="button round">Submit</a></p>
				                        </form>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div>
	
				</body>

		');
	include('views/footer.inc');
?>
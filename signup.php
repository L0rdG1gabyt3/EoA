<?php
    require 'init.php';
    $general->logged_in_protect();

    include('views/header.inc');
        # if form is submitted
if (isset($_POST['submit'])) {
 
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
 
        $errors[] = 'All fields are required.';
 
    }else{
        
        #validating user's input with functions that we will create next
        if ($users->user_exists($_POST['username']) === true) {
            $errors[] = 'That username already exists';
        }
        if(!ctype_alnum($_POST['username'])){
            $errors[] = 'Please enter a username with only alphabets and numbers';  
        }
        if (strlen($_POST['password']) <6){
            $errors[] = 'Your password must be at least 6 characters';
        } else if (strlen($_POST['password']) >18){
            $errors[] = 'Your password cannot be more than 18 characters long';
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Please enter a valid email address';
        }else if ($users->email_exists($_POST['email']) === true) {
            $errors[] = 'That email already exists.';
        }
    }
 
    if(empty($errors) === true){
        
        $username   = htmlentities($_POST['username']);
        $password   = $_POST['password'];
        $email      = htmlentities($_POST['email']);
 
        $users->register($username, $password, $email);// Calling the register function.
        header('Location: signup.php?success');
        exit();
    }
}
 
if (isset($_GET['success']) && empty($_GET['success'])) {
  echo 'Thank you for registering. Please check your email.';
}

    echo('
				<!DOCTYPE html>
				<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
				<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

				<head>
				    <meta charset="utf-8">
				    <meta name="viewport" content="width=device-width">
				    <title>Signup | EoA</title>

				    <link rel="stylesheet" href="css/foundation.css">

				    <script src="js/vendor/custom.modernizr.js"></script>

				</head>
				<body>
				<div class="row">
        <div class="large-12 columns">
            <div class="row">
                <div class="large-6 columns">
                    <h3>Sign Up</h3>
                </div>
            </div>
            <!-- Left Column -->
            <div class="row">
                <div class="large-6 columns">
                    <div class="panel">
                        <form method="post" action="signup.php">
                            <label for="firstname" style="left: auto">First Name: </label>
                            <input type="text" contenteditable="true" name="fname" id="firstname">
                            <label for="lastname" style="left: auto">Last Name: </label>
                            <input type="text" contenteditable="true" name="lname" id="lastname">
                            <label for="username" style="left: auto">Username: </label>
                            <input type="text" contenteditable="true" name="username" id="username">
                            <label for="email" style="left: auto">Email: </label>
                            <input type="email" contenteditable="true" name="email" id="email">
                            <label for="password" style="left: auto">Password: </label>
                            <input type="password" contenteditable="true" name="password" id="password">
                            <label for="password2" style="left: auto">Retype Password: </label>
                            <input type="password" contenteditable="true" name="pword2" id="password2">
                            <label for="newsletter" style="left: auto">Subscribe to our newsletter. </label>
                            <input type="checkbox" checked name="newsletter" id="newsletter">
                            <label for="agree" style="left: auto">Agree to the Terms and Conditions.</label>
                            <input type="checkbox" name="agree" id="agree">
                            <br>
                            <input class="button round" type="submit" value="Sign Up!" />
                        </form>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="large-6 columns">
                    <h3>Why Join?</h3>
                    <p>When you join the Essence of Awesome Club, you get exclusive access to special deals, such as coupons, shipping discounts, priority flavor production.</p>
                    <p>Registered users of Essence of Awesome can store their most recent mixes for easy re-ordering and shipping.</p>
                    <p>Besides the awesome benefits already listed, our Platinum members get to become our “Flavor-ologists”, and suggest what our next unique and custom Flavor of the Month will be!</p>
                </div>
            </div>
        </div>
    </div>
</body>
		');
        # if there are errors, they would be displayed here.
        if(empty($errors) === false){
            echo '<p>' . implode('</p><p>', $errors) . '</p>';
        }
 
	include('views/footer.inc');	
?>
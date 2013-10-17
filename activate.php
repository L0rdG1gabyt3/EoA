<?php 
require 'init.php';
$general->logged_in_protect();
include('views/header.inc');
?>
<!DOCTYPE html>
	<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/foundation.css">
	<script src="js/vendor/custom.modernizr.js"></script>
	<title>Activate</title>
</head>
<body>	
	<div class="row">
		<h1>Activate your account</h1>
 
    	<?php
        
        if (isset($_GET['success']) === true && empty ($_GET['success']) === true) {
	        ?>
	        <h3>Thank you, we've activated your account. You're free to log in!</h3>
	        <?php
	            
        } else if (isset ($_GET['email'], $_GET['email_code']) === true) {
            
	    $email 		=trim($_GET['email']);
	    $email_code	=trim($_GET['email_code']);
            
            if ($users->email_exists($email) === false) {
                $errors[] = 'Sorry, we couldn\'t find that email address.';
            } else if ($users->activate($email, $email_code) === false) {
                $errors[] = 'Sorry, we couldn\'t activate your account.';
            }
            
	     if(empty($errors) === false){
			
		echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		
	     } else {
 
                header('Location: activate.php?success');
                exit();
 
            }
        
        } else {
            header('Location: index.php');
            exit();
        }

        ?>
	</div>
</body>
</html>
<?php include('views/footer.inc');?>
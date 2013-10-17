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
    					<title>Blog | EoA</title>
						<link rel="stylesheet" href="css/foundation.css">
						<script src="js/vendor/custom.modernizr.js"></script>
					</head>
					<body>
						<div class="row">
        <div class="large-12 columns">
            <div class="row">
                <div class="large-6 columns">
                    <h3>Blog</h3>
                </div>
            </div>
            <!-- Left Column -->
            <div class="row">
                <div class="large-12 columns">
                    <div class="panel">
                        <img style="float: left" src="img/vanilla2.jpeg" alt="Vanilla Ice Cream">
                        <p class="para">Vanilla wins the popular vote among
                            Americans as the favorite ice cream flavor
                            for a second year in a row, and premium
                            ice cream is a top seller while frozen yogurt
                            posts a steady increase in demand. These
                            are a few of the findings from the second
                            annual survey of International Ice Cream
                            Association (IICA) member companies,
                            which make and distribute an estimated
                            85 percent of the ice cream and frozen
                            dessert products consumed in the
                            United States.</p>

                        <p class="para">According to the companies participating in the survey, the top three flavors are vanilla, chocolate and
                            butter pecan, with coffee, Neapolitan and Rocky Road tied for fourth place.</p>

                        <p>“From the rich, creaminess of a scoop of vanilla-bean premium ice cream to the convenience of a perfectly
                            portion-controlled ice cream confection, our member companies are making a wide-range of flavors and
                            product types that allow consumers to choose the treat that appeals to them,” said Peggy Armstrong,
                            vice president of communications for the International Dairy Foods Association.  “Ice cream is a fun and
                            nutritious food that fits into almost every lifestyle.” <a href="customize.php"><b>Order Your Premium Ice Cream Today</b></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
		');
	include('views/footer.inc');
?>		
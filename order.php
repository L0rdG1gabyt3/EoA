<?php 
    include('views/header.inc');


		echo('
				<!DOCTYPE html>
				<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
				<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

				<head>
				    <meta charset="utf-8">
				    <meta name="viewport" content="width=device-width">
				    <title>Order | EoA</title>

				    <link rel="stylesheet" href="css/foundation.css">

				    <script src="js/vendor/custom.modernizr.js"></script>

				</head>
				<body>
					<div class="row">
        <div class="large-12 columns">
            <div class="row">
                <div class="large-5 columns">
                    <h3>Order</h3>
                </div>
            </div>
            <div class="row">
                <div class="large-5 columns">
                    <div class="panel">
                        <h4>Your Details</h4>
                        <form>
                            <label for="name" style="left: auto">Name: </label>
                            <input type="text" contenteditable="true" name="name" id="name">

                            <label for="address" style="left: auto">Address: </label>
                            <input type="text" contenteditable="true" name="address" id="address">

                            <label for="city" style="left: auto">City: </label>
                            <input type="text" contenteditable="true" name="city" id="city">

                            <label for="state" style="left: auto">State: </label>
                            <input type="text" contenteditable="true" name="state" id="state">

                            <label for="zipcode" style="left: auto">Zipcode: </label>
                            <input type="text" contenteditable="true" name="zipcode" id="zipcode">

                            <label for="phone" style="left: auto">Phone #: </label>
                            <input type="text" contenteditable="true" name="phone" id="phone">

                            <label for="email" style="left: auto">E-Mail:</label>
                            <input type="email" contenteditable="true" name="email" id="email">

                    </div>
                </div>
                <div class="large-7 columns">
                    <h4>Billing Information</h4>
                    <label for="creditcard" style="left: auto">Credit Card: </label>
                    <input type="text" contenteditable="true" name="creditcard" id="creditcard" value="Card Number">
                    <div class="large-4 columns">
                        <label for="expdate" style="left: auto">Exp Date</label>
                        <select>
                            <option value="1">January (1)</option>
                            <option value="2">February (2)</option>
                            <option value="3">March (3)</option>
                            <option value="4">April (4)</option>
                            <option value="5">May (5)</option>
                            <option value="6">June (6)</option>
                            <option value="7">July (7)</option>
                            <option value="8">August (8)</option>
                            <option value="9">September (9)</option>
                            <option value="10">October (10)</option>
                            <option value="11">November (11)</option>
                            <option value="12">December (12)</option>
                        </select>
                    </div>
                    <div class="large-3 columns">
                        <label for="expyear" style="left: auto">Year</label>
                        <select>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                        <p><a href="index.php"  class="button round">Order!</a></p>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
		');
	include('views/footer.inc');

?>
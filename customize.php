<?php 
    require 'init.php';
    include('views/header.inc');
?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
    <head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Customize | EoA</title>

	    <link rel="stylesheet" href="css/foundation.css">
	    <script src="js/vendor/custom.modernizr.js"></script>


	</head>
	<body>
	    <div class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-5 columns">
                        <h3>Customize Your Ice Cream</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="large-5 columns">
                        <div class="panel">
                            <h4>Base Flavors (Choose Up to 3)</h4>
                            <form>
                                <select id="flavor1">
                                    <option value="vanilla">Vanilla</option>
                                    <option value="chocolate">Chocolate</option>
                                    <option value="strawberry">Strawberry</option>
                                    <option value="butter_pecan">Butter Pecan</option>
                                    <option value="peppermint">Peppermint</option>
                                    <option value="coffee">Coffee</option>
                                    <option value="Mint">Mint</option>
                                </select>
                                <select id="flavor2">
                                    <option value="none">None</option>
                                    <option value="vanilla">Vanilla</option>
                                    <option value="chocolate">Chocolate</option>
                                    <option value="strawberry">Strawberry</option>
                                    <option value="butter_pecan">Butter Pecan</option>
                                    <option value="peppermint">Peppermint</option>
                                    <option value="coffee">Coffee</option>
                                    <option value="Mint">Mint</option>
                                </select>
                                <select id="flavor3">
                                    <option value="none">None</option>
                                    <option value="vanilla">Vanilla</option>
                                    <option value="chocolate">Chocolate</option>
                                    <option value="strawberry">Strawberry</option>
                                    <option value="butter_pecan">Butter Pecan</option>
                                    <option value="peppermint">Peppermint</option>
                                    <option value="coffee">Coffee</option>
                                    <option value="Mint">Mint</option>
                                </select>
                                <label for="swirled">Swirled (Add $.50)</label>
                                <input type="checkbox" name="swirled" id="swirled">
                                <h4>Mix-Ins (Choose Up to 2)</h4>
                                <select id="mix1">
                                    <option value="none">None</option>
                                    <option value="peanuts">Peanuts</option>
                                    <option value="cookies">Cookies</option>
                                    <option value="chocolatechip">Chocolate Chips</option>
                                    <option value="cookiedough">Cookie Dough</option>
                                    <option value="pecans">Pecans</option>
                                    <option value="caramel">Caramel</option>
                                    <option value="fudge">Fudge</option>
                                </select>
                                <select id="mix2">
                                    <option value="none">None</option>
                                    <option value="peanuts">Peanuts</option>
                                    <option value="cookies">Cookies</option>
                                    <option value="chocolatechip">Chocolate Chips</option>
                                    <option value="cookiedough">Cookie Dough</option>
                                    <option value="pecans">Pecans</option>
                                    <option value="caramel">Caramel</option>
                                    <option value="fudge">Fudge</option>
                                </select>
                                <p class="button round small" onclick="calculate()">Calculate</p>
                        <!-- </form>-->
                        </div>
                    </div>
                    <div class="large-7 columns">
                        <h4>Total:</h4>
                        <div class="panel" id="totpan">$9.50</div>

                        <p><a href="order.php"  class="button round">Order!</a></p>
                            </form>
                        <script src="js/calculate.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </body>

<?php
	include('views/footer.inc');
?>		
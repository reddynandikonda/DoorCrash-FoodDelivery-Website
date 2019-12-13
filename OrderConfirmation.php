<!DOCTYPE html>
<html lang="en">
<!--===========================================================================================
//
// Web site: DoorCrash
// Web page: Order Confirmation Page
// Course:   CSC 5750
// Homework: <5>
// Author:   <Anusha Reddy Nandikonda>
// Date:     <12/05/2019>
// Website Description:
//           <service that delivers food from local restaurants to customer residences>
//
// Page Description:
//         <Page to confirm the order>
//
//===========================================================================================-->
	
<head>
		<meta charset="utf-8">
		<title>Door Crash Food Delivery Website, v5</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Description" lang="en" content="Online food Delivery Website">
		<meta name="author" content="Anusha Reddy Nandikonda">
        <meta name="robots" content="index, follow">

        <!-- Override CSS file - add your own CSS rules -->
		<link rel="stylesheet" href="styles.css">
</head>
<body>
    <!--Header-->
	<div class="header">
		<div class="container">
			<h1 class="header-heading">DOOR CRASH</h1>
		</div>
	</div>
	<!--Navigation Bar-->
	<div class="nav-bar">
		<div class="container">
			<ul class="nav">
			    <li><a href="index.html">Home</a></li>
				<li><a href="restaurant.html">Restaurant</a></li>
				<li><a href="order.html">Order</a></li>
			</ul>
		</div>
	</div>
	<!--Main Part of the page-->
    <div class="content">
		<div class="container">
			<div class="main">
				<!--Displaying Instructions-->
                <h1><b>ORDER CONFIRMATION PAGE</b></h1>
                <p>Your order has been received.</p>
                <p>Door Crash will deliver your order soon.</p>
                <p>Please insure that your dog is locked up.</p> 
                <hr>
                <!--Displaying ORDER Details-->
                <h2>ORDER DETAILS:</h2>
				<!--Retrieving data from the Order Page-->
				<?php
                    echo '<strong>Customer Name: </strong>' . $_POST ["CustomerName"] . '<br>';
                    echo '<b>Customer Address: </b> ' . $_POST ["CustomerAddress"] . '<br>';
                    echo '<b>Customer Phone: </b>' . $_POST ["CustomerPhone"] . '<br>';
                    echo '<b>Restaurant Name: </b> ' . $_POST ["RestaurantName"]. '<br>';
                    echo '<b>Food Item: </b> ' . $_POST ["FoodItem"]. '<br>';
                    echo '<b>Quantity of Food Item: </b>' . $_POST ["Quantity"]. '<br>';
                    echo '<b>Cost of the Item: </b>' . $_POST ["price"]. '<br>';
                    echo '<b>Order Total: </b>' . $_POST ["total"];
                ?>
            </div>
		</div>
	</div>
    <!--Footer-->
	<div class="footer">
		<div class="container">
			<!--Delivery Address with contact Info and copyright-->
				<h6>Door Crash, 13408 15 Mile Rd, Sterling Heights, MI 48312 &nbsp;&nbsp;
					<a class="emailStyle" href="mailto:custmoersupport@doorcrash.com">E-mail</a>&nbsp;Contact : 313-509-0000&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy; Copyright 2016
			</h6>
		</div>
	</div>
</body>
</html>
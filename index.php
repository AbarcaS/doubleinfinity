<?php

define('mypage',true);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Double Infinity</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
  <div id="page">
	<div id="top">top</div>
	<div id="menu">
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Stats</a></li>
			<li><a href="">Images</a></li>
			<li><a href="">Contact Us</a></li>
		</ul>
 

	</div>
	<div id="container" >
		<div id="text">
			<?php
			//import that left column file
			include 'left_column.php'

       ?>
		</div>
		<div id="data">
			<h2>TALLEST BUILDINGS THROUGHOUT MODERN TIME
			</h2>
			<?php 
       include 'right_column.php';

     //import stats
			 ?>

		</div>
    <div style="clear: both;"></div>
	</div> <!-- container -->
	<div id="footer">For More Information write to:
	<p>
U.S. Bank Tower, 633 W 5th St, Los Angeles, CA 90071</p>
	</div>
	</div>
</body>
</html>

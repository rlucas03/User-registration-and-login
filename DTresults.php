<?php session_start(); 
include 'include/functions.php';
greetings();


?>
<!doctype html>
<html>
	<head>
		<!-- <link rel="stylesheet" href="css/main.css"> -->

		<meta charset="utf-8">
		<title>Introduction to Database Technology - DT Results</title>
		<style>
			table {
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width: 50%;
			}

			td, th {
				border: 1px solid #dddddd;
				text-align: left;
				padding: 5px;
			}

			tr:nth-child(even) {
				background-color: #dddddd;
			}
		</style>
	</head>
	<body>
		<?php 

		// include('include/navmenuresults.php');
	 //     include('include/headerresults.php'); 

	     ?>

	  <?php if ($_SESSION['name'] == 'Admin' || $_SESSION['name'] === 'User') {
	  	// deleteSessBtn();
	  	include('include/navmenuresults.php');
	  	echo 
	    
		'<h1>Introduction to Database Technology - DT Results</h1>
		<table>
		  <tr>
			<th>Year</th>
			<th>Students</th>
			<th>Pass</th>
			<th>Fail (no resit)</th>
			<th>Resit</th>
			<th>Withdrawn</th>
		  </tr>
		  <tr>
			<td>2012/13</td>
			<td>60</td>
			<td>40</td>
			<td>7</td>
			<td>3</td>
			<td>10</td>
		  </tr>
		  <tr>
			<td>2013/14</td>
			<td>45</td>
			<td>25</td>
			<td>5</td>
			<td>15</td>
			<td>0</td>
		  </tr>
		  <tr>
			<td>2014/15</td>
			<td>50</td>
			<td>35</td>
			<td>3</td>
			<td>7</td>
			<td>5</td>
		  </tr>
		  <tr>
			<td>2015/16</td>
			<td>48</td>
			<td>30</td>
			<td>8</td>
			<td>3</td>
			<td>7</td>
		  </tr>
		</table>';
		} else {
			echo "<h1>You are not logged in, secure page</h1>";
		} 

		        if (isset($_POST['destroySession'])) {
        // call function to obliterate session
        destroySession();
        }
		?> 
	</body>		
</html>

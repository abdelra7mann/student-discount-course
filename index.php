<!-- This is an HTML and PHP code for a student discount course page.
 The page includes a form for selecting a course and a country,
  and the final price of each course is displayed based on the selected country. -->

<!DOCTYPE html>
<html>
<head>
	<title>Student Discount Course Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
		}

		header h1 {
			margin: 0;
			font-size: 36px;
		}

		main {
			padding: 20px;
		}

		section {
			margin-bottom: 20px;
		}

		h2 {
			font-size: 24px;
			margin-bottom: 10px;
		}

		form {
			display: inline-block;
			margin-right: 20px;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		select {
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		input[type="submit"] {
			padding: 5px 10px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 10px;
			text-align: left;
		}

		th {
			background-color: #333;
			color: #fff;
		}

		td {
			border-bottom: 1px solid #ccc;
		}

		tbody tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<header>
		<h1>Student Discount Course Page</h1>
	</header>
	<main>
		<section>
			<h2>Course Selection</h2>

			<!-- form discound -->
			<form method="POST">
				<label for="course">Choose a course:</label>
				<select id="course" name="course">
					<option value="web">Web Development</option>
					<option value="design">Graphic Design</option>
					<option value="marketing">Marketing</option>
				</select>
				<br>
				<label for="country">Select your country:</label>
				<select id="country" name="country">
					<option value="us">United States</option>
					<option value="uk">United Kingdom</option>
					<option value="canada">Canada</option>
					<option value="australia">Australia</option>
					<option value="other">Other</option>
				</select>
				<br>
				<input type="submit" value="Submit">
			</form>
			<!-- form discound -->


		</section>
		<section>
			<h2>Course Pricing</h2>
			<table>
				<thead>
					<tr>
						<th>Course</th>
						<th>Regular Price</th>
						<th>Final Price</th>
					</tr>
				</thead>
				<?php
				$Web_Developmet = 155;
				$Graphic_Design	 = 149	;
				$Marketing = 249;
				?>


				<tbody>
					<tr>
						<td>Web Development</td>
						<td> 
						$155

						</td>
						<td>	<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST"){
							// echo '$555';
							// echo '<br>';
							$course_name = $_REQUEST['course'];
							$country_name = $_REQUEST['country'];
							if($country_name == 'canada'){
								$Web_Developmet -= 150;
								echo "the final price is  \$$Web_Developmet";
								
						}
						}else{
							//مش هطبع اي حاجه 
						}
						?> </td>
					</tr>
					<tr>
						<td>Graphic Design</td>
						<td>$149</td>
						<td>	<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST"){
							// echo '$555';
							// echo '<br>';
							$course_name = $_REQUEST['course'];
							$country_name = $_REQUEST['country'];
							if($country_name == 'canada'){
								$Graphic_Design -= 53;
								echo "the final price is  \$$Graphic_Design";
								
						}
						}else{
							//مش هطبع اي حاجه 
						}
						?> </td>
					</tr>
					<tr>
						<td>Marketing</td>
						<td>$249</td>
						<td>	<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST"){
							// echo '$555';
							// echo '<br>';
							$course_name = $_REQUEST['course'];
							$country_name = $_REQUEST['country'];
							if($country_name == 'canada'){
								$Marketing -= 53;
								echo "the final price is  \$$Marketing";
								
						}
						}else{
							//مش هطبع اي حاجه 
						}
						?> </td>
					</tr>
				</tbody>


			</table>
		</section>
	</main>
</body>
</html>


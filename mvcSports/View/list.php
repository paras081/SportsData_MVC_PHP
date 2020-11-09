
<html>

	<head>
		<title>Dashboard</title>
		<link type="text/css" rel="stylesheet" href="~/../libs/cssSports.css">
 	</head>
	<body>
		<div>
			<h2>Sports Details</h2>
			<a href="/mvcSports/index.php">Home</a><br>
			<a href="View/insert.php">Add New Sports</a><br>
		</div>
		<div>
			<?php
			if($result->num_rows > 0){
			?>
			<table id="customers">
				<thead>
					<th>No.</th>
					<th>Sports Category</th>
					<th>Sports Name</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php 
					while($row = mysqli_fetch_array($result))
					{
					?>
					<tr>
						<td><?php  echo $row['id']; ?></td>
						<td><?php  echo $row['category']; ?></td>
						<td><?php  echo $row['name']; ?></td>
						<td>
							<a href="index.php?act=update&id=
							<?php  echo $row['id']; ?>
							">update</a>
							<a href="index.php?act=delete&id=
							<?php  echo $row['id']; ?>
							">delete</a>
						</td>
					</tr>
					<?php

					}
					?>

				</tbody>
			</table>
			<?php
				}else{
					echo "<h2>No record found</h2>";
				}
			?>
		</div>
	</body>
</html>
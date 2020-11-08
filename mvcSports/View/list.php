<?php

	


?>

<html>

	<head>
		<title>Dashboard</title>
	</head>
	<body>
		<div>
			<h2>Sports Details</h2>
			<a href="/mvcSports/index.php">Home</a><br>
			<a href="/View/insert.php">Add New Sports</a><br>
		</div>
		<div>
			<?php
			if($result->num_rows > 0){
			?>
			<table>
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
						<td><?php  echo $row['Category']; ?></td>
						<td><?php  echo $row['name']; ?></td>
						<td>
							<a href="index.php?act=update">update</a>
							<a href="index.php?act=delete">delete</a>
						</td>
					</tr>
					<?php

					}
					?>

				</tbody>
			</table>
			<?php
				}else{
					echo "No record found";
				}
			?>
		</div>
	</body>
</html>
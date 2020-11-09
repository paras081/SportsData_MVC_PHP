<?php

?>

<html>
	<head>
		<title>Insert Record</title>
	</head>
	<body>
		<div>
			<h2>Add Sports</h2>
		</div>
		<div>
			<p>
				please fill the record
			</p>
		</div>
		<div>
			<form action="../index.php?act=insert" method="post">
				<div>
					<label>Sports Category</label>
					<input type="text" name="category">
				</div>
				<div>
					<label>Sports Name</label>
					<input type="text" name="name">
				</div>
				<div>
					<input type="submit" name="addBtn" value="submit">
					<a href="../index.php">Cancel</a>
				</div>
			</form>
		</div>
	</body>
</html>
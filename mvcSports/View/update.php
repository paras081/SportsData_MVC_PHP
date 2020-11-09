<?php
	
	require '../Model/sports.php';

	session_start();
	$sportsTable = new sports();

	$_SESSION['sportsTableUpdateObj'] = $sportsTable;	
?>


<html>
	<head>
		<title> Update Record</title>
	</head>
	<body>
		<div>
			<h2>Update Records</h2>
		</div>		
		<div>
			<form action="../index.php?act=update" method="post">
				<div>
					<label>Sports Category</label>
					<input type="text" name="category" value="<?php echo $sportsTable->category ?>">
				</div>
				<div>
					<label>Sports Name</label>
					<input type="text" name="name" value="<?php echo $sportsTable->name ?>">
				</div>
				<input type="hidden" name="id" value="<?php echo $sportsTable->id ?>" />
				<div>
					<input type="submit" name="updateBtn" value="Submit">
					<a href="../index.php">Cancel</a>
				</div>
			</form>
		</div>
	</body>
</html>
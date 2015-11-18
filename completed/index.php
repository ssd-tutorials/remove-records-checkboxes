<?php
if (isset($_POST['update']) && $_POST['update'] == 1) {

	$remove = array();
	
	foreach($_POST as $key => $value) {
		$key = explode("_", $key);
		if (is_array($key) && count($key) > 1) {
			if ($key[0] == "remove") {
				$remove[] = $value;
			}
		}
	}
	
	if (!empty($remove)) {
	
		try {
		
			$objDB = new PDO('mysql:host=localhost;dbname=books', 'root', 'password');
			$objDB->exec("SET CHARACTER SET utf8");
			
			$sql = "DELETE FROM `books`
					WHERE `id` IN (";
			$sql .= implode(", ", $remove);
			$sql .= ")";
			
			$statement = $objDB->query($sql);
			$result = $statement->execute();
		
		} catch(Exception $e) {
			echo 'There was a problem with the database';
		}
		
	}

}

try {

	$objDB = new PDO('mysql:host=localhost;dbname=books', 'root', 'password');
	$objDB->exec("SET CHARACTER SET utf8");
	
	$sql = "SELECT *
			FROM `books`
			ORDER BY `title` ASC";
	
	$statement = $objDB->query($sql);
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);	
	

} catch(Exception $e) {
	echo 'There was a problem with the database';
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Remove records with checkboxes</title>
	<meta name="description" content="Remove records with checkboxes" />
	<meta name="keywords" content="Remove records with checkboxes" />
	<link href="/css/core.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<div id="wrapper">

	<form action="" method="post">
		<table cellpadding="0" cellspacing="0" border="0" class="tbl_repeat">
			<thead>
				<tr>
					<th>Title</th>
					<th>Author</th>
					<th>Category</th>
					<th class="col1">
						<input type="checkbox" class="select-all" id="remove" />
					</th>
				</tr>
			</thead>
			<tbody>
				<?php if (!empty($results)) { ?>
					<?php foreach($results as $row) { ?>
					<tr>
						<td><?php echo $row['title']; ?></td>
						<td><?php echo $row['author']; ?></td>
						<td><?php echo $row['category']; ?></td>
						<td>
							<input type="checkbox" class="remove" 
								name="remove_<?php echo $row['id']; ?>"
								id="remove_<?php echo $row['id']; ?>" 
								value="<?php echo $row['id']; ?>" />
						</td>
					</tr>
					<?php } ?>
				<?php } else { ?>
					<tr>
						<td colspan="4">
							There are currently no records available
						</td>
					</tr>
				<?php } ?>
				<tr>
					<td colspan="4">
						<input type="submit" class="button" value="Update" />
					</td>
				</tr>
			</tbody>
		</table>
		<input type="hidden" name="update" value="1" />
	</form>

</div>


<script src="/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/js/core.js" type="text/javascript"></script>
</body>
</html>
<?php  
require_once '../controller/employeeinfo.php';

$users = fetchAllemployee();


    include "navigation.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
table,td,th{
			border:25px solid white;
		}

	</style>
</head>
<body>
<legend style="color: red;"><b><h2>All Books</h2> </b> </legend>
<table>
	<thead>
		<tr>
			
			<th>Books</th>
			<th>Author</th>
			<th>Year</th>
			<th>Part</th>
		 

		</tr>

	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<td><?php echo $user['Books']	?></td>		
				<td><?php echo $user['Author'] ?></td>
				<td><?php echo $user['Year'] ?></td>
				<td><?php echo $user['Part'] ?></td>
				 
			
			</tr>
		<?php endforeach; ?>
		

	</tbody>



</body>
</html>
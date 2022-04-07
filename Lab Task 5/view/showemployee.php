<?php  
require_once '../controller/employeeinfo.php';

$user = fetchdonner($_GET['id']);


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

<table>
	
            <legend style="color: red;"><b>User</b> </legend>
	<tr>
			<th>User Name</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th> E-Mail</th>
			 
			<th>Image</th>
	</tr>
	<tr>
				<td><a href="showemployee.php?id=<?php echo $user['id'] ?>"><?php echo $user['Books'] ?></a></td>
				<td><?php echo $user['Author'] ?></td>
				<td><?php echo $user['Year'] ?></td>
				<td><?php echo $user['Part'] ?></td>
 
				
				
				<td><img width="100px" src="../files/<?php echo $user['image'] ?>" alt="<?php echo $user['username'] ?>"></td>
	</tr>

</table>
<?php
require '../color.php';

?>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>User Details</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>User Account Details</h1>
<!-- <?php     print_r($anykeyword); ?> -->
<table><!-- 
	<caption>table title and/or explanatory text</caption> -->
	<thead>
		<tr>
			<th>First Name</th>
			<th>Account Number</th>
		</tr>
	</thead>
	<tbody> 
		<?php foreach($anykeyword as $User):?>
		<tr>
			<td><?php echo $User['Firstname'];?></td>
			<td><?php echo $User['AccountNo'];?></td>
		</tr>
	<?php endforeach;  ?>  
	</tbody>
</table>
	
</body>
</html>
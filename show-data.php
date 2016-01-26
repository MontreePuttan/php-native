<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>ชื่อ</th>
				<th>อีเมล</th>
			</tr>
		</thead>
		<tbody>
			<?php  
			include "config/config.php";
			$sql_member = "select * from user";
			$objQuery_member = mysql_query($sql_member) or die(mysql_error());
			while ($result_member = mysql_fetch_array($objQuery_member)){
				?>
				<tr>
					<td><?php echo $result_member['user_name']; ?></td>
					<td><?php echo $result_member['user_email']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
	</html>
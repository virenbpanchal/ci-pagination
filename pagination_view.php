<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo isset($title)?$title:'CodeIgniter Project' ; ?></title>
    <!--meta info-->
    <meta charset="utf-8">
    <meta name="author" content="Viren Panchal">
    <!--Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>

	<center>
	<h1>CodeIgniter Pagination</h1>
	<table border="1" style="background-color:#CCC">
		<tr>
		<td><?php echo $this->table->generate($results);?></td>
		</tr>
	</table>
	<?php echo $this->pagination->create_links();?>
	</center>

</body>
</html>


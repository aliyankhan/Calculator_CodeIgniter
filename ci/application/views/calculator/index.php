<!DOCTYPE html>

<html lang="en">

<head>
<title>Simple Calculator</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<body>

<div class="container">

<h2>Simple Calculator Program</h2>

<div class="list-group">
	
	<a href="<?=base_url();?>calculator/add" class="list-group-item">Addition</a>
	<a href="<?=base_url();?>calculator/subtraction" class="list-group-item">Subtraction</a>
	<a href="<?=base_url();?>calculator/multiplication" class="list-group-item">Multiplication</a>
	<a href="<?=base_url();?>calculator/division" class="list-group-item">Division</a>
</div>

</div>
	</body>

	</html>
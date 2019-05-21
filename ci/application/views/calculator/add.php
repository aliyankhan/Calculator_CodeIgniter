<!DOCTYPE html>

<html lang="en">

<head>
<title>Addition of two numbers</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<body>
<style>
	.text-success{
		font-size:xx-large ;
		font-weight:700;
	}
</style>

<div class="container col-md-3 col-md-offset-4 well">
<h2>Addition of two numbers</h2>
<form action="<?=base_url(); ?>calculator/add" method="post">
	<div class="form-group">
<label for="number1">Enter number:</label>
<input type="number" class="form-control" id="number1" placeholder="Enter number" name="number1" value="<?= $number1; ?>">
	</div>
	<div class="form-group">
<label for="number2">Enter number:</label>
<input type="number" class="form-control" id="number2" placeholder="Enter number" name="number2" value="<?= $number2; ?>">
	</div>
<div class="form-group">
	<label for="ans">Answer</label>
<p class="text-success"><?= $ans; ?></p>
</div>
<button type="submit" class="btn btn-default" name="add">Submit</button>
</form>


</div>

	</body>

	</html>
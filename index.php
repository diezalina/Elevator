</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Static elevator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<div class="row">
	<div class="col-md-6">		
	<h1>Static Elevator</h1>
	<form action="elevator.php" method="GET" >
		<div class="row">
			<div class="col-md-6">	
			<label>From</label>
			<input type="text" name="petition" class="form-control">

			<label>From</label>
			<input type="text" name="petition2" class="form-control">

			<label>From</label>
			<input type="text" name="petition3" class="form-control">

			<label>From</label>
			<input type="text" name="petition4" class="form-control">

			<label>Mantenimiento</label>
			<input type="text" name="maintenance1" class="form-control">
			</div>
			<div class="col-md-6">
			<label>to</label>
			<input type="text" name="destiny" class="form-control">
			<input type="post" class="btn btn-danger" name="del1">
			
			<label>to</label>
			<input type="text" name="destiny2" class="form-control">
			<input type="post" class="btn btn-danger" name="del2">
			
			<label>to</label>
			<input type="text" name="destiny3" class="form-control">
			<input type="post" name="del3" class="btn btn-danger">

			<label>to</label>
			<input type="text" name="destiny4" class="form-control">
			<input type="post" name="del4" class="btn btn-danger">

			<label>Mantenimiento</label>
			<input type="text" name="maintenance2" class="form-control">
			
		</div>
		<br>
		<label>Elevador</label>
			<input type="text" name="elevador" class="form-control">
			<label>Direccion</label>
			<input type="text" name="direction" class="form-control">
			<br>
		</div>
		<br>	
		<input type="submit" class="btn btn-primary">
	</form>
	</div>	
	</div>
	</div>
</body>
</html>		

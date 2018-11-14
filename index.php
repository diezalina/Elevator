<?php
	include("_header.php");
?>
	<div class="container" id="box">
	<div class="row">
	<div class="col-md-6">
	<br>
	<form action="elevator.php" method="GET">
		<div class="row">
			<div class="col-md-6">	
			<label>From</label>
			<input type="text" name="data[1][petition]" class="form-control">

			<label>From</label>
			<input type="text" name="data[2][petition]" class="form-control">

			<label>From</label>
			<input type="text" name="data[3][petition]" class="form-control">

			<label>From</label>
			<input type="text" name="data[4][petition]" class="form-control">

			<label>Mantenimiento</label>
			<input type="text" name="maintenance1" class="form-control">
			</div>
			<div class="col-md-6">
			<label>to</label>
			<input type="text" name="data[1][destiny]" class="form-control">
			
			<label>to</label>
			<input type="text" name="data[2][destiny]" class="form-control">
			
			<label>to</label>
			<input type="text" name="data[3][destiny]" class="form-control">

			<label>to</label>
			<input type="text" name="data[4][destiny]" class="form-control">

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
<?php 
    include("_footer.php");
?>
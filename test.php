<?php 
    include("_header.php");
?>

<form action="elevator.php" method="GET">
<div class="row">
<div class="col-md-3">
    <label>Mantenimiento</label>
        <input type="text" name="maintenance1" class="form-control">
</div>
<div class="col-md-3">    
    <label>Mantenimiento</label>
        <input type="text" name="maintenance2" class="form-control">
</div>
</div>
<div class="row">
<div class="col-md-3">
<br>
		<label>Elevator status</label>
			<input type="text" name="elevador" class="form-control">
			<label>Elevator's direction</label>
			<input type="text" name="direction" class="form-control">
			<br>
		</div>
		<br>	
		<input type="submit" class="btn btn-primary">
</div>
</div>
</form>
<button onclick='add()' class="btn btn-success">
  Agregar petición
</button>

<?php 
    include("_footer.php");
?>
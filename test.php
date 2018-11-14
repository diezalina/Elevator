<?php 
    include("_header.php");
?>
<div class="positionBtn">
    <button onclick='add()' class="btn btn-success">
    + Petition
    </button>
</div>
<form action="elevator.php" method="GET">
<br>
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
    </div>
    <div class="col-md-3">
    <br>
			  <label>Elevator's direction</label>
			  <input type="text" name="direction" class="form-control">
		</div>
		<br>
</div>
    <br>
		  <input type="submit" class="btn btn-primary btn-lg">
</form>

<?php 
    include("_footer.php");
?>
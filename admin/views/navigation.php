<h1>Navigation</h1>

<div class="row">
	<div class="col-md-12">

	    <?php if (isset($message)) { echo $message; }  ?>

	    <?php 
	    
	        $q = "SELECT * FROM navigation ORDER BY position ASC";
	        $r = mysqli_query($dbc, $q);

	        while($opened = mysqli_fetch_assoc($r)) {  ?>
	            
		    <form class="form-inline" role="form" method="POST" action="index.php?page=navigation&id=<?php echo $opened['id']; ?>">
		        
		        <div class="form-group">
		            
		            <!-- class="sr-only" -->
		            <label for="id">ID</label>
		            <input class="form-control" type="text" name="id" id="id" value="<?php echo $opened['id']; ?>" placeholder="Id-name" autocomplete="off">

		        </div>

		         <div class="form-group">
		            
		            <label cfor="label">Label</label>
		            <input class="form-control" type="text" name="label" id="label" value="<?php echo $opened['label']; ?>" placeholder="Label" autocomplete="off">

		        </div>

		         <div class="form-group">
		            
		            <label for="url">Url</label>
		            <input class="form-control" type="text" name="url" id="url" value="<?php echo $opened['url']; ?>" placeholder="url" autocomplete="off">

		        </div>

		        <div class="form-group">
		            
		            <label for="position">Position</label>
		            <input class="form-control" type="text" name="position" id="position" value="<?php echo $opened['position']; ?>" placeholder="" autocomplete="off">

		        </div>

		        <div class="form-group">
		            
		            <label for="status">Status</label>
		            <input class="form-control" type="text" name="status" id="status" value="<?php echo $opened['status']; ?>" placeholder="" autocomplete="off">

		        </div>

		        

		        <button type="submit" class="btn btn-default">Save</button>
		        <input type="hidden" name="submitted" value="1">
		        
		        <input type="hidden" name="openedid" value="<?php echo $opened['id']; ?>">

		    </form>

	        
	    <?php } ?>

	</div>

</div>
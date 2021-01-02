<?php
	require_once 'db_connect.php';

	include_once 'classes.php';

	include_once 'functions.php';

	include_once 'head.php';
?>

		<div class="row my-5">
      		<div class="col-12 col-md-8 col-xl-5 m-auto">
        		
        		<div class="card m-5">
        			
        			<div class="card-header">
                    	<h2>Create Event</h2>
                  	</div>

			   			<?php 
			   				
			   				$rows = form_create();

			   				include_once 'form_create.php'; 

			   			?>
			            
			        <div class="card-footer ">   
			         <a class="link-secondary" href= <?php back(); ?> >Back</a>
			        </div>

				</div>

  			</div>
		</div>
			
<?php include 'footer.php'; ?>

	</div>

</div>

</body>
</html>
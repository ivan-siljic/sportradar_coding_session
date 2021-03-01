<?php 
	require_once '../../directory.php'; 

	include_once '../../src/Controller/SportController.php';

	include_once '../../src/Controller/TeamController.php';

	include '../../view/templates/head.php';
?>


		<div class="row my-5">
      		<div class="col-12 col-md-10 col-lg-6 col-xl-5 m-auto">
        		
        		<div class="card m-5">
        			
        			<div class="card-header">
                    	<h2>Create Event</h2>
                  	</div>

			   			<?php include '../../view/templates/form_create.php'; ?>
			            
			        <div class="card-footer ">   
			         <a class="link-secondary" href= <?php goBack(); ?> >Back</a>	
			        </div>

				</div>

  			</div>
		</div>

			
<?php include '../../view/templates/footer.php'; ?>
<?php require_once '../../directory.php'; ?>


		<div class="row my-5">
      		<div class="col-12 col-md-8 col-xl-5 m-auto">
        		
        		<div class="card m-5">
        			
        			<div class="card-header">
                    	<h2>Create Event</h2>
                  	</div>

			   			<?php 
			   				
			   				include '../../view/templates/form_create.php'; 

			   			?>
			            
			        <div class="card-footer ">   
			         <a class="link-secondary" href= <?php (new GeneralService)->goBack(); ?> >Back</a>	
			        </div>

				</div>

  			</div>
		</div>

			
<?php include '../../view/templates/footer.php'; ?>
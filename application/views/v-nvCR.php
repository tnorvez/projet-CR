
<?php include 'partial/head.php';?>
   <?php include'partial/navco.php';?>

<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      
    
    <div class="col-md-6">
    
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Nouveau compte rendu de visite:</h3>
  </div>
  <div class="panel-body">
     
      
      <form method="post" action="<?php echo $path.'c_compterendu/formulaireajoutCR';?>" autocomplete="off">
      	<div class="row">
      		<div class="col-md-6">
      			<div class="form-group">
      			<label>Praticiens:</label>
      			<select name="listePraticiens"  class="form-control" required="required">
							<?php 
   					foreach($praticiens as $praticien)
   					{
   						echo "<option value=".$praticien['PRA_NUM'].">";
   						echo $praticien['PRA_NOM']."</option>";
   					}
   					?>
						</select>    			
      			</div>     		
      		</div>
      		
      	</div>
      	
      	<div class="row">
      		<div class="col-md-6">
      			<div class="form-group">
      			<label>Date:</label>
      			
					<input type='date' class="form-control" name="startDate" required="required"/>
		    			
      			</div>     		
      		</div>
      			
      	</div>
      	
      	<div class="row">
      		<div class="col-md-6">
      			<div class="form-group">
      			<label for="twitter">Motif:</label>
      			<input type="text" class="form-control"  name="motif" required="required"/>     			
      			</div>     		
      		</div>
      		
      	</div>
      	
      
      <div class="row">
      		<div class="col-md-12">
      			<div class="form-group">
      			<label for="bio">Bilan:</label>
      			<textarea name="bilan" cols="30" rows="10" class="form-control"required="required">
      			
				 </textarea>    			
      			</div>     		 
      		</div>
      </div>
      
      <input type="submit"  class="btn btn-primary" value="Ajouter"/>  
      </form>
    
  					</div>
				</div>
			</div>
			
    	
</div> <!-- /container -->

<?php include 'partial/footer.php';?>
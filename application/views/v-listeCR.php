
<?php include 'partial/head.php';?>
   <?php include'partial/navco.php';?>



<div class="col-md-12">
    	
    	 <table class="table table-hover"  >
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom du praticien</th>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Bilan</th> 
                    
                 <tr>         
                </thead>
               <tbody>
                <tr>
                <?php 
   				      foreach($compterendus as $compterendu)
   					{
   						echo "<tr><td>".$compterendu['VIS_MATRICULE']."</td>";
   						echo "<td>".$compterendu['PRA_NOM']."</td>";
   						echo "<td>".$compterendu['RAP_DATE']."</td>";
   						echo "<td>".$compterendu['RAP_MOTIF']."</td>";
   						echo "<td>".$compterendu['RAP_BILAN']."</td></tr>";
   					}
   					?>
                </tr>
                </tbody>
</table>
        	</div>

        	
<?php include 'partial/footer.php';?>
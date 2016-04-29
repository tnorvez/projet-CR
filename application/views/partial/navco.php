 <?php
	$this->load->helper('url');
	$path = base_url();
?>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <img src="<?php echo base_url();?>images/logo.jpg" class="navbar-brand" class="col-xs-6 col-sm-5 col-md-4" class="img-circle">
          <a class="navbar-brand" href="<?php echo $path.'c_default/Accueilco';?>">Project-CR</a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
        
          <ul class="nav navbar-nav">
        <li><a href="<?php echo $path.'c_compterendu/ajoutCR';?>">Saisie des Comptes-rendus <span class="sr-only">(current)</span></a></li>
        
            <li><a href="<?php echo $path.'c_compterendu/listeCR';?>">Consultation des comptes-rendus</a></li>
            
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $nom;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo $path.'c_default/deconnecter';?>">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
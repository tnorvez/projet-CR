 <?php
	$this->load->helper('url');
	$path = base_url();
?>

<!-- Static navbar -->
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
          <a class="navbar-brand" href="<?php echo $path.'c_default/Accueil';?>">Project-CR</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li> <?php echo anchor ('c_default/Accueil','Accueil');?></li>
            <li><?php echo anchor ('c_default/Connexion','Connexion');?></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

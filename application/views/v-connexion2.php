<?php $this->load->view("partial/head");?>
<?php $this->load->view("partial/nav");?>

 <?php
 $this->load->helper('url');
 $path = base_url();
   ?>
<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
   
        
        
        <form  class="form-signin" method="POST" action="<?php  echo $path.'c_default/connecter';?>">
        <h2 class="form-signin-heading">Identifiez-vous !</h2>
        <input  id="login" name="login" type="text" class="form-control" placeholder="Pseudo" autofocus>
        <input id="mdp" name="mdp" type="password" class="form-control" placeholder="Password">
        
        <button  class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
      </form>
      
        <p>
         <?php if (isset($erreur))	echo '<div class ="erreur"><ul><li>'.$erreur.'</li></ul></div>'; ?>
        </p>
      </div>

    </div> <!-- /container -->
    


<?php $this->load->view("partial/footer");?>

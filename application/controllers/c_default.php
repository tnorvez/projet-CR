<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contr�leur par d�faut de l'application
 * Si aucune sp�cification de contr�leur n'est pr�cis�e dans l'URL du navigateur
 * c'est le contr�leur par d�faut qui sera invoqu�. Son r�le est :
 * 		+ d'orienter vers le bon contr�leur selon la situation
 * 		+ de traiter le retour du formulaire de connexion 
*/
class C_default extends CI_Controller {

	/**
	 * Fonctionnalit� par d�faut du contr�leur. 
	 * V�rifie l'existence d'une connexion :
	 * Soit elle existe et on redirige vers le contr�leur de VISITEUR, 
	 * soit elle n'existe pas et on envoie la vue de connexion
	*/
	public function index()
	{
		$this->load->model('authentif');
		
		if (!$this->authentif->estConnecte()) 
		{
			$data = array();
			$this->templates->load('t_connexion', 'v-connexion', $data);
		}
		else
		{
			$this->load->helper('url');
			
				
			if ($this->session->userdata('statut')== "V")
			{
				redirect('/c_visiteur/');
			}
			else if ($this->session->userdata('statut')== "C")
			{
				redirect('/c_comptable/');
			}
			
			
		
			
		}
	}
	
	/**
	 * Traite le retour du formulaire de connexion afin de connecter l'utilisateur
	 * s'il est reconnu
	*/
	public function connecter () 
	{	// TODO : conr�ler que l'obtention des donn�es post�es ne rend pas d'erreurs 

		$this->load->model('authentif');
		
		$login = $this->input->post('login');
		$mdp = $this->input->post('mdp');
		
		$authUser = $this->authentif->authentifier($login, $mdp);

		if(empty($authUser))
		{
			$data = array('erreur'=>'Login ou mot de passe incorrect');
			$this->templates->load('t_connexion', 'v_connexion', $data);
		}
		else
		{
			$this->authentif->connecter($authUser['id'], $authUser['nom'], $authUser['prenom'],$authUser['statut']);
			$this->index();
		}
	}
	
}

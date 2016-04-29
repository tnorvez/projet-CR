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
 * lien vers pages
 */	
	public function Accueil()
	{
	
		$data ['title'] = 'Accueil';
		$this->load->view('v-Accueil');
		 
	
	}
	
	public function Accueilco()
	{
		
		$data['nom']=$this->session->nom;
		$data ['title'] = 'Accueil';
		$this->load->view('v-Accueilco',$data);
		
	
	}
	
	public function Connexion()
	{
		
		$data ['title'] = 'Connexion';
		$this->load->view('v-connexion2');
	
	
	}
	

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
			$this->load->view('v-connexion2', $data);
		}
		else
		{
			$data = array();
			$data['nom']= $this->session->nom;
			$this->load->helper('url');
			$this->load->view('v-Accueilco', $data);
		
			
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
			$this->load->view('v-connexion2', $data);
		}
		else
		{
			$this->authentif->connecter($authUser['VIS_MATRICULE'], $authUser['VIS_NOM']);
			$this->index();
		}
	}
	
	public function deconnecter ()
	{
		
			$this->load->model('authentif');
			$this->authentif->deconnecter();
	
	}
	
	
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Contr�leur par d�faut de l'application
 * Si aucune sp�cification de contr�leur n'est pr�cis�e dans l'URL du navigateur
 * c'est le contr�leur par d�faut qui sera invoqu�. Son r�le est :
 * 		+ d'orienter vers le bon contr�leur selon la situation
 * 		+ de traiter le retour du formulaire de connexion 
*/
class C_compterendu extends CI_Controller {

	/**
	 * Fonctionnalit� par d�faut du contr�leur. 
	 * V�rifie l'existence d'une connexion :
	 * Soit elle existe et on redirige vers le contr�leur de VISITEUR, 
	 * soit elle n'existe pas et on envoie la vue de connexion
	*/
	public function ajoutCR()
	{
		
		$this->load->model('dataAccess');
		$data = array();
		$data['praticiens']=$this->dataAccess->getPraticien();
		$data['nom']=$this->session->nom;
		$this->load->view('v-nvCR',$data);
			
	}
	
	public function formulaireajoutCR()
	{
		$data['nom']=$this->session->nom;
		$id=$this->session->idUser;
		$praticien = $this->input->post('listePraticiens');
		$date = $this->input->post('startDate');
		$motif = $this->input->post('motif');
		$bilan = $this->input->post('bilan');
		
		$this->load->model('dataAccess');
		//$this->load->view('newCRvis',$data);
		$this->dataAccess->setCR($id,$praticien,$date,$bilan,$motif);
		$this->load->view('v-nvCR',$data);
		
		
	}
	
	public function listeCR()
	{
		
		$this->load->model('dataAccess');
		$data = array();
		$data['compterendus']=$this->dataAccess->getCR();
		$data['nom']=$this->session->nom;
		
		$this->load->view('v-listeCR',$data);
			
	}
	
	
	
	
	
	
	
}

?>
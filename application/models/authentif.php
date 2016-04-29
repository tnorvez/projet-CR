<?php
class Authentif extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	/**
	 * Teste si un quelconque visiteur est connect�
	 *
	 * @return vrai ou faux
	 */
	public function estConnecte()
	{
		return $this->session->userdata('idUser');
	}

	/**
	 * Enregistre dans une variable session les infos d'un visiteur
	 *
	 * @param $id
	 * @param $nom
	 * @param $prenom
	 */

	public function connecter($idUser,$nom)
	{	// TODO : s'assurer que les param�tres re�us sont coh�rents avec ceux m�moris�s en session

		$authUser = array(
				'idUser'  => $idUser,
				'nom' => $nom,
				
		);

		$this->session->set_userdata($authUser);
	}

	/**
	 * D�truit la session active et redirige vers le contr�leur par d�faut
	 */
	public function deconnecter()
	{
		$authUser = array(
				'idUser'  => '',
				'nom' => '',
				
		);

		$this->session->unset_userdata($authUser);
		$this->session->sess_destroy();

		$this->load->helper('url');
		redirect('/c_default/');
	}

	/**
	 * V�rifie en base de donn�es si les informations de connexions sont correctes
	 *
	 * @return : renvoie l'id, le nom et le prenom de l'utilisateur dans un tableau s'il est reconnu, sinon un tableau vide.
	 */
	public function authentifier ($login, $mdp)
	{	// TODO : s'assurer que les param�tres re�us sont coh�rents avec ceux m�moris�s en session

		$this->load->model('dataAccess');

		$authUser = $this->dataAccess->getInfosVisiteur($login, $mdp);

		return $authUser;
	}
}

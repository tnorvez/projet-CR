<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 
class Authentif extends CI_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	
	public function renvoie($praticien,$date,$motif,$bilan)
	{	// TODO : s'assurer que les param�tres re�us sont coh�rents avec ceux m�moris�s en session

		$renvoiPrat = array(
				'praticien'  => $praticien,
				'date' => $date,
				'motif'=> $motif,
				'bilan'=> $bilan,
				
				
		);


	}


	
}

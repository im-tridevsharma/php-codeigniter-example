<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function dateandtime()
	{
		echo date("d M Y | H:i:s");
	}
}

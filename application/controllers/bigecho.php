<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bigecho extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
    	$texts = array("a");
        $this->load->view('result', $texts);
    }

}
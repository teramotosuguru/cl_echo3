<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nomalecho extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

    public function index()
    {
    	$texts = array("a");
    	$this->view["texts"] = $texts;
    	$this->load->view('result', $this->view);
    }

}
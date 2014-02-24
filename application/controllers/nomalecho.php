<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/../models/EmptyChecker.php');

class Nomalecho extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('url');
        $text = $this->input->get_post("text");

        $Checker = new EmptyChecker($text);

        if($Checker->errorFlg){
            redirect('/top/'.urlencode($Checker->errorMessage), 'refresh');
        }

        $texts[] = $text;
        $this->view["texts"] = $texts;

        $this->load->view('result', $this->view);
    }

}
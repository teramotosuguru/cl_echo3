<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(dirname(__FILE__) . '/../models/Text.php');

class Top extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $textBuilder = new Text(1,"aaa");
        var_dump($textBuilder);
        $this->view["errorMesagese"] = "";
        $this->load->view('top', $this->view);
    }

}
<?php

require_once 'HistoryRepository.php';

class Histories extends HistoryRepository
{
    private $histories;

    public function __construct($histories) {
        $this->CI->load->model('T_tests');
    }

    public function getById($id) {

    }

    public function getAll() {

    }

}

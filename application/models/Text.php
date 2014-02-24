<?php

require_once 'History.php';

class Text extends History
{
    private $memberId;
    public $text;

    public function __construct($memberId, $text) {
    	$this->memberId = $memberId;
    	$this->text = $text;
    }

    public function getText() {
        $this->save($this->memberId , $this->text);
        return $this->text;
    }
}
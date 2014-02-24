<?php

require_once(dirname(__file__) . '/ErrorMessage.php');

class EmptyChecker extends ErrorMessage
{
    public $text;
    public $errorFlg;

    public function __construct($string) {
    	$this->errorFlg = FALSE;
        $this->text = $string;
        $this->check($this->text);
        return $this->errorFlg;
    }

    private function check($text) {
        if (empty ($text)) {
        	$this->errorFlg = TRUE;
            $this->text = $this->emptyErrorMessage();
        }
    }
}

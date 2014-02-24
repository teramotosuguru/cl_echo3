<?php

class ErrorMessage
{
    public $errorMessage;

    private function __construct() {
        $this->errorMessage = "";
    }

    public function emptyErrorMessage() {
        $this->errorMessage = "入力してください";
        return $this->errorMessage;
    }

    public function numberErrorMessage() {
        $this->errorMessage = "数値を入力してください";
        return $this->errorMessage;
    }

    public function japaneseErrorMessage() {
    	$this->errorMessage = "半角英数字を入力してください";
    	return $this->errorMessage;
    }

}

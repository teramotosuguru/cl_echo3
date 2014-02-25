<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bigecho extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

    public function bigecho($text)
    {

    	// 実行できないので動くかどうかは不明ですwww

        $text = "aaa";

        $this->load->library('text_builder');

        // ビルダーを生成
        $builder = new Text_Builder();

        // テキストクラスを生成
        $tex = $builder->build($text);

        // 関数名をセット
        $tex->set_param(__FUNCTION__);　// normalechoの場合はこいつを呼ばない

        var_dump($tex->get_text());

    	$texts = array("a");
        $this->load->view('result', $texts);
    }

}
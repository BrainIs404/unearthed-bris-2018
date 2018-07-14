<?php

class Test extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header.php', array('title'=>'Test page'));
		$this->load->view('test.php');
	}
}

?>
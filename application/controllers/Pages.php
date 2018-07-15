<?php

class Pages extends CI_Controller {
	
	public function index()
	{
		$this->load->view('templates/header.php', array('title'=>'Homepage'));
		$this->load->view('main.php');
	}
}

?>
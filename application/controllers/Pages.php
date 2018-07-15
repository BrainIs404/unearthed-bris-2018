<?php

class Pages extends CI_Controller {
	
	public function index() {
		$this->load->view('templates/header.php', array('title'=>'Homepage'));
		$this->load->view('main.php');
	}

	public function initialize() {
		$this->load->view('templates/header.php', array('title'=>'Values initialization'));
		$this->load->view('values.php');
	}
}

?>
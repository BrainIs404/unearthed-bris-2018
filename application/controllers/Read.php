<?php

class Read extends CI_Controller {
    
	public function index()
	{
		$this->load->model("Read_model");
		$this->Read_model->read();
	}
}

?>
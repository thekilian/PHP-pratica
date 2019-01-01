<?php

class Form extends CI_Controller {

	public function index() {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('frase', 'Frase', 'required');
		$this->form_validation->set_rules('autor', 'Autor', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('myform');
		} else {
			$this->load->view('formsuccess');
		}
	}
}
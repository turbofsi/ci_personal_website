<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index() {
		$this->home();
	}

	public function home() {
		$this->load->model("model_get");
		$data["results"] = $this->model_get->getData("home");

		$this->load->view('view_head');
		$this->load->view('view_header');
		$this->load->view('content_home', $data);
		$this->load->view('view_footer');
	}

	public function about() {
		$this->load->model('model_get');
		$data["results"] = $this->model_get->getData("about");

		$this->load->view('view_head');
		$this->load->view('view_header');
		$this->load->view('content_about', $data);
		$this->load->view('view_footer');
	}

	public function contact() {
		$this->load->view('view_head');
		$this->load->view('view_header');
		$this->load->view('content_contact');
		$this->load->view('view_footer');
	}

	public function send_email() {
		
	}





}	
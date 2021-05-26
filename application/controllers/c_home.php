<?php
class C_home extends CI_Controller
{
	public function index($page = 'home')
	{
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer');
	}

	public function Pendaftaran($page = 'Pendaftaran')
	{
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer');
	}

	public function artikel($page = 'artikel')
	{
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function index()
	{
		$this->load->view('welcome');
	}

	public function  About_us()
	{
		$this->load->view('about_us');
	}
	public function  Team()
	{
		$this->load->view('team');
	}
	public function  Service()
	{
		$this->load->view('service');
	}
	public function  Contact_us()
	{
		$this->load->view('contact_us');
	}
}

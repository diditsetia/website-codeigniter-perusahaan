<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->library('template');
		}

	public function index()
	{
		$this->template->halamanuser('user/v_beranda');
	}

	public function sejarah()
	{
		$this->template->halamanuser('user/v_sejarah');
	}

	public function visimisi()
	{
		$this->template->halamanuser('user/v_visimisi');
	}

	public function strukturorganisasi()
	{
		$this->template->halamanuser('user/v_strukturorganisasi');
	}

	public function layanan()
	{
		$this->template->halamanuser('user/v_layanan');
	}
	public function gallery()
	{
		$this->template->halamanuser('user/v_gallery');
	}
	public function contact()
	{
		$this->template->halamanuser('user/v_contact');
	}
}

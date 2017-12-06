<?php

	class Template {
		protected $_ci ;

		function __construct()
		{
			$this->_ci = &get_instance();
		}


		public function halamanuser($konten, $data = NULL)
		{
			$data['header']		= $this->_ci->load->view('user/v_header', $data, TRUE);
      $data['navbar']	= $this->_ci->load->view('user/v_navbarmenu',$data, TRUE);
			$data['konten'] 	= $this->_ci->load->view( $konten, $data, TRUE);
			$data['footer']		= $this->_ci->load->view('user/v_footer',$data,TRUE);

			$this->_ci->load->view('user/mainuser', $data);
		}

		public function halamanadmin($konten, $data = NULL)
		{
			$data['header']		= $this->_ci->load->view('admin/v_navbar', $data, TRUE);
			$data['konten'] 	= $this->_ci->load->view( $konten, $data, TRUE);
			$data['sidebar']	= $this->_ci->load->view('admin/v_sidebar',$data, TRUE);
			$data['footer']		= $this->_ci->load->view('admin/v_footer',$data,TRUE);

			$this->_ci->load->view('admin/mainadmin', $data);
		}

	}
?>

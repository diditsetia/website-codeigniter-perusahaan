<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->library('template');
			$this->load->model('webmodel');
			$this->load->library('session');
			$this->load->helper(array('form', 'url'));
		}

	public function index()
	{
		$this->template->halamanadmin('admin/v_dashboard');
	}

	public function visimisi()
	{
		$data['datavisimisi'] = $this->webmodel->tampilvisimisi();
		$this->template->halamanadmin('admin/v_visimisi',$data);
	}

	public function sejarah()
	{
		$data['datasejarah'] = $this->webmodel->tampilsejarah();
		$this->template->halamanadmin('admin/v_sejarah',$data);
	}

	public function strukturorganisasi()
	{
		$data['pictureso']	= $this->webmodel->tampilpictureso();
		$data['dataso'] 		= $this->webmodel->tampilso();
		$this->template->halamanadmin('admin/v_strukturorganisasi',$data);
	}

	public function layanan()
	{
		$data['datalayanan'] 		= $this->webmodel->tampillayanan();
		$this->template->halamanadmin('admin/v_layanan',$data);
	}

	public function gallery()
	{
		$data['datagallery'] 		= $this->webmodel->tampilgallery();
		$this->template->halamanadmin('admin/v_gallery',$data);
	}

	public function contact()
	{
		$data['datacontact']	= $this->webmodel->tampilcontact();
		$this->template->halamanadmin('admin/v_contact',$data);
	}

	public function header()
	{
		$data['dataheader'] = $this->webmodel->tampilheader();
		$this->template->halamanadmin('admin/v_header',$data);
	}



	public function aksivisimisi()
	{
			$config['upload_path']          = './assets/admin/img/penyimpananfoto';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 70680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);

			if ( ! $this->upload->do_upload('userfile')) {
			 	$error = array('error' => $this->upload->display_errors());
			 	redirect(site_url('admin/visimisi',$error));

			  }else {

			  	$visi =	$this->input->post('visi');
					$misi = $this->input->post('misi');

			   $datavisimisi = array(
			   'visi' 					=> $this->input->post('visi'),
			   'misi'						=> $this->input->post('misi'),
			   'create_at'			=> date('Y-m-d H:i:s'),
			   'foto_visimisi'	=> $this->upload->data()['file_name'],
			  	);

			  	$this->webmodel->tambahvisimisi($datavisimisi);
					redirect(site_url('admin/visimisi'));
		}
	}

	public function editvisimisi($id)
	{
		$idnya = array('id_visimisi' => $id);
	  $data['editvisimisi'] = $this->webmodel->editvisimisi($idnya,'tabel_visimisi')->row();
	  $this->template->halamanadmin('admin/v_editvisimisi',$data);
	}

	public function updatevisimisi()
	{
				$config['upload_path']          = './assets/admin/img/penyimpananfoto';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 10000;
				$config['max_width']            = 10240;
				$config['max_height']           = 7680;

				$this->upload->initialize($config);
				$this->load->library('upload',$config);

			if ( ! $this->upload->do_upload('userfile')) {

			   $id = $this->input->post('id');


			   $datavisimisi = array(

				   'visi'						=> $this->input->post('visi'),
					 'misi'						=> $this->input->post('misi'),
				   'update_at'			=> date('Y-m-d H:i:s'),
				   'foto_visimisi'	=> $this->input->post('oldfile'),
			  	);

			   $where = array(
					'id_visimisi' => $id
				);

			} else {

			   	$id = $this->input->post('id');


			   $datavisimisi = array(

			   	'visi'					=> $this->input->post('visi'),
					'misi'					=> $this->input->post('misi'),
			   	'update_at'			=> date('Y-m-d H:i:s'),
			   	'foto_visimisi'	=> $this->upload->data()['file_name'],
			  	);

			   $where = array(

				'id_visimisi' => $id

				);
			 }

			 	$this->webmodel->updatevisimisi($datavisimisi,$where);
				redirect(site_url('admin/visimisi'));
	}

	public function hapusvisimisi($id)
	{
		$this->webmodel->hapusvisimisi($id);
	  redirect(site_url('admin/visimisi'));
	}



	public function aksisejarah()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('admin/sejarah',$error));

			}else {

			 $datasejarah = array(
			 'sejarah' 				=> $this->input->post('sejarah'),
			 'create_at'			=> date('Y-m-d H:i:s'),
			 'foto_sejarah'		=> $this->upload->data()['file_name'],
				);

				$this->webmodel->tambahsejarah($datasejarah);
				redirect(site_url('admin/sejarah'));
			}
	}

	public function editsejarah($id)
	{
		$idnya = array('id_sejarah' => $id);
	  $data['editsejarah'] = $this->webmodel->editsejarah($idnya,'tabel_sejarah')->row();
	  $this->template->halamanadmin('admin/v_editsejarah',$data);
	}

	public function updatesejarah()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

	if ( ! $this->upload->do_upload('userfile')) {

		 $id = $this->input->post('id');


		 $datasejarah = array(

			 'sejarah'				=> $this->input->post('sejarah'),
			 'update_at'			=> date('Y-m-d H:i:s'),
			 'foto_sejarah'		=> $this->input->post('oldfile'),
			);

		 $where = array(
			'id_sejarah' => $id
		);

	} else {

			$id = $this->input->post('id');


		 $datasejarah = array(

			'sejarah'				=> $this->input->post('sejarah'),
			'update_at'			=> date('Y-m-d H:i:s'),
			'foto_sejarah'	=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_sejarah' => $id

		);
	 }

		$this->webmodel->updatesejarah($datasejarah,$where);
		redirect(site_url('admin/sejarah'));
	}

	public function hapussejarah($id)
	{
		$this->webmodel->hapussejarah($id);
	  redirect(site_url('admin/sejarah'));
	}

	public function aksiso(){
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('admin/strukturorganisasi',$error));

			}else {

			 $data = array(
			 'name' 				=> $this->input->post('nama'),
			 'posisi' 				=> $this->input->post('posisi'),
			 'status' 				=> $this->input->post('status'),
			 'create_at'			=> date('Y-m-d H:i:s'),
			 'foto'		=> $this->upload->data()['file_name'],
				);


				$this->webmodel->tambahstrukturorganisasi($data);
				redirect(site_url('admin/strukturorganisasi'));
			}
	}

	public function aksiuploadpicture()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('admin/strukturorganisasi',$error));

			}else {

			 $data = array(
			 'create_at'			=> date('Y-m-d H:i:s'),
			 'picture'		=> $this->upload->data()['file_name'],
				);

				$this->webmodel->tambahpicture($data);
				redirect(site_url('admin/strukturorganisasi'));
			}
	}

	public function editso($id)
	{
		$idnya = array('id_strukturorganisasi' => $id);
	  $data['editso'] = $this->webmodel->editso($idnya,'tabel_strukturorganisasi')->row();
	  $this->template->halamanadmin('admin/v_editso',$data);
	}

	public function updateso()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

	if ( ! $this->upload->do_upload('userfile')) {

		 $id = $this->input->post('id');


		 $dataso = array(

			 'name'					=> $this->input->post('nama'),
			 'posisi'				=> $this->input->post('posisi'),
			 'status'				=> $this->input->post('status'),
			 'update_at'		=> date('Y-m-d H:i:s'),
			 'foto'					=> $this->input->post('oldfile'),
			);

		 $where = array(
			'id_strukturorganisasi' => $id
		);

	} else {

			$id = $this->input->post('id');


		 $dataso = array(

			'name'					=> $this->input->post('nama'),
			'posisi'				=> $this->input->post('posisi'),
			'status'				=> $this->input->post('status'),
			'update_at'			=> date('Y-m-d H:i:s'),
			'foto'					=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_strukturorganisasi' => $id

		);
	 }

		$this->webmodel->updateso($dataso,$where);
		redirect(site_url('admin/strukturorganisasi'));
	}

	public function hapusso($id)
	{
		$this->webmodel->hapusso($id);
	  redirect(site_url('admin/strukturorganisasi'));
	}

	public function editpictureso($id)
	{
		$idnya = array('id_picture' => $id);
		$data['editpictureso'] = $this->webmodel->editpictureso($idnya,'picture_so')->row();
		$this->template->halamanadmin('admin/v_editpictureso',$data);
	}
	public function updatepictureso()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

	if ( ! $this->upload->do_upload('userfile')) {

		 $id = $this->input->post('id');


		 $datapictureso = array(

			 'update_at'		=> date('Y-m-d H:i:s'),
			 'picture'			=> $this->input->post('oldfile'),
			);

		 $where = array(
			'id_picture' => $id
		);

	} else {

			$id = $this->input->post('id');


		 $datapictureso = array(


			'update_at'			=> date('Y-m-d H:i:s'),
			'picture'				=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_picture' => $id

		);
	 }

		$this->webmodel->updatepictureso($datapictureso,$where);
		redirect(site_url('admin/strukturorganisasi'));
	}

	public function hapuspictureso($id)
	{
		$this->webmodel->hapuspictureso($id);
	  redirect(site_url('admin/strukturorganisasi'));
	}

	public function aksilayanan()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 102400;
		$config['max_height']           = 706800;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('admin/layanan',$error));

			}else {

			 $data = array(
			 'layanan' 					=> $this->input->post('layanan'),
			 'create_at'				=> date('Y-m-d H:i:s'),
			 'picture'		=> $this->upload->data()['file_name'],
				);


				$this->webmodel->tambahlayanan($data);
				redirect(site_url('admin/layanan'));
			}
	}

	public function editlayanan($id)
	{
		$idnya = array('id_layanan' => $id);
		$data['editlayanan'] = $this->webmodel->editlayanan($idnya,'tabel_layanan')->row();
		$this->template->halamanadmin('admin/v_editlayanan',$data);
	}

	public function updatelayanan()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

	if ( ! $this->upload->do_upload('userfile')) {

		 $id = $this->input->post('id');


		 $datalayanan = array(

			 'layanan'			=> $this->input->post('layanan'),
			 'update_at'		=> date('Y-m-d H:i:s'),
			 'picture'					=> $this->input->post('oldfile'),
			);

		 $where = array(
			'id_layanan' => $id
		);

	} else {

			$id = $this->input->post('id');


		 $datalayanan = array(

			'layanan'				=> $this->input->post('layanan'),
			'update_at'			=> date('Y-m-d H:i:s'),
			'picture'				=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_layanan' => $id

		);
	 }

		$this->webmodel->updatelayanan($datalayanan,$where);
		redirect(site_url('admin/layanan'));
	}

	public function hapuslayanan($id)
	{
		$this->webmodel->hapuslayanan($id);
	  redirect(site_url('admin/layanan'));
	}

	public function aksigallery()
	{
			$config['upload_path']          = './assets/admin/img/penyimpananfoto';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 70680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);

			if ( ! $this->upload->do_upload('userfile')) {
			 	$error = array('error' => $this->upload->display_errors());
			 	redirect(site_url('admin/gallery',$error));

			  }else {

			  	$judullayanan =	$this->input->post('title');

			  	$this->db->like('judul',$judullayanan);
			  	$query = $this->db->get('tabel_gallery');
					$jumlahtitle = $query->num_rows();



			   $datagallery = array(
			   'judul' 				=> $this->input->post('title'),
			   'keterangan'		=> $this->input->post('keterangan'),
			   'create_at'		=> date('Y-m-d H:i:s'),
			   'foto'				=> $this->upload->data()['file_name'],
			  	);


			   if ($jumlahtitle != 0) {

			  	$datagallery['slug'] =  $this->input->post('title').$jumlahtitle;

			  	} else{
			  	 $datagallery['slug'] = $this->input->post('title');
			  	}

			  	$this->webmodel->tambahgallery($datagallery);
				redirect(site_url('admin/gallery'));

			 }
	}

	public function editgallery($id)
	{
		$idnya = array('id_gallery' => $id);
		$data['editgallery'] = $this->webmodel->editgallery($idnya,'tabel_gallery')->row();
		$this->template->halamanadmin('admin/v_editgallery',$data);
	}

	public function updategallery()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {

			 $id 					=  $this->input->post('id');

				$judul = $this->input->post('title');
				$this->db->like('judul',$judul);
				$query 	= $this->db->get('tabel_gallery');
				$jumlahdatajudul = $query->num_rows();

			 $datagallery = array(
				 'judul' 				=> $this->input->post('title'),
				 'keterangan'		=> $this->input->post('keterangan'),
				 'update_at'		=> date('Y-m-d H:i:s'),
				 'foto'			=> $this->input->post('oldfile'),
				);


			 if ($jumlahdatajudul != 0) {
					$datagallery['slug'] =  $this->input->post('title').$jumlahdatajudul;
				} else{
					$datagallery['slug'] =  $this->input->post('title');
				}

			 $where = array(
				'id_gallery' => $id
			);

		} else {

				$judul  = $this->input->post('title');
				$this->db->like('judul',$judul);
				$query 	= $this->db->get('tabel_gallery');
				$jumlahdatajudul = $query->num_rows();

				$id 					= $this->input->post('id');

			 $datagallery = array(
				'judul' 				=> $this->input->post('title'),
				'keterangan'		=> $this->input->post('keterangan'),
				'update_at'			=> date('Y-m-d H:i:s'),
				'foto'					=> $this->upload->data()['file_name'],
				);

			 if ($jumlahdatajudul != 0) {
					$datagallery['slug'] =  $this->input->post('title').$jumlahdatajudul;
				} else{
					$datagallery['slug'] =  $this->input->post('title');
				}

			 $where = array(
				 'id_gallery' => $id
			);


		 }

			$this->webmodel->updategallery($datagallery,$where);
			redirect(site_url('admin/gallery'));
	}

	public function hapusgallery($id)
	{
		$this->webmodel->hapusgallery($id);
	  redirect(site_url('admin/gallery'));
	}

	public function aksicontact()
	{

			 $data = array(
			 'address' 					=> $this->input->post('address'),
			 'phone' 						=> $this->input->post('phone'),
			 'email' 						=> $this->input->post('email'),
			 'maps'							=> $this->input->post('maps'),
			 'create_at'				=> date('Y-m-d H:i:s'),
			);


				$this->webmodel->tambahcontact($data);
				redirect(site_url('admin/contact'));

	}

	public function editcontact($id)
	{
		$idnya = array('id_contact' => $id);
		$data['editcontact'] = $this->webmodel->editcontact($idnya,'tabel_contact')->row();
		$this->template->halamanadmin('admin/v_editcontact',$data);
	}

	public function updatecontact($id)
	{


		 $id = $this->input->post('id');


		 $datacontact = array(

			 'address'		=> $this->input->post('address'),
			 'phone'			=> $this->input->post('phone'),
			 'email'			=> $this->input->post('email'),
			 'maps'				=> $this->input->post('maps'),
			 'update_at'	=> date('Y-m-d H:i:s'),
			);

		 $where = array(
			'id_contact' => $id
		);

		$this->webmodel->updatecontact($datacontact,$where);
		redirect(site_url('admin/contact'));
	}

	public function hapuscontact($id)
	{
		$this->webmodel->hapuscontact($id);
	  redirect(site_url('admin/contact'));
	}

	public function aksiheader()
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 70680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

		if ( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			redirect(site_url('admin/header',$error));

			}else {

			 $dataheader = array(
			 'nama_perusahaan' 		=> $this->input->post('perusahaan'),
			 'tagline' 						=> $this->input->post('tagline'),
			 'create_at'					=> date('Y-m-d H:i:s'),
			 'logo'								=> $this->upload->data()['file_name'],
				);

				$this->webmodel->tambahheader($dataheader);
				redirect(site_url('admin/header'));
			}
	}

	public function editheader($id)
	{
		$idnya = array('id_header' => $id);
		$data['editheader'] = $this->webmodel->editheader($idnya,'tabel_header')->row();
		$this->template->halamanadmin('admin/v_editheader',$data);
	}

	public function updateheader($id)
	{
		$config['upload_path']          = './assets/admin/img/penyimpananfoto';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->upload->initialize($config);
		$this->load->library('upload',$config);

	if ( ! $this->upload->do_upload('userfile')) {

		 $id = $this->input->post('id');


		 $dataheader = array(

			 'nama_perusahaan'		=> $this->input->post('perusahaan'),
			 'tagline'						=> $this->input->post('tagline'),
			 'update_at'					=> date('Y-m-d H:i:s'),
			 'logo'								=> $this->input->post('oldfile'),
			);

		 $where = array(
			'id_header' => $id
		);

	} else {

			$id = $this->input->post('id');


		 $dataheader = array(

			 'nama_perusahaan'		=> $this->input->post('perusahaan'),
			 'tagline'						=> $this->input->post('tagline'),
			 'update_at'					=> date('Y-m-d H:i:s'),
			 'logo'								=> $this->upload->data()['file_name'],
			);

		 $where = array(

		'id_header' => $id

		);
	 }

		$this->webmodel->updateheader($dataheader,$where);
		redirect(site_url('admin/header'));
	}

	public function hapusheader($id)
	{
		$this->webmodel->hapusheader($id);
	  redirect(site_url('admin/header'));
	}
}

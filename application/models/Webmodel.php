<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webmodel extends CI_Model {

	public function tambahvisimisi($data)
	{
	   $this->db->insert('tabel_visimisi',$data);
	}

  public function tampilvisimisi()
  {
    $query = $this->db->get('tabel_visimisi');
		$datavisimisi = $query->row_array();
		return $datavisimisi;
  }

  public function editvisimisi($idnya, $table)
  {
    return $this->db->get_where($table,$idnya);
  }

	public function updatevisimisi($datavisimisi,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_visimisi', $datavisimisi);
	}

	public function hapusvisimisi($id)
	{
		$this->db->where('id_visimisi',$id);
		$this->db->delete('tabel_visimisi');
	}

	public function tambahsejarah($data)
	{
		$this->db->insert('tabel_sejarah',$data);
	}

	public function tampilsejarah()
	{
		$query = $this->db->get('tabel_sejarah');
		$datasejarah = $query->row_array();
		return $datasejarah;
	}

	public function editsejarah($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatesejarah($datasejarah,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_sejarah', $datasejarah);
	}

	public function hapussejarah($id)
	{
		$this->db->where('id_sejarah',$id);
		$this->db->delete('tabel_sejarah');
	}

	public function tambahstrukturorganisasi($data)
	{
		$this->db->insert('tabel_strukturorganisasi',$data);
	}

	public function tambahpicture($data)
	{
		$this->db->insert('picture_so',$data);
	}

	public function tampilso()
	{
		$query = $this->db->get('tabel_strukturorganisasi');
		$dataso = $query->result_array();
		return $dataso;
	}

	public function tampilpictureso()
	{
		$query = $this->db->get('picture_so');
		$pictureso = $query->row_array();
		return $pictureso;
	}

	public function editso($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updateso($dataso,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_strukturorganisasi', $dataso);
	}

	public function hapusso($id)
	{
		$this->db->where('id_strukturorganisasi',$id);
		$this->db->delete('tabel_strukturorganisasi');
	}
	public function editpictureso($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatepictureso($datapictureso,$where)
	{
		$this->db->where($where);
		$this->db->update('picture_so', $datapictureso);
	}

	public function hapuspictureso($id)
	{
		$this->db->where('id_picture',$id);
		$this->db->delete('picture_so');
	}

	public function tambahlayanan($data)
	{
		$this->db->insert('tabel_layanan',$data);
	}

	public function tampillayanan()
	{
		$query = $this->db->get('tabel_layanan');
		$datalayanan = $query->row_array();
		return $datalayanan;
	}

	public function editlayanan($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatelayanan($datalayanan,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_layanan', $datalayanan);
	}

	public function hapuslayanan($id)
	{
		$this->db->where('id_layanan',$id);
		$this->db->delete('tabel_layanan');
	}

	public function tambahgallery($data)
	{
		$this->db->insert('tabel_gallery',$data);
	}

	public function tampilgallery()
	{
		$query = $this->db->get('tabel_gallery');
		$datagallery = $query->result_array();
		return $datagallery;
	}

	public function editgallery($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updategallery($datagallery,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_gallery', $datagallery);
	}

	public function hapusgallery($id)
	{
		$this->db->where('id_gallery',$id);
		$this->db->delete('tabel_gallery');
	}

	public function tambahcontact($data)
	{
		$this->db->insert('tabel_contact',$data);
	}
	public function tampilcontact()
	{
		$query = $this->db->get('tabel_contact');
		$datacontact = $query->row_array();
		return $datacontact;
	}

	public function editcontact($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updatecontact($datacontact,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_contact', $datacontact);
	}
	public function hapuscontact($id)
	{
		$this->db->where('id_contact',$id);
		$this->db->delete('tabel_contact');
	}

	public function tambahheader($data)
	{
		$this->db->insert('tabel_header',$data);
	}

	public function tampilheader()
	{
		$query = $this->db->get('tabel_header');
		$dataheader = $query->row_array();
		return $dataheader;
	}
	public function editheader($idnya,$table)
	{
		return $this->db->get_where($table,$idnya);
	}

	public function updateheader($dataheader,$where)
	{
		$this->db->where($where);
		$this->db->update('tabel_header', $dataheader);
	}

	public function hapusheader($id)
	{
		$this->db->where('id_header',$id);
		$this->db->delete('tabel_header');
	}
}

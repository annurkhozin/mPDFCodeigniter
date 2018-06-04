<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaCTRL extends CI_Controller {
	private $tbl_anggota = 'anggota';

	public function index() {
		$data['title'] = 'Data Anggota';
		$data['content'] = 'beranda.php';
		$where = array(
			'is_active' => 1
		);
		$data['anggota'] = $this->M__db->get_cek_order($this->tbl_anggota,'*',$where,'nama','asc')->result();
		$this->load->view('anggota/Template',$data);
	}

	public function Tambah(){
		$fileName = str_replace(' ', '_', str_replace('\'', '', $_FILES['photo']['name']));
		if($fileName!=null){
			$this->load->library('upload');
			$config['upload_path'] = "./bootstrap/upload";
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '100000';
			$config['file_name'] =$fileName; 
			$this->upload->initialize($config);
			$upload_data = $this->upload->data('photo');
			if (!$this->upload->do_upload("photo")){
				$this->session->set_flashdata('error','Ada Kesalahan Dalam Menambah Foto!');
			}else{
				$data = array(
					'nik' => $this->input->post('nik'),
					'nama' => $this->input->post('nama'),
					'pekerjaan' => $this->input->post('pekerjaan'),
					'jabatan' => $this->input->post('jabatan'),
					'agama' => $this->input->post('agama'),
					'alamat' => $this->input->post('alamat'),
					'ttl' => $this->input->post('ttl'),
					'masa_berlaku' => $this->input->post('masa_beraku'),
					'jenis_kelamin' => $this->input->post('jk'),
					'photo' => $fileName,
					'is_active' => $this->input->post('is_active')
				);
				$query = $this->M__db->simpan($this->tbl_anggota,$data);
				if($query){
					$this->session->set_flashdata('success','Anggota berhasil di Tambahkan!');
				}else{
					$this->session->set_flashdata('error','Anggota GAGAL di Tambahkan!');
				}
			}
		}else{
			$this->session->set_flashdata('error','Tidak ada photo yang di upload!');
		}
		redirect(base_url());
	}
	public function Edit(){
		if($this->input->post('nik')==$this->input->post('nik_old')){
			$hasil=0;
		}else{
			$where = array(
				'nik' => $this->input->post('nik')
				);
			$hasil=$this->M__db->cek('anggota','nik',$where)->num_rows();
		}
		if($hasil>0){
			$this->session->set_flashdata('error','NIK '.$this->input->post('nik').' sudah ada!');
		}else{
			$fileName = str_replace(' ', '_', str_replace('\'', '', $_FILES['photo']['name']));
			if($fileName!=null){
				$this->load->library('upload');
				$config['upload_path'] = "./bootstrap/upload";
				$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
				$config['max_size']	= '1000000';
				$config['file_name'] =$fileName; 
				$this->upload->initialize($config);
				$upload_data = $this->upload->data('photo');
				if (!$this->upload->do_upload("photo")){
					$this->session->set_flashdata('error','Ada Kesalahan Dalam Menambah Gambar!');
					redirect(base_url());
				}else{
					$photo = $fileName;
					$location = "./bootstrap/upload/".$this->input->post('photo_old');
					if(!empty($location)){
				 		@unlink($location);
					}
				}
			}else{
				$photo = $this->input->post('photo_old');
			}
			$data = array(
				'nik' => $this->input->post('nik'),
				'nama' => $this->input->post('nama'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'jabatan' => $this->input->post('jabatan'),
				'agama' => $this->input->post('agama'),
				'alamat' => $this->input->post('alamat'),
				'ttl' => $this->input->post('ttl'),
				'masa_berlaku' => $this->input->post('masa_beraku'),
				'jenis_kelamin' => $this->input->post('jk'),
				'photo' => $photo
				);
			$where = array(
				'no' => $this->input->post('no'),
				);
			$this->M__db->update('anggota',$where,$data);
			$this->session->set_flashdata('success','Anggota berhasil diedit!');	
		}
		redirect(base_url());
	}
	public function EditKTA(){
		$fileNamettd = str_replace(' ', '_', str_replace('\'', '', $_FILES['ttd']['name']));
		$fileNameLogo = str_replace(' ', '_', str_replace('\'', '', $_FILES['logo']['name']));
		if($fileNamettd!=null){
			$this->load->library('upload');
			$config['upload_path'] = "./bootstrap/upload";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']	= '1000000';
			$config['file_name'] =$fileNamettd; 
			$this->upload->initialize($config);
			$upload_data = $this->upload->data('ttd');
			if (!$this->upload->do_upload("ttd")){
				$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload TTD Gambar!');
				redirect(base_url());
			}else{
				$photottd = $fileNamettd;
				$location = "./bootstrap/upload/".$this->input->post('ttd_old');
				if(!empty($location)){
			 		@unlink($location);
				}
			}
		}else{
			$photottd = $this->input->post('ttd_old');
		}
		if($fileNameLogo!=null){
			$this->load->library('upload');
			$config['upload_path'] = "./bootstrap/upload";
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']	= '1000000';
			$config['file_name'] =$fileNameLogo; 
			$this->upload->initialize($config);
			$upload_data = $this->upload->data('logo');
			if (!$this->upload->do_upload("logo")){
				$this->session->set_flashdata('error','Ada Kesalahan Dalam Upload Logo!');
				redirect(base_url());
			}else{
				$photologo = $fileNameLogo;
				$location = "./bootstrap/upload/".$this->input->post('logo_old');
				if(!empty($location)){
			 		@unlink($location);
				}
			}
		}else{
			$photologo = $this->input->post('logo_old');
		}
		$data = array(
			'header' => $this->input->post('header'),
			'tgl_ttd' => $this->input->post('tgl_ttd'),
			'ttd' => $photottd,
			'logo' => $photologo
			);
		$where = array(
			'id' => $this->input->post('id'),
			);
		$this->M__db->update('info_kta',$where,$data);
		$this->session->set_flashdata('success','Info KTA berhasil diedit!');
		redirect(base_url());
	}
	public function Delete(){
		$id = $this->uri->segment(2);
		$where = array(
			'no' => $id
		);
		$data = array(
			'is_active' => 0
		);
		$query = $this->M__db->update($this->tbl_anggota,$where,$data);
		if($query){
			$this->session->set_flashdata('success','Anggota berhasil di Nonaktifkan!');
		}else{
			$this->session->set_flashdata('error','Anggota GAGAL di Nonaktifkan!');
		}
		redirect(base_url());
	}

	public function loadView(){
		$action =$this->input->post('action');
		$where = array(
			'no' => $this->input->post('no')
			);
		$data['dataAgama'] = $this->M__db->get_all('agama')->result_array();
		$data['dataJabatan'] = $this->M__db->get_all('jabatan')->result_array();
		$data['dataJk'] = $this->M__db->get_all('jenis_kelamin')->result_array();
		$data['row'] = $this->M__db->cek('anggota','*',$where)->row_array();
		if($action=='detail'){
			$this->load->view('anggota/Detail', $data);
		}elseif($action=='edit'){
			$this->load->view('anggota/Edit', $data);
		}elseif($action=='infoKTA'){
			$data['dataKTA'] = $this->M__db->get_all('info_kta')->row_array();
			$this->load->view('anggota/infoKTA', $data);
		}else{
			$this->load->view('anggota/Tambah',$data);
		}
	}

	
}

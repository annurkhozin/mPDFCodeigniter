<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CetakCTRL extends CI_Controller {
	
	// function index(){
 //        $tgl_cetak = date('d F Y H-i-s');
	//    	$pdfFilePath = "Kartu-Anggota-".$tgl_cetak.".pdf"; //tentukan nama file dan lokasi report yang akan kita buat 
	//    	ini_set('memory_limit','32M'); 

	// 	$html = $this->load->view('welcome_message','',true);
	// 	$this->load->library('pdf');
	// 	$pdf = $this->pdf->load();
	// 	$pdf->SetFooter(base_url().'|{PAGENO}|'.$tgl_cetak); 
	// 	$pdf->WriteHTML($html);
	// 	$pdf->Output($pdfFilePath, 'D');
	// }

	function index(){
		$data['title'] = 'Cetak Kartu Anggota';
		$id=$this->input->post('noAnggota');
		if(empty($id)){
			$this->session->set_flashdata('error','Tidak Ada Data yang dicetak!');
			redirect(base_url());
		}else{
			$data['dataAnggota'] = $this->db->where_in('no',$id)->get('anggota')->result();
			$data['infoKTA'] = $this->db->get('info_kta')->row_array();
			// $this->load->view('anggota/cetakKartu',$data);

			$tgl_cetak = date('d F Y H-i-s');
		   	$pdfFilePath = "Kartu-Anggota-".$tgl_cetak.".pdf"; //nama file
		   	ini_set('memory_limit','320M'); 

			$html = $this->load->view('anggota/cetakKartu',$data, true);

			$this->load->library('pdf');
			$pdf = $this->pdf->load();

			$pdf->SetHeader('Mitra Karang Taruna Plesungan'); 
			$pdf->SetFooter($tgl_cetak.''.'|{PAGENO}'); 
			$pdf->WriteHTML(utf8_encode($html));
			$pdf->Output($pdfFilePath, 'D');
			// $pdf->Output();
		}
	}
	
}

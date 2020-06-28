<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('short_number');
		$this->load->model('M_transaksi');
		$this->load->library('pdf');
	}
		
	public function index()
	{
		$data['title'] = 'Home';
		$data['subtitle'] = 'Home';
		$data['page'] = 'home';
		$this->load->view('v_index', $data);
	}
	public function contact()
	{
		
		$data['page'] = 'kontak';
		$this->load->view('v_index', $data);
	}

	public function add_pesan()
	{
		$this->load->model('M_nomer');
		$autotiket = $this->M_nomer->autotiket('belitiket','id_tiket','TK');
		$data['id_tiket'] = $autotiket;
		$data['title'] = 'Pesan Tiket';
		$data['page'] = 'user/pesan';
		// $data['hasil'] = $this->db->get('belitiket'); 
		// $data['created_at'] = date('Y-m-d');
		// $data['transaction_id'] = $transaction_id;
		$data['query']= $this->M_transaksi->Tampiltanggal();
        // $data['query'] = $this->db->get('belitiket', array('created_at' => "$created_at"));
        // $data['query'] = $this->db->get('belitiket');
		$this->load->view('v_index', $data);
		
	}
	
	public function save_tiket()
	{
		$id_ktp = $this->input->post('id_ktp');
		$nama = $this->input->post('nama');
		$id_tiket = $this->input->post('id_tiket');
		$tgl_brngkt = $this->input->post('tgl_brngkt');
		$alamat = $this->input->post('alamat');
		$no_tlp = $this->input->post('no_tlp');
		$id_rute =$this->input->post('id_rute');
		$created_at = date('Y-m-d H:i:s');
		$updated_at = '';

		$data = array(
			'id_rute'=> $id_rute,
			'id_ktp'=> $id_ktp,
			'id_tiket'=> $id_tiket,
			'tgl_brngkt'=> $tgl_brngkt,
			'nama'=> $nama,
			'alamat'=> $alamat,
			'no_tlp'=> $no_tlp,
			'created_at'=> $created_at,
			'updated_at'=> $updated_at
		);
		$this->db->insert('belitiket', $data);

		redirect('home/add_pesan');
	}

	public function cetak_id($id) {
		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,10,'NEW MUTIARA TRAVEL',0,1,'C');
        $pdf->SetFont('Courier','I',9);
        $pdf->Cell(190,7,'Jl. Patimura 39 Buntu Kec. Kroya Kab. Cilacap',0,1,'C');
        $pdf->SetFont('Helvetica','B',11);
        $pdf->Cell(190,7,'TANDA BUKTI PEMESANAN TIKET ',1,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
		$pdf->Cell(10,10,'',0,1);
		$hasil = $this->M_transaksi->CetakID($id);
        foreach ($hasil as $q){
        $pdf->SetFont('Courier','B',11);
		$pdf->Cell(38,7,'ID Tiket',0,0);
		$pdf->Cell(38,7,$q['id_tiket'],0,1);
		$pdf->Cell(38,7,'Nama',0,0);
		$pdf->Cell(38,7,$q['nama'],0,1);
		$pdf->Cell(38,7,'No KTP',0,0);
		$pdf->Cell(38,7,$q['id_ktp'],0,1);
		$pdf->Cell(38,7,'Tujuan',0,0);
		$pdf->Cell(38,7,$q['tujuan'],0,1);
		$pdf->Cell(38,7,'Alamat',0,0);
		$pdf->Cell(38,7,$q['alamat'],0,1);
		$pdf->Cell(38,7,'NO HP',0,0);
		$pdf->Cell(38,7,$q['no_tlp'],0,1);
		$pdf->Cell(38,7,'Tgl Berangkat',0,0);
		$pdf->Cell(38,7,$q['tgl_brngkt'],0,1);
		$pdf->Cell(38,7,'Tgl Pesan',0,0);
		$pdf->Cell(38,7,$q['created_at'],0,1);
		$pdf->SetFont('Courier','B',12);
		$pdf->Cell(10,10,'',0,1);
		$pdf->Cell(190,7,'Owner',0,1,'C');
		$pdf->Cell(3,3,'',0,1);
		$pdf->Cell(190,7,'Imam Sutaryo',0,1,'C');
        }
		$pdf->Output();
	}

	public function test()
	{
		echo "Menggunakan uri segment pada codeigniter". $this->uri->segment('2');
	}
}

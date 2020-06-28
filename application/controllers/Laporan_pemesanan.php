<?php
Class Laporan_pemesanan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('M_transaksi');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,10,'NEW MUTIARA TRAVEL',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'PEMESANAN TIKET ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,10,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(17,8,'ID TRX',1,0);
        $pdf->Cell(28,8,'Id Tiket',1,0);
        $pdf->Cell(20,8,'No KTP',1,0);
        $pdf->Cell(37,8,'Nama',1,0);
        $pdf->Cell(20,8,'Alamat',1,0);
        $pdf->Cell(30,8,'NO HP',1,0);
        $pdf->Cell(40,8,'Tgl Pesan',1,1);
        $pdf->SetFont('Arial','',10);
        $hasil = $this->M_transaksi->Tampiltiket();
        foreach ($hasil as $row){
            $pdf->Cell(17,8,$row->transaction_id,1,0);
            $pdf->Cell(28,8,$row->id_tiket,1,0);
            $pdf->Cell(20,8,$row->id_ktp,1,0);
            $pdf->Cell(37,8,$row->nama,1,0);
            $pdf->Cell(20,8,$row->alamat,1,0);
            $pdf->Cell(30,8,$row->no_tlp,1,0);
            $pdf->Cell(40,8,$row->created_at,1,1);
        }
        $pdf->Output();
    }
}
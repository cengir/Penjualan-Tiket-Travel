<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->helper('short_number');
         $this->load->library('pdf');
		$this->load->model('M_transaksi');
	}
	public function index()
	{
		$data['title'] = 'Pemesanan';
        $data['subtitle'] = 'Pemesanan';
        $data['page'] = 'Admin/pemesanan/pesan';
        $data['hasil'] = $this->M_transaksi->Tampiltiket();

		$this->load->view('Admin/v_index', $data);
    }
    public function delete_pesan($id)
	{
       
        $this->db->where('transaction_id', $id);
        $this->db->delete('belitiket');

        redirect('pesan');
    
    }
    function cetak_id($id){
       

        $pdf = new FPDF("l","cm","A4");

        $pdf->SetMargins(0.5,1,1);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','B',11);
        $pdf->Image('assets/images/logo-muta.png',1,1,2,2);
        $pdf->SetX(4);            
        $pdf->MultiCell(19.5,0.5,'NEW MUTIARA TRAVEL',0,'L');
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'Telepon : +62 81327015333',0,'L');    
        $pdf->SetFont('Arial','B',10);
        $pdf->SetX(4);
        $pdf->MultiCell(19.5,0.5,'Buntu, Keluarahan Buntu, Kecamatan Kroya, Kabupaten Cilacap',0,'L');
        $pdf->SetX(4);
        $pdf->Line(1,3.1,28.5,3.1);
        $pdf->SetLineWidth(0.1);      
        $pdf->Line(1,3.2,28.5,3.2);   
        $pdf->SetLineWidth(0);
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(25.5,0.7,"Bukti Pemesanan Tiket",0,10,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(5,0.7,"Printed On : ".date("D-d/m/Y"),0,0,'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
        $pdf->Cell(5, 0.8, 'Code Tiket', 1, 0, 'C');
        $pdf->Cell(4, 0.8, 'ID KTP', 1, 0, 'C');
        $pdf->Cell(4, 0.8, 'Nama', 1, 0, 'C');
        $pdf->Cell(4, 0.8, 'Alamat', 1, 0, 'C');
        $pdf->Cell(4, 0.8, 'No Tlp', 1, 0, 'C');
        $pdf->Cell(4, 0.8, 'Tgl Pemesanan', 1, 1, 'C');
        $pdf->SetFont('Arial','',9);
        $no=1;

        $hasil = $this->M_transaksi->Tampiltiket("transaction_id='$id'");
        
        // $query= "select * from belitiket WHERE transaction_id='$id' ");
        foreach ($hasil as $row){
            $pdf->Cell(1, 0.8, $no, 1, 0, 'C');
            $pdf->Cell(5, 0.8,$row->id_tiket,1,0, 'C');
            $pdf->Cell(4, 0.8,$row->id_ktp,1,0, 'C');
            $pdf->Cell(4, 0.8,$row->nama,1,0, 'C');
            $pdf->Cell(4, 0.8,$row->alamat,1,0, 'C');
            $pdf->Cell(4, 0.8,$row->no_tlp,1,0, 'C');
            $pdf->Cell(4, 0.8,$row->created_at,1,1, 'C');

            $no++;
        }
        // while($lihat=mysqli_fetch_array($query)){

        //     $pdf->Cell(1, 0.8, $no, 1, 0, 'C');
        //     $pdf->Cell(7, 0.8, $lihat['facilityName'], 1, 0,'C');
        //     $pdf->Cell(9, 0.8, $lihat['buildingName'], 1, 0,'C');
        //     $pdf->Cell(4.5, 0.8, $lihat['regDate'],1, 0, 'C');
        //     $pdf->Cell(4.5, 0.8, $lihat['lastUpdationDate'],1, 0, 'C');
        //     $pdf->Cell(2, 0.8, $lihat['status'], 1, 1,'C');

        //     $no++;
        // }
        $pdf->ln(1);
        $pdf->SetFont('Arial','B',11);
        $pdf->Cell(40.5,0.7,"Approve",0,10,'C');

        $pdf->ln(1);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(40.5,0.7,"Imam Sutaryo",0,10,'C');

        $pdf->Output();

    }
}

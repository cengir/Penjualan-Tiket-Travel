<?php
Class M_transaksi extends CI_Model
{
    protected $table ='belitiket';
    function Tampiltiket() 
    {
        // if($id === false){
        //     return $this->table('belitiket')
        //     ->join('rute', 'rute.id_rute=belitiket.id_rute')
        //     ->get()
        //     ->getResultArray();

        // } else {
        //     return $this->table('belitiket')
        //     ->join('rute', 'rute.id_rute=belitiket.id_rute')
        //     ->where('belitiket.transaction_id', $id)
        //     ->get()
        //     ->getResultArray();
        // }
       
        $this->db->order_by('transaction_id');
        return $this->db->from('belitiket')
          ->join('rute', 'rute.id_rute=belitiket.id_rute')
          ->get()
          ->result();
    }
    
    public function Tampiltanggal()
    {
        $created_at = date("Y-m-d");
        $this->db->like('created_at', $created_at);
       
        return $this->db->get('belitiket')->result_array();
    }

    function CetakID($id)
    {
        $transaction_id = 'id';
        $this->db->like('transaction_id', $id);
        return $this->db->get('v_tiket')->result_array();
       
    }
}
?>
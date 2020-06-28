<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supir_model extends CI_Model
{
    private $_table = "supir";

    public $id_supir;
    public $nama_supir;
    public $mobil;
    public $image = "default.jpg";
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nama_supir',
            'label' => 'Nama Supir',
            'rules' => 'required'],

            ['field' => 'mobil',
            'label' => 'Mobil',
            'rules' => 'numeric'],
            
            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_supir" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_supir = uniqid();
        $this->nama_supir = $post["nama_supir"];
        $this->mobil = $post["mobil"];
        $this->status = $post["status"];
        return $this->db->insert($this->_table, $this);
    }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->id_supir = uniqid();
    //     $this->nama_supir = $post["nama_supir"];
    //     $this->mobil = $post["mobil"];
    //     $this->status = $post["status"];
    //     return $this->db->update($this->_table, $this, array('id_supir' => $post['id']));
    // }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_supir" => $id));
    }
}

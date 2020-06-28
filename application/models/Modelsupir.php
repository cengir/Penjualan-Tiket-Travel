<?php
class Modelsupir extends CI_Model
{
    public function get_by_id($kondisi)
    {
        $this->db->from('supir');
        $this->db->where($kondisi);
        $query=$this->db->get();
        return $query->row();
    }
    public function insert($data)
    {
        $this->db->insert('supir', $data);
        return $this->db->affected_rows();
    }
    public function delete($where)
    {
        $this->db->where($where);
        $this->db->delete('supir');

        return TRUE;
    }
    public function update($id, $kondisi)
    {
        $this->db->update('supir', $data);
        return TRUE;
    }

}
?>
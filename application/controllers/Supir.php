<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelsupir');
        $this->load->library('upload');

    }
	public function index()
	{

        $data['title'] = 'Supir';
        $data['subtitle'] = 'Supir';
        $data['page'] = 'Admin/supir/v_supir';
        $data['query'] = $this->db->get('supir');
        $this->load->view('Admin/v_index', $data);
    }
    
	public function add_supir()
	{

        $data['title'] = 'Add supir';
        $data['subtitle'] = 'Add supir';

        // $this->load->model('M_nomer');s
		// $autosupir = $this->M_nomer->autosupir('supir','id_supir','SPR');
        // $data['id_supir'] = $autosupir;
        
        $data['page'] = 'Admin/supir/v_supir_add';
        $this->load->view('Admin/v_index', $data);
    }
    
	public function save_supir()
	{
        // $post = $this->input->post();
        // $this->id_supir = uniqid();
        // $this->mobil = post('mobil');
        // $this->image = $this->_uploadImage();
        // $this->db->insert($this->_table, $this);
        
        $nama_supir = $this->input->post('nama_supir');
        $id_supir = $this->input->post('id_supir');
        $mobil = $this->input->post('mobil');
        $image = $_FILES['image'];
        $status = $this->input->post('status');

        $config['upload_path']          = './assets/upload/supir';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']        = true;
        $config['max_size']        = 2048;

        $this->upload->initialize($config);

        if (!empty($_FILES['image']['name'])){
            if ($this->upload->do_upload('image') ){
                $image =$this->upload->data();

                $data = array(
                    'nama_supir' => $nama_supir,
                    'id_supir' => $id_supir,
                    'mobil' => $mobil,
                    'image' => $image['file_name'],
                    'status' => $status,

                );
                $this->modelsupir->insert($data);
                redirect('supir');

            } else {
                die ("gagal upload");
            }

        } else{
            echo "tidak masuk";
        }
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/upload/supir/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_supir;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

	public function edit_supir($id)
	{
        $data['title'] = 'Edit Supir ';
        $data['subtitle'] = 'Edit Supir';
        $data['editdata'] = $this->db->get_where('supir',array('id_supir'=>$id))->row();
        // $this->modelsupir->update($data);
        $data['page'] = 'Admin/supir/v_supir_edit';
        $this->load->view('Admin/v_index', $data);


	}
	public function update_supir($id)
	{
        $data = $this->input->post();
        $this->modelsupir->update($data);
        $nama_supir = $this->input->post('nama_supir');
        $id_supir = $this->input->post('id_supir');
        $mobil = $this->input->post('mobil');
        $image = $_FILES['image'];
        $status = $this->input->post('status');

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["image"];
        }
        
        $this->db->where('id_supir', $id);
        $this->db->update('supir', $data);

        redirect('supir','refresh');


    }
    
	public function delete_supir($id, $image)
	{
       $path ='./assets/upload/supir/'; 
       @unlink($path.$image);

       $where = array('id_supir' => $id);
       $this->modelsupir->delete($where);
       return redirect('supir');
    }
    
}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rute extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

        $data['title'] = 'Rute';
        $data['subtitle'] = 'Rute';
        $data['page'] = 'Admin/Rute/v_rute';
        $data['query'] = $this->db->get('rute');
        $this->load->view('Admin/v_index', $data);
	}
	public function add_rute()
	{

        $data['title'] = 'add rute';
		$data['subtitle'] = 'add rute';
		
		$this->load->model('M_nomer');
		$autonumb = $this->M_nomer->autonumb('rute','id_rute','TRV');
		$data['id_rute'] = $autonumb;

        $data['page'] = 'Admin/Rute/v_rute_add';
		$this->load->view('Admin/v_index', $data);
		

	}
	public function save_rute()
	{

        
        $data = $this->input->post();
        $this->db->insert('rute', $data);
        redirect('rute');

	}
	public function edit_rute($id)
	{
        $data['title'] = 'edit ';
        $data['subtitle'] = 'edit';
        $data['editdata'] = $this->db->get_where('rute',array('id_rute'=>$id))->row();
        $data['page'] = 'Admin/Rute/v_rute_edit';
        $this->load->view('Admin/v_index', $data);


	}
	public function update_rute($id)
	{
        $data = $this->input->post();
        $this->db->where('id_rute', $id);
        $this->db->update('rute', $data);

        redirect('rute','refresh');


	}
	public function delete_rute($id)
	{
       
        $this->db->where('id_rute', $id);
        $this->db->delete('rute');

        redirect('rute');


	}
}

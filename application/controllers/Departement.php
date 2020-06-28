<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departement extends CI_Controller {

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
		$data['title'] = 'Departement';
        $data['subtitle'] = 'Departement';
        $data['page'] = 'Admin/departement/v_dept';
        $data['query'] = $this->db->get('departement');
        $this->load->view('Admin/v_index', $data);
        
    }
    public function add_departement()
	{

        $data['title'] = 'add departement';
		$data['subtitle'] = 'add departement';
		
		$this->load->model('M_nomer');
		$autodept = $this->M_nomer->autodept('departement','id_departement','DPR');
		$data['id_departement'] = $autodept;

        $data['page'] = 'Admin/departement/v_dept_add';
		$this->load->view('Admin/v_index', $data);
		

	}
	public function save_departement()
	{

        
        $data = $this->input->post();
        $this->db->insert('departement', $data);
        redirect('departement');

	}
	public function edit_departement($id)
	{
        $data['title'] = 'edit ';
        $data['subtitle'] = 'edit';
        $data['editdata'] = $this->db->get_where('departement',array('id_departement'=>$id))->row();
        $data['page'] = 'Admin/departement/v_dept_edit';
        $this->load->view('Admin/v_index', $data);


	}
	public function update_departement($id)
	{
        $data = $this->input->post();
        $this->db->where('id_departement', $id);
        $this->db->update('departement', $data);

        redirect('departement','refresh');


	}
	public function delete_departement($id)
	{
       
        $this->db->where('id_departement', $id);
        $this->db->delete('departement');

        redirect('departement');


	}
}

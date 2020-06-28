<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("supir_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Supir';
        $data['subtitle'] = 'Supir';
        $data["supir"] = $this->supir_model->getAll();

        $data['page'] = 'Admin/supir/v_supir';
        $this->load->view('Admin/v_index', $data);
    }

    public function add()
    {
        $data['title'] = ' Tambah Supir';
        $data['subtitle'] = 'Tambah Supir';
        $supir = $this->supir_model;
        $validation = $this->form_validation;
        $validation->set_rules($supir->rules());

        if ($validation->run()) {
            $supir->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data['page'] = 'Admin/supir/v_supir_add';
        $this->load->view("admin/v_index", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('supir');
       
        $supir = $this->supir_model;
        $validation = $this->form_validation;
        $validation->set_rules($supir->rules());

        if ($validation->run()) {
            $supir->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["supir"] = $supir->getById($id);
        if (!$data["supir"]) show_404();
        
        $data['page'] = 'Admin/supir/v_supir_edit';
        $this->load->view("admin/v_index");
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->supir_model->delete($id)) {
            redirect(site_url('supir'));
        }
    }
}
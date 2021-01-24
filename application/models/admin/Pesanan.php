<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Pesanan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["Pesanan"] = $this->Pesanan_model->getAll();
        $this->load->view("admin/Pesanan/list", $data);
    }

    public function add()
    {
        $Pesanan = $this->Pesanan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pesanan->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Pesanan berhasil disimpan');
        }

        $this->load->view("admin/pesanan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pesanan');
       
        $pesanan = $this->pesanan_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $pesanan->update();
            $this->session->set_flashdata('success', 'Pembaruan berhasil disimpan');
        }

        $data["pesanan"] = $pesanan->getById($id);
        if (!$data["pesanan"]) show_404();
        
        $this->load->view("admin/pesanan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pesanan_model->delete($id)) {
            redirect(site_url('admin/pesanan'));
        }
    }
}
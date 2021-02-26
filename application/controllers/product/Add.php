<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Product_model");
        $this->load->model("Category_model");

        if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
	}

	public function index(){

        
        $id=$this->Product_model->getId();
        $this->session->set_userdata('idProduct', $id);

        $this->load->view('layout/head');
        $this->load->view('layout/sidenav');
        $this->load->view('layout/topnav');
        $this->load->view('product/add');
        $this->load->view('layout/footer');
        $this->load->view('layout/js/product');
    }
    
    public function save(){

        $barcode	= $this->input->post("barcode");
        $name	= $this->input->post("name");
        $description = $this->input->post("description");
        $price = $this->input->post("price");
        $stock = $this->input->post("stock");
        $categoryId = $this->input->post("categoryId");
        $id    = $this->session->userdata("idProduct");
		

        $this->form_validation->set_rules("barcode","Codigó de barras","required|numeric|is_unique[product.barcode]");
        $this->form_validation->set_rules("name","Nombre","required");
        $this->form_validation->set_rules("description","Descripción","required");
        $this->form_validation->set_rules("price","Precio","required|decimal");
        $this->form_validation->set_rules("stock","Stock","required|numeric");
        $this->form_validation->set_rules("categoryId","Categoria","required");


		if ($this->form_validation->run()==TRUE) {
    
			$data  = array(
                'barcode' => $barcode,
				'name' => $name,
                'description' => $description,
                'price' => $price,
                'stock' => $stock,
                
                'category_id' => $categoryId
			);

            $this->Product_model->save($data);
            
			$this->session->set_flashdata("success","Se guardó correctamente!");
			redirect(base_url()."productos");
		}else{
            $this->load->view('layout/head');
            $this->load->view('layout/sidenav');
            $this->load->view('layout/topnav');
            $this->load->view('product/add');
            $this->load->view('layout/footer');
            $this->load->view('layout/js/product');
		}
    }
    

  

	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->database();
        //load model admin
        $this->load->model('items_model');
        $this->load->library('upload');
    }

    public function index() {
	    if($this->items_model->logged_id())
		{

		$data['title'] = "Items";
		// $data['create'] = base_url()."article/create";
		// $data['edit'] = base_url()."article/edit/";
		// $data['delete'] = base_url()."article/delete/";
		// $data['view'] = base_url()."article/view/";
		
		$data['data'] = $this->items_model->getAll();

		$this->load->view('template/header',$data);
        $this->load->view('library/items',$data);
        $this->load->view('template/footer');
		
		}else{
            //jika session belum terdaftar, maka redirect ke halaman login
			redirect(base_url("login"));

		}
	}

}
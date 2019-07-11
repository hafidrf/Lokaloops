<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->database();
        //load model admin
        $this->load->model('admin_model');
    }


    public function index()
    {
        if($this->admin_model->logged_id())
        {  
            $data['title'] = "DASHBOARD";
            
        //     $data['ambulance'] = $this->Admin->ambulance();
        //     $data['bidan'] = $this->Admin->bidan();
        //     $data['dokter'] = $this->Admin->dokter();
        //     $data['klinik'] = $this->Admin->klinik();
        //     $data['perawat'] = $this->Admin->perawat();
            
            // $this->load->view('template/header', $data);
            $this->load->view('template/header',$data);
            $this->load->view('home_view');
            $this->load->view('template/footer');
            

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect(base_url('login'));

        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
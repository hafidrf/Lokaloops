<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("admin_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        //validate  the data taken through the register form
        $this->form_validation->set_rules('username','Username','required|is_unique[login.username]');
        // $this->form_validation->set_rules('fname','Full Name','required');
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]');
        $this->form_validation->set_rules('id_role','Role');
        $this->form_validation->set_rules('id_owner','Owner');

        if ($this->form_validation->run() == TRUE) {

            //get user inputs
            $username = $this->input->post('username');
            $contact = $this->input->post('contact');
            $email = $this->input->post('email');
            $passwordAwal = $this->input->post('password');
            $password = sha1($passwordAwal);
            $id_role = $this->input->post('id_role');
            $owner['nama'] = $this->input->post('owner');
            $id_Owner;

            //generate simple random code
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);

            //load the model to connect to the db
            $this->load->model('Admin_model');
            $nm = $owner['nama'];
            $this->Admin_model->insertOwner($owner);
            $idOw = $this->Admin_model->getIdOwner($nm);
            foreach($idOw as $r){
                $id_Owner = $r->id;
            }
            $data['username'] = $username;
            $data['contact'] = $contact;
            $data['email'] = $email;
            $data['password'] = $password;
            $data['code'] = $code;
            $data['active'] = false;
            $data['id_role'] = "1";
            $data['id_owner'] = $id_Owner;
            $id = $this->Admin_model->insertUser($data);
            
            

            //set up email
			$config = array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'tegara946@gmail.com',
				'smtp_pass' => '20051998',
				'mailtype' => 'html',
				'starttls'  => true,
				'newline'   => "\r\n",
			);

			$message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Email: ".$email."</p>
							<p>Password: ".$passwordAwal."</p>
							<p>Please click the link below to activate your account.</p>
							<h4><a href='".base_url()."register/activate/".$id."/".$code."'>Activate My Account</a></h4>
							<h4><a href='mailto:tegara946@gmail.com?subject=subject&message=message'>Activate My Account</a></h4>
						</body>
						</html>
						";
	 		
			$this->load->library('email', $config);
			$this->email->initialize($config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($config['smtp_user']);
		    $this->email->to($email);
		    $this->email->subject('Signup Verification Email');
		    $this->email->message($message);

            // if(button dipencet){
                //sending email
		        if($this->email->send()){
		    	$this->session->set_flashdata('message','Activation code sent to email');
		        } else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
		        }
            // }

            

            //set message to be shown when registration is completed
            $this->session->set_flashdata('success','Silakan aktivasi lewat email!');
            redirect('register');

        } else {

            $this->load->view('register_view');

        }
    }

    
}
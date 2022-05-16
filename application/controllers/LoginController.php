<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

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

	public function decoSuper()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	public function loginSimple()
	{
		$email=$this->input->post('email');
		$mdp=$this->input->post('mdp');
		$this->load->model('LoginModel');
		$profil=$this->LoginModel->login($email);
        //echo count($profil);
		$this->load->helper('assets_helper');
		if(count($profil) == 0)
		{
			$data['error'] = "Utilisateur non valide";
			$this->load->view('login',$data);
		}if(count($profil) != 0){
			$user = $profil[0];
			if($user['mdp'] != sha1($mdp)){
				$data['error'] = "Mot de passe incorrect";
				$this->load->view('login',$data);
			}else{
				$this->load->library('session');
				$this->session->set_userdata("user",$user);
				$data['user']=$this->session->userdata("user");
				$crud = new grocery_CRUD();
				$data['js_files'] = $crud->get_js_files();
				$data['css_files'] = $crud->get_css_files();
				$this->load->view('templateBack',$data);
			}
		}
	}		
}

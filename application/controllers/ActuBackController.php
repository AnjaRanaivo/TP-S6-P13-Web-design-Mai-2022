<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActuBackController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->helper(array('form'));
        $this->load->library('session');
        if(!$this->session->has_userdata('user')){
            redirect("Welcome");
        }
		$this->load->library('grocery_CRUD');
        $this->load->model("ActuModel");
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

	public function ajout(){
        $this->load->model("ContinentModel");
        $data['vue'] = "ajoutActu";
        $data['listContinent'] = $this->ContinentModel->getListe();
        $crud = new grocery_CRUD();
        $data['user']=$this->session->userdata("user");
        $data['js_files'] = $crud->get_js_files();
        $data['css_files'] = $crud->get_css_files();
        $this->load->view('templateBack',$data);
    }

	public function modification(){
		$id=$this->input->post('id');
		$data['actualite']=$this->ActuModel->getActu($id);
        $this->load->model("ContinentModel");
        $data['vue'] = "modifActu";
        $data['listContinent'] = $this->ContinentModel->getListe();
        $crud = new grocery_CRUD();
        $data['user']=$this->session->userdata("user");
        $data['js_files'] = $crud->get_js_files();
        $data['css_files'] = $crud->get_css_files();
        $this->load->view('templateBack',$data);
    }
	
	public function supprimer()
	{
		$id=$this->input->post('id');
		$this->ActuModel->supprimer($id);
		$this->liste();
	}

	public function modifierActu()
	{
		$id=$this->input->post('id');
		$date=$this->input->post('date');
		$titre=$this->input->post('titre');
		$description=$this->input->post('description');
		$delimiter="-";
        $url = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', $delimiter, iconv('UTF-8', 'ASCII//TRANSLIT', $titre))))), $delimiter));
        $this->ActuModel->modifier($id,$date,$titre,$description,$url);
		$this->liste();
	}

	public function liste()
	{
		$this->load->model("ActuModel");
		$data['listeActu'] = $this->ActuModel->getListeActus();
		$data['vue'] = 'listeActuBack';
		$crud = new grocery_CRUD();
        $data['user']=$this->session->userdata("user");
        $data['js_files'] = $crud->get_js_files();
        $data['css_files'] = $crud->get_css_files();
		$this->load->view('templateBack',$data);
	}

    public function ajouterActu(){
        $idContinent = $this->input->post('idContinent');
        $date=$this->input->post('date');
        $titre=$this->input->post('titre');
        $description=$this->input->post('description');
        $delimiter="-";
		$path=null;
        $url = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', $delimiter, iconv('UTF-8', 'ASCII//TRANSLIT', $titre))))), $delimiter));
        
		
		$config['upload_path']          = './assets/img/actualites';
		$config['allowed_types']        = '*';
		 $config['max_size']             = 5000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
				$error = array('error' => $this->upload->display_errors());

				//$this->load->view('upload_form', $error);
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());
				$path=$data['upload_data']['file_name'];
		}
		$this->ActuModel->ajout($idContinent,$date,$titre,$description,$url,$path);
        $data['user']=$this->session->userdata("user");
		$crud = new grocery_CRUD();
		$data['js_files'] = $crud->get_js_files();
		$data['css_files'] = $crud->get_css_files();
		$this->load->view('templateBack',$data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SensController extends CI_Controller {

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
		$this->load->model("SensModel");
		$data['listeSens'] = $this->SensModel->getListeSens();
		$data['vue'] = 'listeSens';
		$data['title'] = 'Sensibilisations';
		$this->load->view('template',$data);
	}		
    public function ficheSens($url,$id){
        //$id = $this->input->get('id');
        $this->load->model("SensModel");
		$data['sensibilisation'] = $this->SensModel->getSens($id);
        if($url != $data['sensibilisation']['url']) $this->load->view('error');
        else{
		$data['vue'] = 'ficheSens';
		$data['title'] = $data['sensibilisation']['titre'];
		if(!(file_exists("./application/views/".$data['sensibilisation']['url'].".html"))){
			$this->SensModel->genererHtml($data['sensibilisation']);
		}
		$this->output->cache(10);
		$this->load->view('template',$data);
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActuController extends CI_Controller {

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
		$this->load->model("ActuModel");
		$data['listeActu'] = $this->ActuModel->getListeActus();
		$data['vue'] = 'listeActu';
		$data['title'] = 'Liste Actualités';
		$this->load->view('template',$data);
	}		
    public function ficheActu($url,$id){
        // $id = $this->input->get('id');
        $this->load->model("ActuModel");
		$data['actualite'] = $this->ActuModel->getActu($id);
        if($url != $data['actualite']['url']) $this->load->view('error');
        else{
            $data['vue'] = 'ficheActu';
            $data['title'] = $data['actualite']['titre'];
			if(!(file_exists("./application/views/".$data['actualite']['url'].".html"))){
				$this->ActuModel->genererHtml($data['actualite']);
			}
			$this->output->cache(10);
            $this->load->view('template',$data);
        }
    }
}

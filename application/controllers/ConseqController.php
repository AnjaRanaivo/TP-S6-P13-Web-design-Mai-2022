<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConseqController extends CI_Controller {

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
		$this->load->model("ConseqModel");
		$data['listeConseq'] = $this->ConseqModel->getListeConseq();
		$data['vue'] = 'listeConseq';
		$data['title'] = 'Liste Conséquences';
		$this->load->view('template',$data);
	}		
    public function ficheConseq($url,$id){
        //$id = $this->input->get('id');
        $this->load->model("ConseqModel");
		$data['consequence'] = $this->ConseqModel->getConseq($id);
        if($url != $data['consequence']['url']) $this->load->view('error');
        else{
		$data['vue'] = 'ficheConseq';
		$data['title'] = $data['consequence']['titre'];
		if(!(file_exists("./application/views/".$data['consequence']['url'].".html"))){
			$this->ConseqModel->genererHtml($data['consequence']);
		}
		$this->output->cache(10);
		$this->load->view('template',$data);
        }
    }
}

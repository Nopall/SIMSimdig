<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$data['query'] = $this->Sitemodel->read_item("pelatihan","id","ASC",$config['per_page'], $id);
		$data['content'] = $this->load->view('main/main_content',$data,true);
		$data['navbar'] = true;
		$data['sidebar'] = false;
		$this->load->view('main/main_temp',$data);
	}

	public function detail($modul = "",$ids = ""){

		if($modul == "pelatihan"){
			$data['query'] = $this->Sitemodel->read_item("pelatihan","id","ASC",$config['per_page'], $id);
			$data['content'] = $this->load->view('main/detail_pelatihan',$data,true);
			$data['navbar'] = true;
			$data['sidebar'] = false;
			$this->load->view('main/main_temp',$data);
		}
	}
}
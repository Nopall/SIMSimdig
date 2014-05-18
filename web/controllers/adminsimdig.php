<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminsimdig extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{

		$data['content'] = $this->load->view('adm/login_temp','',true);
		$data['navbar'] = false;
		$data['sidebar'] = false;
		$this->load->view('main/main_temp',$data);
	}

	public function home()
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}


		$data['user'] = $user;
		$data['query'] = $this->Sitemodel->read_item("peserta","id","ASC",10, '');
		$data['content'] = $this->load->view('adm/home_temp',$data,true);
		$data['navbar'] = true;
		$data['sidebar'] = true;
		$data['menu'] = "home";
		$this->load->view('main/main_temp',$data);
	}

	public function tambah_peserta($id = '')
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}

		if ($id != '') {
            $id = $this->security->xss_clean($this->uri->segment(3));
            $result = $this->Sitemodel->get_item("peserta","id",$id);
            $data['peserta'] = $result;
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_peserta_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        } else {
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_peserta_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        }
	}

	public function peserta($id = NULL)
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}

		$jml = $this->db->get('peserta');

		//pengaturan pagination
        $config['base_url'] = base_url() . 'cpanel/peserta';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = '10';
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';

        //inisialisasi config
        $this->pagination->initialize($config);

        //buat pagination
        $data['halaman'] = $this->pagination->create_links();

        //tampilkan data
        $data['navbar'] = true;
		$data['sidebar'] = true;
		$data['user'] = $user;
        $data['query'] = $this->Sitemodel->read_item("peserta","id","ASC",$config['per_page'], $id);
        $data['content'] = $this->load->view('adm/list_peserta_temp', $data, true);
        $this->load->view('main/main_temp', $data);
	}

	public function tambah_karya($id = '')
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}
		if ($id != '') {
            $id = $this->security->xss_clean($this->uri->segment(3));
            $result = $this->Sitemodel->get_item("karya","id",$id);
            $data['karya'] = $result;
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_karya_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        } else {
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_karya_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        }
	}

	public function karya($id = NULL)
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}

		$jml = $this->db->get('karya');

		//pengaturan pagination
        $config['base_url'] = base_url() . 'cpanel/karya';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = '10';
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';

        //inisialisasi config
        $this->pagination->initialize($config);

        //buat pagination
        $data['halaman'] = $this->pagination->create_links();

        //tampilkan data
        $data['navbar'] = true;
		$data['sidebar'] = true;
		$data['user'] = $user;
        $data['query'] = $this->Sitemodel->read_item("karya","id","ASC",$config['per_page'], $id);
        $data['content'] = $this->load->view('adm/list_karya_temp', $data, true);
        $this->load->view('main/main_temp', $data);
	}

	public function tambah_sertifikasi($id = '')
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}
		if ($id != '') {
            $id = $this->security->xss_clean($this->uri->segment(3));
            $result = $this->Sitemodel->get_item("sertifikasi","id",$id);
            $data['sertifikasi'] = $result;
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_sertifikasi_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        } else {
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_sertifikasi_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        }
	}

	public function sertifikasi($id = NULL)
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}

		$jml = $this->db->get('sertifikasi');

		//pengaturan pagination
        $config['base_url'] = base_url() . 'cpanel/sertifikasi';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = '10';
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';

        //inisialisasi config
        $this->pagination->initialize($config);

        //buat pagination
        $data['halaman'] = $this->pagination->create_links();

        //tampilkan data
        $data['navbar'] = true;
		$data['sidebar'] = true;
		$data['user'] = $user;
        $data['query'] = $this->Sitemodel->read_item("sertifikasi","id","ASC",$config['per_page'], $id);
        $data['content'] = $this->load->view('adm/list_sertifikasi_temp', $data, true);
        $this->load->view('main/main_temp', $data);
	}

	public function tambah_pelatihan($id = '')
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}

		if ($id != '') {
            $id = $this->security->xss_clean($this->uri->segment(3));
            $result = $this->Sitemodel->get_item("pelatihan","id",$id);
            $data['pelatihan'] = $result;
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_pelatihan_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        } else {
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_pelatihan_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        }
	}

	public function pelatihan($id = NULL)
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}

		$jml = $this->db->get('pelatihan');

		//pengaturan pagination
        $config['base_url'] = base_url() . 'cpanel/pelatihan';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = '10';
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';

        //inisialisasi config
        $this->pagination->initialize($config);

        //buat pagination
        $data['halaman'] = $this->pagination->create_links();

        //tampilkan data
        $data['navbar'] = true;
		$data['sidebar'] = true;
		$data['user'] = $user;
        $data['query'] = $this->Sitemodel->read_item("pelatihan","id","ASC",$config['per_page'], $id);
        $data['content'] = $this->load->view('adm/list_pelatihan_temp', $data, true);
        $this->load->view('main/main_temp', $data);
	}

	public function tambah_bagitugas($id = '')
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}
		if ($id != '') {
            $id = $this->security->xss_clean($this->uri->segment(3));
            $result = $this->Sitemodel->get_item("bagitugas","id",$id);
            $data['bagitugas'] = $result;
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_bagitugas_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        } else {
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_bagitugas_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        }
	}

	public function bagitugas($id = NULL)
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}

		$jml = $this->db->get('bagitugas');

		//pengaturan pagination
        $config['base_url'] = base_url() . 'cpanel/bagitugas';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = '10';
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';

        //inisialisasi config
        $this->pagination->initialize($config);

        //buat pagination
        $data['halaman'] = $this->pagination->create_links();

        //tampilkan data
        $data['navbar'] = true;
		$data['sidebar'] = true;
		$data['user'] = $user;
        $data['query'] = $this->Sitemodel->read_item("bagitugas","id","ASC",$config['per_page'], $id);
        $data['content'] = $this->load->view('adm/list_bagitugas_temp', $data, true);
        $this->load->view('main/main_temp', $data);
	}

	public function tambah_laporan($id = '')
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}
		if ($id != '') {
            $id = $this->security->xss_clean($this->uri->segment(3));
            $result = $this->Sitemodel->get_item("bagitugas","id",$id);
            $data['laporan'] = $result;
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_laporan_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        } else {
            $data['user'] = $user;
			$data['content'] = $this->load->view('adm/tambah_laporan_temp','',true);
			$data['navbar'] = true;
			$data['sidebar'] = true;
			$this->load->view('main/main_temp',$data);
        }
	}

	public function laporan($id = NULL)
	{
		$user = $this->session->userdata('logged_in');
		if($user['logged_in_status'] == false){
			redirect('adminsimdig');
		}
		
		$jml = $this->db->get('laporan');

		//pengaturan pagination
        $config['base_url'] = base_url() . 'cpanel/laporan';
        $config['total_rows'] = $jml->num_rows();
        $config['per_page'] = '10';
        $config['first_page'] = 'Awal';
        $config['last_page'] = 'Akhir';
        $config['next_page'] = '&laquo;';
        $config['prev_page'] = '&raquo;';

        //inisialisasi config
        $this->pagination->initialize($config);

        //buat pagination
        $data['halaman'] = $this->pagination->create_links();

        //tampilkan data
        $data['navbar'] = true;
		$data['sidebar'] = true;
		$data['user'] = $user;
        $data['query'] = $this->Sitemodel->read_item("laporan","id","ASC",$config['per_page'], $id);
        $data['content'] = $this->load->view('adm/list_laporan_temp', $data, true);
        $this->load->view('main/main_temp', $data);
	}

	public function logout()
	{
	    //$this->session->sess_destroy();
		$this->session->unset_userdata('logged_in_status');
		$this->session->sess_destroy();
	    redirect('/adminsimdi/');
	}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
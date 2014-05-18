<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proses extends CI_Controller {

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
		redirect('/');
	}

	public function check_login()
	{
		session_start();
		$user = $this->security->xss_clean($this->input->post('email'));
		$pass = md5($this->input->post('password'));
		$result = $this->Sitemodel->login($user,$pass);

		if($result->num_rows()>0)
		{
			foreach ($result->result_array() as $row)
			{
				$data = array(
					   'username'  => $row['username'],
					   'email'     => $row['email'],
					   'fullname'  => $row['fullname'],
					   'logged_in_status'   => true,
					  
					);
			}
            $this->session->set_userdata('logged_in',$data);
            redirect('/adminsimdig/home');
          
		}
		else
		{
	        $this->session->set_flashdata('message', 'Oopsie, Username or password is incorrect');
	        redirect('/adminsimdig/');
		}
	}

	public function inputpeserta()
	{
		if ($this->input->post('id') != 0) {
            $id = $this->security->xss_clean($this->input->post('id'));
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required|xss_clean');
            $this->form_validation->set_rules('warganegara', 'Kewarganegaraan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('templahir', 'Tempat Lahir', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'trim|required|xss_clean');
            $this->form_validation->set_rules('asliinstitut', 'Asal Institusi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jbtninstitut', 'Jabatan Dalam Institusi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nohp', 'Nomor Handphone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_peserta');
            } else {
                $data = array(
                    'fullname' => $this->input->post('namalengkap'),
                    'jenis_kelamin' => $this->input->post('jk'),
                    'warganegara' => $this->input->post('warganegara'),
                    'templahir' => $this->input->post('templahir'),
                    'tglahir' => $this->input->post('tgllahir'),
                    'asal' => $this->input->post('asaliinstitut'),
                    'jabatan' => $this->input->post('jbtninstitut'),
                    'no_hp' => $this->input->post('nohp'),
                    'email' => $this->input->post('email')

                );

                $create = $this->Sitemodel->update_item("peserta","id",$id, $data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/peserta');
            }
        } else {
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim|required|xss_clean');
            $this->form_validation->set_rules('templahir', 'Tempat Lahir', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|email|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_peserta');
            } else {
                $data = array(
                    'fullname' => $this->input->post('namalengkap'),
                    'jenis_kelamin' => $this->input->post('jk'),
                    'warganegara' => $this->input->post('warganegara'),
                    'templahir' => $this->input->post('templahir'),
                    'tglahir' => $this->input->post('tgllahir'),
                    'asal' => $this->input->post('asliinstitut'),
                    'jabatan' => $this->input->post('jbtninstitut'),
                    'no_hp' => $this->input->post('nohp'),
                    'email' => $this->input->post('email')

                );

                $create = $this->Sitemodel->create_item("peserta",$data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/peserta');
            }
        }
	}

	public function inputkarya()
	{
		if ($this->input->post('id') != 0) {
            $id = $this->security->xss_clean($this->input->post('id'));
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
            $this->form_validation->set_rules('instansi', 'Instansi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('videokomdar', 'Video Komdar', 'trim|required|xss_clean');
            $this->form_validation->set_rules('kks', 'Kode Kelas', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jdlvideopresentasi', 'Judul Video Lahir', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jdlsimulasivisual', 'Asal Institusi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jdlbukudigital', 'Jabatan Dalam Institusi', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_karya');
            } else {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'instansi' => $this->input->post('instansi'),
                    'video' => $this->input->post('videokomdar'),
                    'jdl_vp' => $this->input->post('jdlvideopresentasi'),
                    'jdl_sv' => $this->input->post('jdlsimulasivisual'),
                    'jdl_bd' => $this->input->post('jdlbukudigital'),
                    'kodekelas' => $this->input->post('kks')

                );

                $create = $this->Sitemodel->update_item("karya","id",$id, $data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/karya');
            }
        } else {
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
            $this->form_validation->set_rules('instansi', 'Instansi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('videokomdar', 'Video Komdar', 'trim|required|xss_clean');
            $this->form_validation->set_rules('kks', 'Kode Kelas', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jdlvideopresentasi', 'Judul Video Lahir', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jdlsimulasivisual', 'Asal Institusi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jdlbukudigital', 'Jabatan Dalam Institusi', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_karya');
            } else {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'instansi' => $this->input->post('instansi'),
                    'video' => $this->input->post('videokomdar'),
                    'jdl_vp' => $this->input->post('jdlvideopresentasi'),
                    'jdl_sv' => $this->input->post('jdlsimulasivisual'),
                    'jdl_bd' => $this->input->post('jdlbukudigital'),
                    'kodekelas' => $this->input->post('kks')

                );

                $create = $this->Sitemodel->create_item("karya",$data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/karya');
            }
        }
	}

	public function inputsertifikasi()
	{
		if ($this->input->post('id') != 0) {
            $id = $this->security->xss_clean($this->input->post('id'));
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('tmplatihan', 'Tempat Pelatihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cpd', 'CPD', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nohp', 'NO Handphone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglpelatihan', 'Tanggal Pelatihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('krpelatihan', 'Koordinator Pelatihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglud', 'Tanggal Ujian Daring', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglremidi', 'Tanggal Remidi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglphk', 'Tanggal Handphone', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_sertifikasi');
            } else {
                $data = array(
                    'cpd' => $this->input->post('cpd'),
                    'no_hp' => $this->input->post('nohp'),
                    'tgl_latihan' => $this->input->post('tglpelatihan'),
                    'koor_latihan' => $this->input->post('krpelatihan'),
                    'tgl_ujian' => $this->input->post('tglud'),
                    'tgl_remidi' => $this->input->post('tglremidi'),
                    'tgl_phk' => $this->input->post('tglphk'),
                    'tempat' => $this->input->post('tmplatihan')

                );

                $create = $this->Sitemodel->update_item("sertifikasi","id",$id, $data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/sertifikasi');
            }
        } else {
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('tmplatihan', 'Tempat Pelatihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cpd', 'CPD', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nohp', 'NO Handphone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglpelatihan', 'Tanggal Pelatihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('krpelatihan', 'Koordinator Pelatihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglud', 'Tanggal Ujian Daring', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglremidi', 'Tanggal Remidi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tglphk', 'Tanggal Handphone', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_sertifikasi');
            } else {
                $data = array(
                    'cpd' => $this->input->post('cpd'),
                    'no_hp' => $this->input->post('nohp'),
                    'tgl_latihan' => $this->input->post('tglpelatihan'),
                    'koor_latihan' => $this->input->post('krpelatihan'),
                    'tgl_ujian' => $this->input->post('tglud'),
                    'tgl_remidi' => $this->input->post('tglremidi'),
                    'tgl_phk' => $this->input->post('tglphk'),
                    'tempat' => $this->input->post('tmplatihan')

                );

                $create = $this->Sitemodel->create_item("sertifikasi",$data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/sertifikasi');
            }
        }
	}

	public function inputpelatihan()
	{
		if ($this->input->post('id') != 0) {
            $id = $this->security->xss_clean($this->input->post('id'));
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('tempat', 'Tempat', 'trim|required|xss_clean');
            $this->form_validation->set_rules('daerah', 'Daerah', 'trim|required|xss_clean');
            $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required|xss_clean');
            $this->form_validation->set_rules('namacpd', 'Nama CPD', 'trim|required|xss_clean');
            $this->form_validation->set_rules('hppic', 'Asal Institusi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jml_peserta', 'Jumlah Peserta', 'trim|required|xss_clean');
            $this->form_validation->set_rules('koorpelatihan', 'Nomor Handphone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('staff1', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('staff2', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('mahasiswa', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('keterangan', 'Email', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_pelatihan');
            } else {
                $data = array(
                    'tempat' => $this->input->post('tempat'),
                    'daerah' => $this->input->post('daerah'),
                    'provinsi' => $this->input->post('provinsi'),
                    'tanggal' => $this->input->post('tanggal'),
                    'cpd' => $this->input->post('namacpd'),
                    'hp' => $this->input->post('hppic'),
                    'jml_peserta' => $this->input->post('jml_peserta'),
                    'koor_pelatihan' => $this->input->post('koorpelatihan'),
                    'staff1' => $this->input->post('staff1'),
                    'staff2' => $this->input->post('staff2'),
                    'mahasiswa' => $this->input->post('mahasiswa'),
                    'keterangan' => $this->input->post('keterangan')

                );

                $create = $this->Sitemodel->update_item("pelatihan","id",$id, $data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/pelatihan');
            }
        } else {
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('tempat', 'Tempat', 'trim|required|xss_clean');
            $this->form_validation->set_rules('daerah', 'Daerah', 'trim|required|xss_clean');
            $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required|xss_clean');
            $this->form_validation->set_rules('namacpd', 'Nama CPD', 'trim|required|xss_clean');
            $this->form_validation->set_rules('hppic', 'Asal Institusi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('jml_peserta', 'Jumlah Peserta', 'trim|required|xss_clean');
            $this->form_validation->set_rules('koorpelatihan', 'Nomor Handphone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('staff1', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('staff2', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('mahasiswa', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('keterangan', 'Email', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_pelatihan');
            } else {
                $data = array(
                    'tempat' => $this->input->post('tempat'),
                    'daerah' => $this->input->post('daerah'),
                    'provinsi' => $this->input->post('provinsi'),
                    'tanggal' => $this->input->post('tanggal'),
                    'cpd' => $this->input->post('namacpd'),
                    'hp' => $this->input->post('hppic'),
                    'jml_peserta' => $this->input->post('jml_peserta'),
                    'koor_pelatihan' => $this->input->post('koorpelatihan'),
                    'staff1' => $this->input->post('staff1'),
                    'staff2' => $this->input->post('staff2'),
                    'mahasiswa' => $this->input->post('mahasiswa'),
                    'keterangan' => $this->input->post('keterangan')

                );

                $create = $this->Sitemodel->create_item("pelatihan",$data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/pelatihan');
            }
        }
	}

	public function inputlaporan()
	{
		if ($this->input->post('id') != 0) {
            $id = $this->security->xss_clean($this->input->post('id'));
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('tempatlatihan', 'Tempat Latihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cpd', 'Nama CPD', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nohp', 'No Handphone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgllatihan', 'Tanggal Latihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('koorlatihan', 'Koordinator Latihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('laporantraining', 'Laporan Training', 'trim|required|xss_clean');
            $this->form_validation->set_rules('linkweb', 'Link Web', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_laporan');
            } else {
                $data = array(
                    'tempat' => $this->input->post('tempatlatihan'),
                    'cpd' => $this->input->post('cpd'),
                    'no_hp' => $this->input->post('no_hp'),
                    'tgl_pelatihan' => $this->input->post('tgllatihan'),
                    'koor_pelatihan' => $this->input->post('koorlatihan'),
                    'laporan_training' => $this->input->post('laporantraining'),
                    'link_web' => $this->input->post('linkweb')

                );

                $create = $this->Sitemodel->update_item("laporan","id",$id, $data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/laporan');
            }
        } else {
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('tempatlatihan', 'Tempat Latihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('cpd', 'Nama CPD', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nohp', 'No Handphone', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgllatihan', 'Tanggal Latihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('koorlatihan', 'Koordinator Latihan', 'trim|required|xss_clean');
            $this->form_validation->set_rules('laporantraining', 'Laporan Training', 'trim|required|xss_clean');
            $this->form_validation->set_rules('linkweb', 'Link Web', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_laporan');
            } else {
                $data = array(
                    'tempat' => $this->input->post('tempatlatihan'),
                    'cpd' => $this->input->post('cpd'),
                    'no_hp' => $this->input->post('no_hp'),
                    'tgl_pelatihan' => $this->input->post('tgllatihan'),
                    'koor_pelatihan' => $this->input->post('koorlatihan'),
                    'laporan_training' => $this->input->post('laporantraining'),
                    'link_web' => $this->input->post('linkweb')

                );

                $create = $this->Sitemodel->create_item("laporan",$data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/laporan');
            }
        }
	}

	public function inputbagitugas()
	{
		if ($this->input->post('id') != 0) {
            $id = $this->security->xss_clean($this->input->post('id'));
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
            $this->form_validation->set_rules('fungsi', 'Fungsi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgsadmin', 'Tugas Admin', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgsmateri', 'Tugas Materi', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_bagitugas');
            } else {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'fungsi' => $this->input->post('fungsi'),
                    'tgs_admin' => $this->input->post('tgsadmin'),
                    'tgs_materi' => $this->input->post('tgsmateri')

                );

                $create = $this->Sitemodel->update_item("bagitugas","id",$id, $data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/bagitugas');
            }
        } else {
            //$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
            $this->form_validation->set_rules('fungsi', 'Fungsi', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgsadmin', 'Tugas Admin', 'trim|required|xss_clean');
            $this->form_validation->set_rules('tgsmateri', 'Tugas Materi', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                redirect('adminsimdig/tambah_bagitugas');
            } else {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'fungsi' => $this->input->post('fungsi'),
                    'tgs_admin' => $this->input->post('tgsadmin'),
                    'tgs_materi' => $this->input->post('tgsmateri')

                );


                $create = $this->Sitemodel->create_item("bagitugas",$data);
                //if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
                //else $this->session->set_flashdata('message', 'Data gagal disimpan!');
                redirect('adminsimdig/bagitugas');
            }
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
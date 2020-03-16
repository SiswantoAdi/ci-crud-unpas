 <?php

	class Mahasiswa extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Mahasiswa_model');
			$this->load->library('form_validation');
		}


		public function index()
		{

			$data['judul'] = 'Data Mahasiswa';
			$data['mahasiswa'] =  $this->Mahasiswa_model->getAllMahasiswa();


			if ($this->input->post('keyword')) {
				$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
			}

			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/index', $data);
			$this->load->view('templates/footer');
		}

		public function tambah()
		{
			$data['judul'] = 'Form Tambah Data Mahasiswa';

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('mahasiswa/tambah');
				$this->load->view('templates/footer');
			} else {
				$this->Mahasiswa_model->tambahDataMahasiswa();
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('mahasiswa');
			}
		}

		public function hapus($id)
		{
			$this->Mahasiswa_model->hapusDataMahasiswa($id);
			$this->session->set_flashdata('flash', 'Dihapuskan');
			redirect('mahasiswa');
		}

		public function detail($id)
		{
			$data['judul'] = "Detail Data Mahasiswa";
			$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/detail', $data);
			$this->load->view('templates/footer');
		}

		public function ubah($id)
		{
			$data['judul'] = 'Form Ubah Data Mahasiswa';
			$data['mahasiswa'] = $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
			$data['jurusan'] = [
				'Tekhnik Informatika', 'Tekhnik Industri',
				'Tekhnik Planologi', 'Tekhnik Mesin', 'Tekhnik Lingkungan'
			];
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('mahasiswa/ubah', $data);
				$this->load->view('templates/footer');
			} else {
				$data = [
		            "nama_event" => $this->input->post('nama_event', true),
		            "keterangan" => $this->input->post('keterangan', true),
		            "lokasi" => $this->input->post('lokasi', true),
		            "event_address" => $this->input->post('event_address', true),
		            "event_date" => $this->input->post('event_date', true)
		        ];

		        $$this->db->where('id', $this->input->post('id'));
		        $this->db->update('mahasiswa', $data);
		        $this->session->set_flashdata('message', '<div class="
		            alert alert-success
		        ">Edit data sukses</div>');
				$this->session->set_flashdata('flash', 'Diubah');
				redirect('mahasiswa');
			}
		}
	}

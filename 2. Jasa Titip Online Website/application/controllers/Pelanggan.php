<?php 
class Pelanggan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pelanggan');
		$this->load->model('m_admin');
		
		$this->load->library('form_validation');
	}
	public function index(){
		
		$this->load->view('header');
		$this->load->view('Utama');

	}

	public function index_register(){
		$this->load->view('View_regis');
	}


	/*public function aksi_login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tipe = $this->input->post('account_type');
		$result = false;
		if($tipe == "member"){
			$result = $this->M_pelanggan->getByUsernameAndPassword($username, $password);
		} else if($tipe == "admin"){
			$result = $this->m_admin->getByUsernameAndPassword($username, $password);
		}
		if($result){
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('tipe', $tipe);
			redirect('pelanggan/index_home');
		} else {
			$this->session->set_flashdata('login', 'Username atau password salah');
			redirect('pelanggan/index_login');
		} 
	}*/

	public function lihatA(){
		$this->load->view('V_lihatA');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$tipe = $this->input->post('account_type');
		$result = false;
		if($tipe == "member"){
			$result = $this->M_pelanggan->getByUsernameAndPassword($username, $pass);
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('tipe', $tipe);
			redirect('pelanggan/index_home');
		} else if($tipe == "admin"){
			$result = $this->m_admin->getByUsernameAndPassword($username, $pass);
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('tipe', $tipe);
			redirect('admin/lihat');
		}
		if($result){
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('tipe', $tipe);
			redirect('pelanggan/index');
		} else {
			$this->session->set_flashdata('login', 'Username atau password salah');
			redirect('login');
		}
	}

	public function index_login(){
		$this->load->view('login');
	}

	public function index_home(){
		$this->load->view('header_home');
		$this->load->view('view_home');
	}



	public function lihat(){
		$data['barang_titip']=$this->M_pelanggan->getAllBarang();
		
		if ($this->input->post('keyword')) {
			$data['barang_titip'] = $this->M_pelanggan->cariBarang();
		}
		$this->load->view('header_home');
		$this->load->view('View_lihat',$data);
	}

	/*public function viewUbah($id_barang){
		$this->load->view('header_home');
		$where = array('id_barang' => $id_barang);
		$data['barang_titip']=$this->M_pelanggan->getBarangById($id_barang);
		$this->load->view('View_ubah',$data);
	}*/

	public function ubah($id_barang){
		$data['barang_titip']=$this->M_pelanggan->getBarangById($id_barang);
		if (!isset($id_barang)) redirect('pelanggan/ubah'); 
  		$barang_titip = $this->M_pelanggan;
        $validation = $this->form_validation;
        $validation->set_rules($barang_titip->rules2());

        $data['barang_titip'] = $barang_titip->getBarangById($id_barang);
	        if ($validation->run()) {
            $barang_titip->ubahBarang();
    	    $this->load->view("View_ubah", $data);
       	    redirect('pelanggan/lihat');
		}
		$this->load->view('header_home');
		$this->load->view("View_ubah", $data);
	}


	public function viewTambah(){
		$this->load->view('header_home');
		$this->load->view('View_titip');
	}
	public function tambah()
	{
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$data=array(
			"nama_barang"=>$this->input->post("nama_barang"),
			"id_jenis"=>$this->input->post("id_jenis"),
			"lama_waktu"=>$this->input->post("lama_waktu"),
			"id_pelanggan"=>$this->M_pelanggan->getByUsername($this->session->userdata('username'))['id_pelanggan'],
			"id_admin"=>"1",
		);
		$this->M_pelanggan->insert($data);
		$this->session->set_flashdata('login', 'Anda Telah Menitipkan Barang anda');
			redirect('pelanggan/index_home');		
	}

	public function hapus($id_barang){
		$cek = $this->M_pelanggan->hapusBarang($id_barang);
		//$barang_titip->hapusBarang();
		redirect('pelanggan/lihat');
	}

	public function search(){
		$data['keyword']=$this->input->post("keyword");
		$data['barang_titip']=$this->M_pelanggan->cariBarang($data['keyword'])->result();
		$this->load->view("pelanggan/lihat",$data);
	}

	public function tambah_user(){
		$pelanggan = $this->M_pelanggan;
        $validation = $this->form_validation;
        $validation->set_rules($pelanggan->rules());

        if ($validation->run()) {
            $pelanggan->tambahData();
            $this->session->set_flashdata('message', 'Ditambahkan');
        }
	}
}
?>
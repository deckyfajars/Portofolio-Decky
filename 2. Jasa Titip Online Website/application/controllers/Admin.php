<?php 
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('M_admin');
		$this->load->library('form_validation');
		
	}

	public function index(){
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$this->load->view('header');
		$this->load->view('view_lihat');
	}

	public function lihat(){
		$data['barang_titip']=$this->M_admin->getAllBarang();
		
		if ($this->input->post('keyword')) {
			$data['barang_titip'] = $this->M_admin->cariBarang();
		}
		$this->load->view('header_home');
		$this->load->view('V_lihatA',$data);

	}

	public function lihatHarga(){
		$data2['jenis']=$this->M_admin->getAllJenis();
		$this->load->view('view_barang',$data2);
	}

	public function viewUbah($id_barang){
		$where = array('id_barang' => $id_barang);
		$data['barang_titip'] = $this->m_pelanggan->edit_data($where,'barang_titip')->result();
		$this->load->view('view_ubah',$data);
	}
	public function ubah(){
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$data=array(
			"nama"=>$this->input->post("nama_barang"),
			"id_jenis"=>$this->input->post("id_jenis"),
			"lama_waktu"=>$this->input->post("lama_waktu"),
			"id_pelanggan"=>$this->m_pelanggan->getByUsername($this->session->userdata('username'))['id_pelanggan'],
			"id_admin"=>"1",
		);
		
		$where = array(
			'id_barang' => $this->input->post("id_barang"),
		);
		$this->m_data->ubah($where,$data,'user');
		redirect('pelanggan/lihat');
	}

	public function hapus($id_barang){
		$cek = $this->Model_satu->hapusBarang($id_barang);
		//$barang_titip->hapusBarang();
		redirect('pelanggan/lihat');
	}

	public function search(){
		$data['keyword']=$this->input->post("keyword");
		$data['barang_titip']=$this->Model_satu->cariBarang($data['keyword'])->result();
		$this->load->view("pelanggan/lihat",$data);
	}

	public function ubah2($id_jenis){
		$data2['jenis']=$this->M_admin->getBarangByIdJ($id_jenis);
		if (!isset($id_jenis)) redirect('admin/ubah2'); 
  		$jenis = $this->M_admin;
        $validation = $this->form_validation;
        $validation->set_rules($jenis->rules3());

        $data2['jenis'] = $jenis->getBarangByIdJ($id_jenis);
	        if ($validation->run()) {
            $jenis->ubahBarangH();
    	    $this->load->view("View_ubahH", $data2);
       	    redirect('admin/lihatHarga');
		}
		$this->load->view('header_home');
		$this->load->view("View_ubahH", $data2);
	}

}
?>
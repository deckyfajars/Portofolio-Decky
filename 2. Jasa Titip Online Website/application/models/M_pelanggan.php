<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class M_pelanggan extends CI_Model
{
	private $pelanggan='pelanggan';
	private $barang_titip='barang_titip';

	public $id_barang;
	public $nama_barang;
	public $lama_waktu;
	
	public function getAll(){
		return $this->db->get('pelanggan')->result_array();
	}

	public function getAllBarang(){
		$data = $this->db->get('barang_titip');
		return $data->result_array();
	}

    public function getAllJenis(){
        $data2 = $this->db->get('jenis');
        return $data2->result_array();
    }

	public function getBarangById($id_barang)
	{
		//get data mahasiswa based on id 
		return $this->db->get_where($this->barang_titip,["id_barang"=>$id_barang])->row();

	}


	public function insert($data){
		return $this->db->insert('barang_titip', $data);
	}

	public function getByUsernameAndPassword($username, $pass){
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		return $this->db->get('pelanggan')->result_array();
	}

	public function getByUsername($username){
		$this->db->where('username', $username);
		return $this->db->get('pelanggan')->result_array()[0];
	}

	

	public function hapusBarang($id_barang){
        $this->db->select("*");
        $this->db->from('barang_titip');
        $this->db->where('id_barang',$id_barang);
        $this->db->delete('barang_titip');
    }


	public function ubahBarang(){
       /* $data=[
            "id_barang" =>$this->input->post('id_barang',true),
            "nama_barang" =>$this->input->post('nama_barang',true),
            "id_jenis"=>$this->input->post('id_jenis',true),
            "lama_waktu" =>$this->input->post('lama_waktu',true),
            "id_pelanggan" =>$this->input->post('id_pelanggan',true),
            "id_admin" =>$this->input->post('id_admin',true),
        ];*/

        $post=$this->input->post();
        $this->id_barang=$post["id_barang"];
        $this->nama_barang=$post["nama_barang"];
        $this->lama_waktu=$post["lama_waktu"];
        $this->db->update($this->barang_titip, $this, array('id_barang'=>$post['id_barang']));
       
    }



	public function tambahData()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"no_telpon" => $this->input->post('no_telpon', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
		];
		$this->db->insert($this->pelanggan, $data);
		redirect('pelanggan/index_login');		

	}

	public function rules2()
    {
        return [
            ['field' => 'nama_barang',
            'label' => 'nama_barang',
            'rules' => 'required'],

            ['field' => 'id_jenis',
            'label' => 'id_jenis',
            'rules' => 'required'],
            
            ['field' => 'lama_waktu',
            'label' => 'lama_waktu',
            'rules' => 'required']
        ];
    }

	public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'no_telpon',
            'label' => 'no_telpon',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required']
        ];
    }

    public function cariBarang(){
    	$keyword = $this->input->post('keyword', true);
		$this->db->select('*');
  		$this->db->from('barang_titip');
  		if (!empty($keyword)) {
   			$this->db->like('nama_barang', $keyword);
   			$this->db->or_like('id_jenis', $keyword);
   			
  		}

 			 $this->db->order_by('nama_barang');
 			 $this->db->order_by('id_jenis');
  			 $getData = $this->db->get('');
				return $getData->result_array();
    }

    
}
?>
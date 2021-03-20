<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class M_admin extends CI_Model
{
	private $pelanggan='pelanggan';
	private $jenis='jenis';
	private $barang_titip='barang_titip';
	public function getAll(){
		return $this->db->get('admin')->result_array();
	}

	public function insert($data){
		return $this->db->insert('barang_titip', $data);
	}

	public function getAllJenis(){
        $data2 = $this->db->get('jenis');
        return $data2->result_array();
    }

	public function getAllBarang(){
		$data = $this->db->get('barang_titip');
		return $data->result_array();
	}

	public function getByUsernameAndPassword($username, $pass){
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		return $this->db->get('admin')->result_array();
	}

	public function getByUsername($username){
		$this->db->where('username', $username);
		return $this->db->get('admin')->result_array()[0];
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function getBarangByIdJ($id_jenis)
	{
		//get data mahasiswa based on id 
		return $this->db->get_where($this->jenis,["id_jenis"=>$id_jenis])->row();

	}

	public function ubah($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function rules3()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'harga',
            'rules' => 'required']
        ];
    }

    public function ubahBarangH(){
       /* $data=[
            "id_barang" =>$this->input->post('id_barang',true),
            "nama_barang" =>$this->input->post('nama_barang',true),
            "id_jenis"=>$this->input->post('id_jenis',true),
            "lama_waktu" =>$this->input->post('lama_waktu',true),
            "id_pelanggan" =>$this->input->post('id_pelanggan',true),
            "id_admin" =>$this->input->post('id_admin',true),
        ];*/

        $post=$this->input->post();
        $this->id_jenis=$post["id_jenis"];
        $this->nama=$post["nama"];
        $this->harga=$post["harga"];
        $this->db->update($this->jenis, $this, array('id_jenis'=>$post['id_jenis']));
       
    }
}
?>
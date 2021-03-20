<?php
	class M_scrapt extends CI_Model{
		private $user='user';
		private $hasil='hasil';

		public $id_hasil;
		public $panjang;
		public $kapasitas;
		public $USD;
		public $LME;
		public $diameter;
		public $tanggal;
		public $tempat;
		public $berat;
		public $profit;
		// public $primer;

		function cek($user,$where){		
			return $this->db->get_where($user,$where);
		}	
		
		public function rules()
		{
			return [
				['field'=>'username','label'=>'username','rules'=>'required'],
				['field'=>'password','label'=>'password','rules'=>'required']		
			];
		}

		public function rules2() {
         return [

    		['field' => 'primer_pilih',
             'label' => 'primer_pilih',
    		'rules' => ''],

             ['field' => 'panjang',
             'label' => 'panjang',
             'rules' => 'required'],

             ['field' => 'kapasitas',
             'label' => 'kapasitas',
             'rules' => 'required'],

              ['field' => 'LME_kon',
             'label' => 'LME_kon',
             'rules' => 'required'],

             ['field' => 'USD',
             'label' => 'USD',
             'rules' => 'required'],
             
             ['field' => 'diameter',
             'label' => 'diameter',
    		'rules' => 'required'],

    		['field' => 'tempat',
             'label' => 'tempat',
    		'rules' => 'required'],

    		['field' => 'tanggal',
             'label' => 'tanggal',
    		'rules' => 'required']

			];
                
       }
		
	   	public function getAllHasil(){
	   		return $this->db->get('hasil');
	   	}

	   	public function hapusData($id_hasil){
        $this->db->select("*");
        $this->db->from('hasil');
        $this->db->where('id_hasil',$id_hasil);
        $this->db->delete('hasil');
    	}

    	public function hapusSemua($query){
    		$query="delete from hasil";
    		return $query;
    	}

    	public function TotalBerat(){
			$this->db->select_sum('berat');
			$result = $this->db->get('hasil')->row();  
			return $result->berat;
		}

		public function TotalProfit(){
			$this->db->select_sum('profit');
			$result = $this->db->get('hasil')->row();  
			return $result->profit;
		}

		public function cariHasil($query){
    	$this->db->select("*");
    	$this->db->from("hasil");
    	if($query!=''){
    		$this->db->like('tempat',$query);
    		$this->db->or_like('tanggal',$query);
    		$this->db->or_like('primer',$query);
    		$this->db->or_like('primer_lain',$query);
    	}
    	$this->db->order_by('tempat',$query);
    	$this->db->order_by('tanggal',$query);
    	$this->db->order_by('primer',$query);
    	$this->db->order_by('primer_lain',$query);
    	return $this->db->get();
	}

    public function masukData(){
				
			    $data =[
			     "primer" => $this->input->post('primer_pilih',true),
			     "panjang" => $this->input->post('panjang',true),
			     "kapasitas" => $this->input->post('kapasitas',true),
			     "LME" => $this->input->post('LME_kon',true),
			     "USD" => $this->input->post('USD',true),
				 "diameter" => $this->input->post('diameter',true),
				 "tempat" => $this->input->post('tempat',true),
				 "berat"=> $this->input->post('berat',true),
				 "profit" => $this->input->post('profit',true),
				 "tanggal" => $this->input->post('tanggal',true)
				
			    ];
			    $this->db->insert($this->hasil,$data);
			    redirect('index.php/C_scrapt/index_utama'); 
	}

  }


?>
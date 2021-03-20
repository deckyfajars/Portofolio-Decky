<?php
// Load library phpspreadsheet
// End load library phpspreadsheet
	class C_scrapt extends CI_Controller
	{
		public $total_beratt;
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_scrapt');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
		}

		public function index(){
		
			$this->load->view('login');
			
		}

		public function index_bantuan(){
		$this->load->view('header');
		$this->load->view('bantuan');
		$this->load->view('footer');
		}

		public function lihat(){
		$this->load->view('header');
		$data2['hasil']=$this->M_scrapt->getAllHasil()->result();
		if ($this->input->post('keyword')) {
			$data2['hasil'] = $this->M_scrapt->cariHasil();
		}
			$this->load->view('lihat',$data2);
			$this->load->view('footer');
		}	
		
		public function index_utama(){
			$this->load->view('header');
			$this->load->view('main_utama');
			$this->load->view('footer');
			// $this->load->view('test');
		}
		
		public function index_tentang(){
			$this->load->view('header');
			$this->load->view('tentang');
			$this->load->view('footer');
		}
	
		public function total_berat(){
			$data=$this->M_scrapt->TotalBerat();
			$total_beratt = $data;
			return $total_beratt;
		}

	public function search(){
		
		$output='';
		$query='';
		$this->load->model('M_scrapt');
		if ($this->input->post('query')){
			$query=$this->input->post('query');
		}

		$data=$this->M_scrapt->cariHasil($query);
		$output .='
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
		table {
		  border-collapse: collapse;
		  border-spacing: 0;
		  width: 100%;
		  border: 1px solid #ddd;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		</style>

		<div style="overflow-x:auto;">
			<table border="5" style="color:white; margin-bottom:36px; center;position: relative;top: 20px;background: linear-gradient(90deg, black, red, black);">
		<tr>
			<th class="text-center" scope="col">NO</th>
			<th class="text-center" scope="col">STO</th>
			<th class="text-center" scope="col">PRIMER</th>
			<th class="text-center" scope="col">PANJANG (m)</th>
			<th class="text-center" scope="col">KAPASITAS (pair)</th>
			<th class="text-center" scope="col">LME (1 TON)</th>
			<th class="text-center" scope="col">USD</th>
			<th class="text-center" scope="col">Diameter</th>
			<th class="text-center" scope="col">Berat yang Dihasilkan (kg)</th>
			<th class="text-center" scope="col">Profit yang Dihasilkan (Milyar)</th>
			<th class="text-center" scope="col">Tanggal Pelaksanaan</th>
			<th class="text-center" scope="col"></th>
		</tr>


		
		';
			if ($data->num_rows()>0){
					$i=0;
					foreach($data->result() as $row){
							$i++;
						$output.= '

					<tr>
						<td class="text-center">'.$i.'</td>
						<td class="text-center">'.$row->tempat.'</td>
						<td class="text-center">'.$row->primer.''.$row->primer_lain.'</td>
				        <td class="text-center">'.$row->panjang.'</td>
				        <td class="text-center">'.$row->kapasitas.'</td>
				        <td class="text-center">'.$row->LME.'</td>
				        <td class="text-center">'.$row->USD.'</td>
				        <td class="text-center">'.$row->diameter.'</td>
				        <td class="text-center">'.$row->berat.'</td>
				        <td class="text-center">'.$row->profit.'</td>
				        <td class="text-center">'.$row->tanggal.'</td>
				        <td class="text-center"><a href="hapus/'.$row->id_hasil.'" class="btn btn-danger"><i class="fa fa-trash-o">	Delete</a></i> 
				        </td>
			  		</tr>

			  		';

		  			}	

			} 
			else {
				$output .= '
				<tr>
					<td colspan="5">Data Tidak Ditemukan</td>
				</tr>
				';
			}
			$output .= '</table>';
			$output .= '</div>';
			echo $output;
		}


		public function aksi_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
		'username' => $username,
		'password' => $password
		);
		$cek = $this->M_scrapt->cek("user",$where)->num_rows();
		if($cek > 0){
	 
			$data_session = array(
				'username' => $username,
				'status' => "login"
				);
	 
			$this->session->set_userdata($data_session);
			redirect('index.php/C_scrapt/index_utama');
		}else{
			echo "
			<script type='text/javascript'>
			alert('USERNAME DAN PASSWORD SALAH !!! ');
			history.back(self);
			</script>";
			}
			
		}
		
		function logout(){
		$this->session->sess_destroy();
		redirect('');
		}


		public function insert(){
			$hasil = $this->M_scrapt;
			$validation = $this->form_validation;
        $validation->set_rules($hasil->rules2());
		
		if ($validation->run()) {
            $hasil->masukData();
        	}
		}

		public function hapus($id_hasil){
		$cek = $this->M_scrapt->hapusData($id_hasil);
		redirect('index.php/C_scrapt/lihat');
		}

		public function hapusAll($query){
		$query = $this->M_scrapt->hapusSemua();
		redirect('index.php/C_scrapt/lihat');
		}

		public function excel(){
			$hasil=$this->M_scrapt->getAllhasil();
			
			$totalberat=$this->M_scrapt->TotalBerat();
			$totalprofit=$this->M_scrapt->TotalProfit();
			
			require(APPPATH.'PHPExcel/Classes/PHPExcel.php');
			require(APPPATH.'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

			$object = new PHPExcel();
			$object1= new PHPExcel();
			$object->getProperties()->setCreator("JAWARA TELKOM");
			$object->getProperties()->setLastModifiedBy("JAWARA TELKOM");
			$object->getProperties()->setTitle("DATA SCRAP CABLE JAWA BARAT");

			$style_col = array(
				'font' => array('bold' => true), // Set font nya jadi bold
				'alignment' => array(
				  'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
				  'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
				),
				'borders' => array(
				  'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				  'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				  'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				  'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
				)
			  );
			// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
			$style_row = array(
				'alignment' => array(
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
				),
				'borders' => array(
				'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
				'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
				'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
				'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
				)
			);
				/*start - BLOCK UNTUK TEXT ALIGN*/
				$center = array();
				$center ['alignment']=array();
				$center ['alignment']['horizontal']=PHPExcel_Style_Alignment::HORIZONTAL_CENTER;

			$object->setActiveSheetIndex(0)->setCellValue('A1', "DATA SCRAP CABLE DUCT JAWA BARAT"); // Set kolom A1 dengan tulisan "DATA SISWA"
			$object->getActiveSheet()->mergeCells('A1:K1'); // Set Merge Cell pada kolom A1 sampai E1
			$object->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
			$object->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
			$object->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
			$object->getActiveSheet()->getStyle('A1')->getFill()
						->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
						->getStartColor()->setARGB('D8BFD8');

			$object->getActiveSheet()->getStyle('A3:K3')->getFill()
					->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
					->getStartColor()->setARGB('FFA500');

			$object->getActiveSheet()->getStyle('M3')->getFill()
					->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
					->getStartColor()->setARGB('FF1493');

			$object->getActiveSheet()->getStyle('M6')->getFill()
					->setFillType(PHPExcel_Style_Fill::FILL_SOLID)
					->getStartColor()->setARGB('FF1493');

			$object->setActiveSheetIndex(0);
			$object->getActiveSheet()->setCellValue('A3','NO');
			$object->getActiveSheet()->setCellValue('B3','STO');
			$object->getActiveSheet()->setCellValue('C3','PRIMER');
			$object->getActiveSheet()->setCellValue('D3','KAPASITAS (PAIR)');
			$object->getActiveSheet()->setCellValue('E3','DIAMETER (mm)');
			$object->getActiveSheet()->setCellValue('F3','PANJANG (m)');
			$object->getActiveSheet()->setCellValue('G3','KURS USD (IDR)');
			$object->getActiveSheet()->setCellValue('H3','LONDON METAL EXCHANGE (IDR)');
			$object->getActiveSheet()->setCellValue('I3','POTENSI (TON)');
			$object->getActiveSheet()->setCellValue('J3','KEUNTUNGAN (Milyar)');
			$object->getActiveSheet()->setCellValue('K3','TANGGAL PELAKSANAAN');
			$object->getActiveSheet()->setCellValue('M3','TOTAL BERAT (TON)');
			$object->getActiveSheet()->setCellValue('M6','TOTAL KEUNTUNGAN (Milyar)');
			


			    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
				$object->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
				$object->getActiveSheet()->getStyle('M6')->applyFromArray($style_col);


			$baris = 4;
			$no =1;
			foreach ($hasil as $hasil){
				$object->getActiveSheet()->setCellValue('A'.$baris,$no++);
				$object->getActiveSheet()->setCellValue('B'.$baris,$hasil['tempat']);
				if($hasil['primer'] == NULL){
					$object->getActiveSheet()->setCellValue('C'.$baris,$hasil['primer_lain']);
				}else{
					$object->getActiveSheet()->setCellValue('C'.$baris,$hasil['primer']);
				}
				$object->getActiveSheet()->setCellValue('D'.$baris,$hasil['kapasitas']);
				$object->getActiveSheet()->setCellValue('E'.$baris,$hasil['diameter']);
				$object->getActiveSheet()->setCellValue('F'.$baris,$hasil['panjang']);
				$object->getActiveSheet()->setCellValue('G'.$baris,$hasil['USD']);
				$object->getActiveSheet()->setCellValue('H'.$baris,$hasil['LME']);
				$object->getActiveSheet()->setCellValue('I'.$baris,$hasil['berat']);
				$object->getActiveSheet()->setCellValue('J'.$baris,$hasil['profit']);
				$object->getActiveSheet()->setCellValue('K'.$baris,$hasil['tanggal']);



				$object->getActiveSheet()->getStyle('A'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('B'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('C'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('D'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('E'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('F'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('G'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('H'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('I'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('J'.$baris)->applyFromArray($style_row);
				$object->getActiveSheet()->getStyle('K'.$baris)->applyFromArray($style_row);


				$object->getActiveSheet()->getStyle ('A'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('B'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('C'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('D'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('E'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('F'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('G'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('H'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('I'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('J'.$baris)->applyFromArray ($center);
				$object->getActiveSheet()->getStyle ('K'.$baris)->applyFromArray ($center);

		
				$baris++;
			}
			$object->getActiveSheet()->setCellValue('M7',$totalprofit);
			$object->getActiveSheet()->setCellValue('M4',$totalberat);
			$object->getActiveSheet()->getStyle('M4')->applyFromArray($style_row);
			$object->getActiveSheet()->getStyle('M7')->applyFromArray($style_row);
			$object->getActiveSheet()->getStyle ('M4')->applyFromArray ($center);
			$object->getActiveSheet()->getStyle ('M7')->applyFromArray ($center);


			$object->getActiveSheet()->getColumnDimension('A')->setWidth(5); 
			$object->getActiveSheet()->getColumnDimension('B')->setWidth(15); 
			$object->getActiveSheet()->getColumnDimension('C')->setWidth(15); 
			$object->getActiveSheet()->getColumnDimension('D')->setWidth(20); 
			$object->getActiveSheet()->getColumnDimension('E')->setWidth(20); 
			$object->getActiveSheet()->getColumnDimension('F')->setWidth(30); 
			$object->getActiveSheet()->getColumnDimension('G')->setWidth(15); 
			$object->getActiveSheet()->getColumnDimension('H')->setWidth(40); 
			$object->getActiveSheet()->getColumnDimension('I')->setWidth(20); 
			$object->getActiveSheet()->getColumnDimension('J')->setWidth(30); 
			$object->getActiveSheet()->getColumnDimension('K')->setWidth(30); 
			$object->getActiveSheet()->getColumnDimension('M')->setWidth(30); 
			// $object->getActiveSheet()->getColumnDimension('O')->setWidth(30); 

			
			// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
			$object->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
			// Set orientasi kertas jadi LANDSCAPE
			$object->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);


			$filename="DATA SCRAP CABLE JAWA BARAT 2019".'.xlsx';
			$object->getActiveSheet()->setTitle("DATA SCRAP");
			$object1->getActiveSheet()->setTitle("DATA SCRAP");
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename.'"');
			header('Cache-Control: max-age=0');

			$writer=PHPExcel_IOFactory::createwriter($object,'Excel2007');
			$writer->save('php://output');
		}

	}

?>
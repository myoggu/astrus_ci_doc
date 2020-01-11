<?php  
class tampil_cr extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('db_model');
	}
	function index()
	{
		$this->load->view('view_home');
	}
	function index_a()
	{
			$this->load->model('db_model');
			$data['data_show']=$this->db_model->tes();
			$this->load->view('tampil',$data);
	}

	function show_tambah_kata()
	{
		//$data['header_show']=$this->db_model->show_tambah_kata();
		//$this->load->view('kata_add',$data);

		$this->load->view('kata_add');
	}

	
	function tambah()
	{
		echo $string=$this->input->post('raw');
		$array =  explode(' ', $string);
		$temp=0;
		foreach ($array as $item) {
		     $isi[$temp]=$item;
		    $temp++;
		}
		echo "<br><br><br>";
		 $jumlah_anggota=count($isi);
		$j_nama=0;
		$j_alamat=0;
		$j_kodepos=0;
		$j_telepon=0;
		for($i=0;$i<$jumlah_anggota;$i++)
		{
		    if(ctype_upper($isi[$i]))
		    {
		         $nama[$j_nama]=$isi[$i]; echo "&nbsp";
		        $j_nama++;
		    }
		    else if(is_numeric($isi[$i])&&strlen($isi[$i])==5)
		    {
		          $kode_pos=$isi[$i]; echo "&nbsp";
		    }
		    else
		    {
		        if (preg_match("/^[Tel]?[+]?[0-9]/",$isi[$i])) 
		        {
		            $telepon = $isi[$i];
		        }
		        else
		        {
		            $alamat[$j_alamat]=$isi[$i];
		           $j_alamat++;
		        }
		    }   
		}
		echo "<br><br><br>";
		echo $f_nama = implode(" ",$nama);
		echo "<br>";
		echo $f_alamat = implode(" ",$alamat);
		echo "<br>";
		echo $f_kodepos = $kode_pos;
		echo "<br>";
		echo $f_telepon  = $telepon;
		echo "<br>";
		$this->db_model->tambah_data($f_nama,$f_alamat,$f_kodepos,$f_telepon);
		redirect('tampil_cr/index_a');

	}
}

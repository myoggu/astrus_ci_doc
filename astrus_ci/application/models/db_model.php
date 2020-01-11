<?php 
defined('BASEPATH') or exit ('no direct script access allowed');

/**
* 
*/
class db_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

			public function tes()
				{		
					$query=$this->db->query('select * from tabel_form');
					return $query->result_array();
				}
			public function show_tambah_kata()
				{		
					$query=$this->db->query('select * from tabel_form');
					return $query->result_array();
				}
			public function tambah_data($f_nama,$f_alamat,$f_kodepos,$f_telepon )
				{
					$object2 =array
                        (                        	
                        'name' => $f_nama,
                        'address' =>$f_alamat,
                        'post_code' =>$f_kodepos,
                        'telephone' =>$f_telepon                       
                        );
                        $this->db->insert('tabel_form',$object2);
				}



}
?>
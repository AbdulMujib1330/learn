<?php
defined('BASEPATH') or exit('No direct script access allowed');
class test extends CI_Controller
{
    public function index($proses = 'proses')
    {   
        $data = array(
            'variable1' => 'value1',
            'variable2' => 'value2'
        );
        $data['variabel3'] = array('nama' => 'Budi', 'umur' => 30);
        $data['variabel4'] = array('nama' => 'Siti', 'umur' => 25);
        $data['variabel'] = array(
            array('nama' => 'Budi', 'umur' => 30),
            array('nama' => 'Siti', 'umur' => 25)
        );
        

        

		$this->db->where('proses', $proses);
		$query = $this->db->get('test');
		$result = $query->row();

		$nilai_kolom = $result->proses;
        
        $data['proses'] = $proses;
        $data['sessi'] = $nilai_kolom;
        $this->load->view('test', $data);
    }
}

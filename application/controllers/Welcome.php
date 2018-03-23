<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('mother');
	}
	public function index()
	{
		$data['header']='module/navbar';
		$data['sidebar']='module/sidebar';
		$data['noidung']='module/noidung-content';
		$this->load->view('index',$data);
	}
	public function check()
	{
		

		if($this->mother->insertt())
			echo "ahihi";
		else
			echo "ahuhu";
		
	}
	public function get_table()
	{
		if($this->input->post('chon')){		
			$data=$this->mother->getvalue($this->input->post('chon'));
			$t="";
			foreach($data as $value){
				$t.="<tr>
						<td>".$value["tenhocphan"]."</td>
						<td>".$value["sotc"]."</td>
						<td>".$value["tongsotiet"]."</td>
						<td>".$value["sotietlt"]."</td>
						<td>".$value["sotietbt"]."</td>
						<td>".$value["kiemtra"]."</td>
						<td>".$value["hocki"]."</td>
					</tr>";	
			}
			echo $t;

		}
	}
	
}

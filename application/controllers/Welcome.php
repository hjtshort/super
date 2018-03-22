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
		$this->load->view('index');
	}
	public function check()
	{
		

		if($this->mother->insertt())
			echo "ahihi";
		else
			echo "ahuhu";
		
	}
	public function getvalue()
	{
		$data=array('data'=>$this->mother->getvalue());
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
	}
	
}

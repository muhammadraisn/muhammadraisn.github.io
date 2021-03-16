<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();     
    }

	public function index()
	{
	    $this->load->view('admin/login');
	}

	public function indexsmp()
	{
		$this->load->view('admin/indexsmp');
	}

	public function indexsma()
	{
		$this->load->view('admin/indexsma');
	}

}
?>
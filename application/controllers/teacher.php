<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	public function __construct() 
	{
        parent:: __construct();

    }

	public function index()
	{
		$this->load->view('public/faculty');

	}
}
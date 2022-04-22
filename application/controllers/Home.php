<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
        function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
                $this->load->view('includes/head');
                $this->load->view('home');
                $this->load->view('includes/footer');	
	} 
        public function about()
	{
                $this->load->view('includes/head');
                $this->load->view('about');
                $this->load->view('includes/footer');	
	} 
        public function contact()
	{
                $this->load->view('includes/head');
                $this->load->view('contact');
                $this->load->view('includes/footer');	
	} 
}
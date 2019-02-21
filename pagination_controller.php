<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// LOAD HELPERS
		$this->load->helper('url');
		
		// LOAD LIBRARIES
		$this->load->database();
		//$this->load->library('database');	//Don't use this
	}
	
	function index()
	{
		$this->data['title'] = 'CI Pagination';
		
		// load pagination class
		$this->load->library('pagination');
		$config['base_url'] = base_url().'pagination_controller/index/';
		$config['total_rows'] = $this->db->count_all('country');
		$config['per_page'] = '5';
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config);
		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//load the model and get results
		$this->load->model('pagination_model');
		$this->data['results'] = $this->pagination_model->get_all_countries($config['per_page'],$offset);
		
		// load the HTML Table Class
		$this->load->library('table');
		$this->table->set_heading('ID', 'Country Name', 'Country Code');
		
		// load the view
		$this->load->view('pagination_view', $this->data);
	}
	
}
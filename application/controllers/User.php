<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 
	 public function __construct(){
		 parent::__construct();
		 
	 }


	public function index()
	{
		/* if( $this->input->post('register') ){
			$this->form_validation->set_rules('name', 'name', 'required');


			if($this->form_validation->run() == TRUE){

					echo "form validate";
			}
		 }
		$this->load->view('student'); */
		
		$data = array(
        'blog_title'   => 'My Blog Title',
        'blog_heading' => 'My Blog Heading',
        'blog_entries' => array(
                array('title' => 'Title 1', 'body' => 'Body 1'),
                array('title' => 'Title 2', 'body' => 'Body 2'),
                array('title' => 'Title 3', 'body' => 'Body 3'),
                array('title' => 'Title 4', 'body' => 'Body 4'),
                array('title' => 'Title 5', 'body' => 'Body 5')
				)
		);
				
		
		//$this->load->view('test');
		$this->parser->parse('test', $data);
		
	}



}

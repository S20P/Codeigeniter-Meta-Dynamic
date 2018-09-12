<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
	
	public function view($page='home')
	{
		if(file_exists(APPPATH.'views/pages/'.$page.'.php')){
				 
		
			$data['meta'] = array(
							  "title"=>"Home Page Title",
							   "description"=>"Home Page Description",
							   "image"=>"assets/images/home.jpg",
							   "slug"=>"home"
							      );

		   $this->load->view('templates/header',$data);
		   $this->load->view('pages/'.$page);
           $this->load->view('templates/footer');
		}
		else{
			show_404();
		}
	}
}

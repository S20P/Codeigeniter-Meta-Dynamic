<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutController extends CI_Controller {
	
	public function view($page='about')
	{
		if(file_exists(APPPATH.'views/pages/'.$page.'.php')){
		
			$data['meta'] = array(
				"title"=>"About Page Title",
				 "description"=>"About Page Description",
				 "image"=>"assets/images/about.jpg",
				 "slug"=>"about"
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

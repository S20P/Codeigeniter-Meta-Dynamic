<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
{

    public function view($page = 'contact')
    {
        if (file_exists(APPPATH . 'views/pages/' . $page . '.php')) {

            $data['meta'] = array(
                "title" => "Contact Page Title",
				"description" => "Contact Page Description",
				"image"=>"assets/images/contact.jpg",
                "slug" => "contact"
            );

            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page);
            $this->load->view('templates/footer');
        } else {
            show_404();
        }
    }
}

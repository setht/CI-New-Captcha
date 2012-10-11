<?php

if ( !defined('BASEPATH') )
      exit('No direct script access allowed');

class Example extends Front_Controller {

      //--------------------------------------------------------------------

      public function index()
      {

	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->form_validation->CI = & $this;
	$this->load->library('session');
	    
	$this->form_validation->set_rules('captcha_image', 'Security Code', 'callback_check_captcha');

	//this is for ci bonfire
	//Template::set('captcha_image', '/captcha/');

	//normal ci
	$data = array('captcha_image' => 'captcha');
	
	if ( $this->form_validation->run() == FALSE ) {
		//validation failed
	}else{
		//captcha correct and validation successful
	}
	
	//this is for ci bonfire
	//Template::render();

	//normal ci
	$this->load->view('example', $data);
	
	}
	
      public function check_captcha($str)
      {
            require_once(APPPATH . '/libraries/securimage/securimage.php');
            $securimage = new Securimage();
            if ( !$securimage->check($str) ) {
                  $this->form_validation->set_message('check_captcha', 'The %s you have entered is incorrect.');
                  return FALSE;
            } else {
                  return TRUE;
            }
      }
}
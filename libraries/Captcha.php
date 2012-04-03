<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'/libraries/securimage/securimage.php');

class Captcha {
		
	var $securimage;
	
    public function __construct($params = array())
    {
        // Do something with $params
        $this->securimage = new securimage();
    }
	
	public function create_captcha(){
		return $this->securimage->show();
	}
}

?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*-----Phase2 Restful API for Statistic Library ---*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Mmmr extends REST_Controller
{
    function post()
    {
        try 
		{
			$array = $this->_post_args;			//Retrieves the request data from $this->_post_args. 
			$arr = $array['numbers'];  
			$this->load->library('statistic'); 	//Load the statistic library
    		$data = array("results" => array('mean' => $this->statistic->mean($arr), 'median' => $this->statistic->median($arr), 'mode' => $this->statistic->mode($arr), 'range' => $this->statistic->range($arr))); // test code
			$this->response($data, 200); 		// 200 being the HTTP response code
    	} 
		catch (Exception $e) 
		{
    		$this->response(array('error' => $e->getMessage()),$e->getCode());
    	}	
    }
	
    function get()
    {
        $this->response( $result = array("error" => array('code' => 404, 'message' => 'Method GET not available on this endpoint')), 404);// 400 being the HTTP response code
    }

}


/* End of file mmmr.php */
/* Location: ./application/controllers/mmmr.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First extends CI_Controller {

	public function index()
	{
		$this->load->library('statistic');  //load the statistic library
		$arr = array(19, 27, 110, 2, 30, 31, 9, 2); 
		echo '<h3>Get mean, median, mode and range of array(19, 27, 110, 2, 30, 31, 9, 2)</h3>';
		echo 'Mean: ' . $this->statistic->mean($arr) . '<br>'; 
		echo 'Median: ' . $this->statistic->median($arr) . '<br>';
		echo 'Mode: ' . $this->statistic->mode($arr) . '<br>';
		echo 'Range: ' . $this->statistic->range($arr) . '<br>';

	}
}

/* End of file first.php */
/* Location: ./application/controllers/first.php */
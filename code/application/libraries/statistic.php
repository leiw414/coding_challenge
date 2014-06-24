<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
final class Statistic
{
     /**
     * Calculate the mean value of a set of numbers in array.
     *
     * @param array $array set of values.
     * @return number mean value.
     */
    public static function mean($array)
    {
         $count = count($array);  		//Count all elements in an array
         $sum = array_sum($array);  	//Calculate the sum of values in an array
         return $mean = $sum / $count;  //Return the average of all the numbers
    }
    
    /**
     * Calculate the median value of a set of numbers in array.
     *
     * @param array $array set of values.
     * @return number median value.
     */
    public static function median($array)
    {
        sort($array); 
		$count = count($array); 			//total numbers in array
		$middle = floor(($count-1)/2); 		// find the middle value, or the lower middle value
		if($count % 2) { 					// odd number, middle is the median
			$median = $array[$middle];
		} 
		else { 								// even number, calculate average of two medians
			$low = $array[$middle];
			$high = $array[$middle+1];
			$median = (($low+$high)/2);
		}
		return $median;
    }

    /**
     * Calculate the mode value of a set of numbers in array.
     *
     * @param array $array set of values.
     * @return number mode value.
     */
    public static function mode($array)
    {
        $ay = array_count_values($array); 		//Counts all the values of an array					  	
        $mode = array_search(max($ay), $ay);   	//Searches the array for the number that is in the array the most times 
		return $mode;
    }
	
	 /**
     * Calculate the range value of a set of numbers in array.
     *
     * @param array $array set of values.
     * @return number mode value.
     */
	public static function range($array){
		 sort($array);  			//Sort an array
         $sm = $array[0];  			//get the smallest number
         rsort($array);  			//Sort an array in reverse order
         $lg = $array[0]; 			//Get the largest number
         return $range = $lg - $sm; //Return the difference between the highest number and the lowest number 
	}
}	

/* End of file Statistic.php */
/* Location: ./application/libraries/statistic.php */
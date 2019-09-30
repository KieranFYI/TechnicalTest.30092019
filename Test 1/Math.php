<?php

/**
 * Provides functions for adding and subtracting two variables
 *
 * @author Kieran Anderson <kieran@andersons.bz>
 * @date 16:06 2019/9/26
 */ 
class Math {

	/**
	 * Return the two values added together
	 *
	 * @param string   $value1	First variable to add together
	 * @param string   $value2	Second variable to add together
	 * 
	 * @author Kieran Anderson <kieran@andersons.bz>
	 * @date 15:10 2019/9/30
     * @return int
	 */ 
	public static function /* int */ AddValues(int $value1, int $value2) {
        // Combined the values and return the result
        return $value1 + $value2;
	}

	/**
	 * Return the two values subtracted from each other
	 *
	 * @param string   $value1	The value to subtract from
	 * @param string   $value2	The value to subtract
	 * 
	 * @author Kieran Anderson <kieran@andersons.bz>
	 * @date 15:10 2019/9/30
     * @return int
	 */ 
	public static function /* int */ SubtractValues(int $value1, int $value2) {
		// Subtract $value2 from $values1 and return the result
        return $value1 - $value2;
	}


}
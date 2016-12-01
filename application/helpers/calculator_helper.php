<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('calculatePage'))
{
	function calculatePage( $total_row, $pg_row ){
		
		$total_page = $total_row / $pg_row;
		if( ($total_row % $pg_row) > 0){
			$total_page += 1;
		}
		return (int)$total_page;
	}
}


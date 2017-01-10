<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('IsNullOrEmptyString'))
{
	function IsNullOrEmptyString($variable){
		return (!isset($variable) || trim($variable)==='');
	}
}
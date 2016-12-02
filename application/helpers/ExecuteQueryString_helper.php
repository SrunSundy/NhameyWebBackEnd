<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('interpolateQuery'))
{
	function interpolateQuery($query, $params) {
		$keys = array();
		$values = $params;
	
		# build a regular expression for each parameter
		foreach ($params as $key => $value) {
		if (is_string($key)) {
		$keys[] = '/:'.$key.'/';
		} else {
		$keys[] = '/[?]/';
		}
	
				if (is_string($value))
					$values[$key] = "'" . $value . "'";
	
					if (is_array($value))
					$values[$key] = "'" . implode("','", $value) . "'";
	
					if (is_null($value))
					$values[$key] = 'NULL';
		}
	
				$query = preg_replace($keys, $values, $query, 1, $count);
	
				return $query;
	}
}

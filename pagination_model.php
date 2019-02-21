<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_model extends CI_Model
{
	function get_all_countries($num, $offset)
	/*$num specifies the number of results to retrieve from the database and
    $offset specifies where it should start retrieving results from.*/
	{
		$query = $this->db->get('country', $num, $offset);
		return $query;
	}
	
}
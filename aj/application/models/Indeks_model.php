<?php

class Indeks_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('Supra', 15, 20, 35),
			array('BMW', 10, 12, 22),
			array('Gallardo', 7, 5, 12),
			array('Ferrari', 12, 16, 28),
			array('Bugati', 14, 8, 22),
		);

		return $cars;
	}
}
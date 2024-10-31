<?php

class Activity_model extends CI_Model {

    public function get_activity()
	{
		$sql = "SELECT * FROM detail_activity";
		$result = $this->db->query($sql)->result();
		return $result;
	}
}
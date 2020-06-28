<?php
class User_Model extends CI_Model {

	public function __construct()
        {
                parent::__construct();
                $this->dbUsers = $this->load->database('default',TRUE);
        }
	
	function getUsersData($q)
	{
		$data = $this->dbUsers->query($q);
		$result = $data->row();
		return $result;	
	}
}
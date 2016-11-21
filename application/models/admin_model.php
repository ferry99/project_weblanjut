<?php
 class admin_model extends CI_Model {

	private $primary_key = 'Username';
 	private $mytable = 'user';
    function __construct()
    {
        parent::__construct();
        $this->load->database();        
    }

  public function getConsole(){
  	$sql = "SELECT * FROM console";
	$data = $this->db->query($sql);
	return $data;
  }

  public function getCategory() {	
	$sql = "SELECT * FROM games_category";
	$data = $this->db->query($sql);
	return $data;
	}

	public function getTag() {	
	$sql = "SELECT * FROM tag";
	$data = $this->db->query($sql);
	return $data;
	}


	function getProfile($key) {	
	$sql = "SELECT * FROM user WHERE Username = '" . $key . "'";
	$data = $this->db->query($sql);
	return $data;
	}



	public function addGame($data){
		return $this->db->insert('games', $data); 
	}

	public function getAllUser(){
		$sql = "SELECT * FROM user";
  		$data = $this->db->query($sql);
		return $data;
	}

	public function doDelete($key){
	 	$sql = "DELETE FROM user WHERE Username = '$key'" ;
	 	$data = $this->db->query($sql);
	 }

	 public function doDeleteGame($key){
	 	$sql = "DELETE FROM games WHERE Id = '$key'" ;
	 	$data = $this->db->query($sql);
	 }

	 public function updatePass($key ,$newpass){
	 	$this->db->where($this->primary_key,$key);
	 	return $this->db->update($this->mytable,$newpass);

	 }
}

?>
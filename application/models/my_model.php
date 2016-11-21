<?php
 class my_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    public function getAllData(){
    	$sql = "SELECT * FROM games";
	 	$data = $this->db->query($sql);
	 	return $data;
    }

  public function getData($key)
	 {
	 	if($key == 1){
		  	$sql = "SELECT * FROM games WHERE Id_tag = '1' ORDER BY Date DESC LIMIT 3";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}

	 	if($key == 2){
	 		$sql = "SELECT * FROM games WHERE Id_tag = '2' ORDER BY Date DESC LIMIT 3";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}

	 	if($key == 3){
	 		$sql = "SELECT * FROM games WHERE Id_tag = '3' ORDER BY Date DESC LIMIT 3";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}
	 }
	 

 	public function getDataByTag($key)
	 {
	 	if($key == 'popular'){
		  	$sql = "SELECT * FROM games WHERE Id_tag = '1' ORDER BY Date";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}

	 	if($key == 'new_games'){
	 		$sql = "SELECT * FROM games WHERE Id_tag = '2' ORDER BY Date";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}

	 	if($key == 'top_games'){
	 		$sql = "SELECT * FROM games WHERE Id_tag = '3' ORDER BY Date";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}
	 }

	 public function getDataByCons($key)
	 {
	 	if($key == 'PS3'){
		  	$sql = "SELECT * FROM games WHERE Id_console = '2' ORDER BY Date";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}

	 	if($key == 'PS4'){
	 		$sql = "SELECT * FROM games WHERE Id_console = '3' ORDER BY Date";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}

	 	if($key == 'PC'){
	 		$sql = "SELECT * FROM games WHERE Id_console = '4' ORDER BY Date";
		 	$data = $this->db->query($sql);
		 	return $data;
	 	}
	 }

	public function getDataByGame($key)
	 {
	 	$sql ="SELECT * FROM games WHERE Game_name = '" .$key."'";
	    $data = $this->db->query($sql);
	 	return $data;
	 }

	 public function getDataByKeyword($key){
			$sql = "SELECT * FROM games WHERE Game_name LIKE '%$key%'";
			$data = $this->db->query($sql);
			return $data;
	}

	public function getUsername($username){
		$sql ="SELECT * FROM user WHERE Username = '" .$username."'";
		$data = $this->db->query($sql);
		return $data;
	}


}

?>
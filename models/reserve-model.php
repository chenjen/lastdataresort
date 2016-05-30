<?php

class Resort {
	protected $conn;
	public function __construct($conn) {
		$this->conn = $conn;
	}
	
    //find resorts that contains search term and returns a list of matches
	public function search($d) {
		$sql = "SELECT * FROM resort WHERE location =?";
		$stmt = $this->conn->prepare($sql);
		$success = $stmt->execute(array($d));
		if (!$success) {
			var_dump($stmt->errorInfo());
			return false;
		} else {
			return $stmt->fetchAll();
		}
	}
    
    //book activity 
    public function bookRoom($room_id) {
    $sql = 'INSERT INTO';
    $stmt = $this->conn->prepare($sql);
    $success = $stmt->execute(array($room_id));
    if (!$success) {
        var_dump($stmt->errorInfo());
        return false;
    } else {
        return $stmt->fetchAll();
    }
}
}
    
?>
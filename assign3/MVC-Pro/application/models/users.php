<?php
class Users extends Model{
	
	function getUser($uID){

        $sql =  'SELECT uID, email, password, first_name, last_name  FROM users WHERE uID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($uID));
		
		$user = $results;
	
		return $user;
	
	}
		
	public function getAllUsers($limit = 0){

		if($limit > 0){

			$numUsers = ' LIMIT '.$limit;
		}


		$sql =  'SELECT uID, email, first_name, last_name  FROM users'.$numUsers;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}

		return $users;

	}
	
	public function addUser($data){
		
		$sql='INSERT INTO users (first_name,last_name,email,password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
		
	}
	
	
}
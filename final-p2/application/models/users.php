<?php
class Users extends Model {
	
	//values
	public $uID, $first_name, $last_name, $email;
	protected $user_type;
	protected $active;
	
	// Constructor
	public function __construct() {
		parent::__construct();
		
		//if a session is set for uID
		if( isset ($_SESSION['uID']) ) {
			$userInfo = $this->getUserFromID($_SESSION['uID']);
			$this->uID = $userInfo['uID'];
			$this->first_name = $userInfo['first_name'];
			$this->last_name = $userInfo['last_name'];
			$this->email = $userInfo['email'];
			$this->user_type = $userInfo['user_type'];
			$this->active = $userInfo['active'];
		}
	}
	
	public function getUser($uID){
		$sql = 'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
	}
	
	public function getUserName(){
		return $this->first_name . ' ' . $this->last_name;
	}
		
	public function getAllUsers($limit = 0){
		if($limit > 0){
			$numusers = ' LIMIT '.$limit;
		}
		$sql = 'SELECT uID, first_name, last_name, email, password FROM users'.$numusers;
		
		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$users[] = $row;
		}
		
		return $users;
	}
	
	public function getUserFromEmail($email) {
		$sql = 'SELECT * FROM users WHERE email =?';
		$results = $this->db->getrow( $sql, array($email) );
		$user = $results;
		
		return $user;
	}
	
	public function getUserFromID($uID) {
		$sql = 'SELECT * FROM users WHERE uID =?';
		$results = $this->db->getrow( $sql, array($uID) );
		$user = $results;
		
		return $user;
	}
	
	public function getEmail() {
		return $this->email;
	}
	
	public function addUser($data){
		$sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}
	
	public function checkUser($email, $password) {
		$sql = 'SELECT email, password FROM users WHERE email = ?';
		$results = $this->db->getrow($sql, array($email) );
		
		
		$user = $results;
		$password_db = $user[1];
		
 		if( password_verify($password, $password_db) ) {
			return true;
		} else {
			return false;
		}
		
		// die('Email or password is incorrect.');
// 		die('<br/>This password is stored encrypted in the database: ' . $password_db);
		
		return $user;
	}
	
	public function isAdmin() {
		if($this->user_type == 1) {
			return true;
		} else {
			return false;
		}
	}
	
	public function isRegistered() {
		if( isset($this->user_type) ) {
			return true;
		} else {
			return false;
		}
	}

    public function isActive($uID){
        $sql = "SELECT active FROM users WHERE uID = ?";
        $result = $this->db->getrow($sql,array($uID));
        if($result['active']==='1'){
            return true;
        }
        else{
            return false;
        }
    }

    public function updateActive($data) {
        $sql = 'UPDATE users SET active = 1 where uID = ?';
        $this->db->execute($sql, $data);
        $message = "User approved.";
        return $message;
    }
    public function deleteUser($data) {
        $sql = 'DELETE FROM users where uID = ?';
        $this->db->execute($sql, $data);
        $message = "User deleted.";
        return $message;
    }
	
}
<?php

class User extends Model{
	    
		
		public $uID;
		public $first_name;
		public $last_name;
		public $email;
		protected $user_type;
		
       public function __construct(){
		   parent::__construct();
		   
		   if(isset($_SESSION['uID'])){
			   
			   $userInfo =$this->getUserfromID($_SESSION['uID']);
			   $this->uID = $userInfo['uID'];
			   $this->first_name = $userInfo['first_name'];
			   $this->last_name = $userInfo['last_name'];
			   $this->email = $userInfo['email'];   
			   $this->user_type = $userInfo['user_type'];   
		   }
			   
	   }
	   
	   public function getUserName(){
		   return $this->first_name.' '. $this->last_name;
	   }
	   
	    public function getUserEmail(){
			return $this->email;
			
		}
		public function isRegistered(){
			if(isset($this->user_type)){
				return true;
			}else{
				return false;
			}
		}
		
		public function isAdmin(){
			if($this->user_type == '1'){
				return true;
			}else{
				return false;
			}
		}
	   
	   
		public function addUser($data){
		 
		$sql='INSERT INTO users(email, password, first_name, last_name, user_type, active) VALUES 	 (?,?,?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
		
	}
	
	public function checkUser($email,$password){
		$sql= "SELECT email, password From users WHERE email= ?";
		//perform query
		$results= $this ->db->getrow($sql, array($email));
		if($results['password']== $password){
			return true;
		}else
		{
			return false;
		}
	
	}
	
	

	  
    public function getUserFromEmail($email){
	$sql= 'SELECT * FROM users Where email=?';
	//perform query
	$results=$this->db->getrow($sql, array($email));
	$user=$results;
	return $user;
      }	
	
	
	
	public function getAllMembers()
{
		
		$sql =  'SELECT uid, email, first_name, last_name FROM users';
		
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$members[] = $row;
		}
		return $members;
	}
	
	function getUserfromID($uID){
		
		$sql =  'SELECT * FROM users Where uID=?';
		
		
		//perform query
		$results = $this->db->getrow($sql, array($uID));
		
		$members = $results;
	
	return $members;
	
	
	}
	
	public function view($uID){


			$sql = 'SELECT first_name,last_name,email,uID, password,date FROM users WHERE uID=? LIMIT 1';
			$results = $this->db->execute($sql,array($userID));
			$response = $results->fetchrow();


			return $response;
		}
		
		public function view_all(){
			$sql = "SELECT first_name, last_name, email, uID, active, user_type from users";

			$results = $this->db->execute($sql);
			$response = $results->GetRows();
			$response2 = array();


			foreach($response as $person){
				 $person2 = array();
				foreach($person as $key=>$value){
					if(!is_numeric($key)){
						$person2[$key] = $value;


					}
				}
					$response2[]=$person2;
			}
		return $response2;
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
			public function delete($uID){
			$sql = "DELETE FROM users WHERE uID = ?";
			$outcome = $this->db->execute($sql,array($uID));


			return $outcome;
		}




		public function approve($uID){


			$sql="UPDATE users SET active=1 WHERE uID=?";
			$outcome = $this->db->execute($sql,array($uID));


			return $outcome;


		}


public function update($data){


			$first_name = $this->db->qstr($data['first_name']);
			$last_name = $this->db->qstr($data['last_name']);
			$email = $this->db->qstr($data['email']);
			$uID = $this->db->qstr($data['uID']);


			if(isset($data['password'])){
				$password = $this->db->qstr($data['password']);
			}


			if(isset($data['password'])){
				$sql = "UPDATE users SET first_name = $first_name,last_name = $last_name,email = $email,password = $password WHERE uID = $uID";
			}
			else{
				$sql = "UPDATE users SET first_name = $first_name,last_name = $last_name,email = $email WHERE uID = $uID";
			}




			if($this->db->execute($sql)){
				$message = "Your data has been saved! Thanks for updating!";


			}
			else{
				$message = "Oops, something went wrong. Try again!";


			}


			return $message;
		}




		}



<?php
class Users extends Model {

	public $uID;
    public $first_name;
    public $last_name;
    public $email;
    protected $user_type;
	
	// Constructor
	public function __construct(){
		parent::__construct();

        if(isset($_SESSION['uID'])) {

            $userInfo = $this->getUserFromID($_SESSION['uID']);

            $this->uID = $userInfo['uID'];
            $this->first_name = $userInfo['first_name'];
            $this->last_name = $userInfo['last_name'];
            $this->email = $userInfo['email'];
            $this->user_type = $userInfo['user_type'];

        }

    }
	
	public function getUser($uID){
		$sql = 'SELECT uID, first_name, last_name, email, password FROM users WHERE uID = ?';
		
		// perform query
		$results = $this->db->getrow($sql, array($uID));
		$user = $results;
		return $user;
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
	
	public function addUser($data){
		$sql = 'INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)'; 
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;
	}

	public function getUserFromEmail($email) {

        $sql = 'SELECT * FROM users WHERE email = ?';

        $results = $this->db->getrow($sql, array($email));


        $user = $results;

        return $user;

    }

    public function getUserFromID($uID) {

        $sql = 'SELECT * FROM users WHERE uID = ?';
        $results = $this->db->getrow($sql, array($uID));

        $user = $results;

        return $user;

    }

    public function checkUser($email, $password) {

        $sql = "SELECT email, password FROM users WHERE email = ?";

        $results = $this->db->getrow($sql, array($email));

        $user = $results;

        $password_db = $user[1];

        //if password matches, return true to the logincontroller
        if(password_verify($password, $password_db)) {
            
            return true;
        }
        else {
            
            return false;
        }

    }

    public function getUserName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getUserEmail () {
        return $this->email;
    }

    public function isRegistered() {
        if(isset($this->user_type)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function isAdmin() {
           if($this->user_type == '1') {
               return true;
           }
            else {
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

        public function deleteUser($uID){
            $sql = "DELETE FROM users WHERE uID = ?";
            $outcome = $this->db->execute($sql,array($uID));

            return $outcome;
        }


        public function approveUser($uID){

            $sql="UPDATE users SET active=1 WHERE uID=?";
            $outcome = $this->db->execute($sql,array($uID));

            return $outcome;

        }

        public function showUsers(){
            $sql = "SELECT first_name, last_name, email, uID,active,user_type 
            from users";

            $results = $this->db->execute($sql);
            $row = $results->GetRows();
            $rowb = array();

            foreach($row as $person){
                 $person2 = array();
                foreach($person as $key=>$value){
                    if(!is_numeric($key)){
                        $person2[$key] = $value;

                    }
                }
                    $rowb[]=$person2;
            }
            return $rowb;
        }

        /*qstr($s,[$magic_quotes_enabled=false])

Quotes a string to be sent to the database. The $magic_quotes_enabled parameter may look funny, but the idea is if you are quoting a string extracted from a POST/GET variable, then pass get_magic_quotes_gpc() as the second parameter. This will ensure that the variable is not quoted twice, once by qstr and once by the magic_quotes_gpc.

Eg. $s = $db->qstr(HTTP_GET_VARS['name'],get_magic_quotes_gpc());

Returns the quoted string.*/

       public function updateUser($data) {
        $sql = 'UPDATE users 
                SET first_name = ?, last_name = ?, email = ? 
                where uID = ?';

        $this->db->execute($sql, $data);
        $message = "Profile Update Complete.";
        return $message;
    }



    
}
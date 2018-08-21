<?php

class MembersController extends Controller{
	
	public $userObject;

	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}
   
   	public function users($uID){
		$this->userObject = new Users();
		$user = $this->userObject->getUser($uID);    
	  	$this->set('user',$user);
   	}

   	public function profile(){
        $this->userObject = new Users();
		$user = $this->userObject->getUser($_SESSION['uID']);
		$this->set('user',$user);
		$this->set('task', 'updateProfile');
    }
        
    public function updateProfile(){
		$data = array('first_name' => $_POST['first_name'], 'last_name'=> $_POST['last_name'],'email'=>$_POST['email'],'uID'=>$_POST['uID']);
		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['passwordconfirm']);

		if(!empty($password) and !empty($confirmpassword)){
			if(trim($_POST['profile_password']) === trim($_POST['profile_confirmpassword']) ){
				//$data['password']= md5(sha1($_POST['profile_password']));
			}
		}
		        
        $this->userObject = new Users();		
        $this->userObject->updateUser($data);
        $this->set('message', 'Profile Updated');
		
		$_SESSION['message'] = "Profile Updated!";
		header('location:'.BASE_URL.'members/profile');

       
}

   	
	}

?>

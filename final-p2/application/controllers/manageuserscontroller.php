<?php
class ManageUsersController extends Controller{
	
	public $userObject;

    //access for admin (user_type 1) only
    protected $access = 1;
	
	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Manage Users');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
		$this->set('active',$active);
	}

    public function approve(){
        $data = array('uID'=>$_POST['uID']);
        $this->userObject = new Users();
        $result = $this->userObject->updateActive($data);
        $this->set('message', $result);
        $outcome = $this->userObject->getAllUsers();
        $this->set('users',$outcome);
//        $this->set('task', 'update');
    }
    public function delete(){
        $data = array('uID'=>$_POST['uID']);
        $this->userObject = new Users();
        $result = $this->userObject->deleteUser($data);
        $this->set('message', $result);
        $outcome = $this->userObject->getAllUsers();
        $this->set('users',$outcome);
//        $this->set('task', 'update');
    }

    public function add() {
        $this->userObject = new Users();
        $this->set('task', 'save');
    }

    public function save() {
        $this->userObject = new Users();
        $password = $_POST['post_password'];
        $passhash = password_hash($password,PASSWORD_DEFAULT);
        $data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'], 'password'=>$passhash);
        //$this->getCategories();
        $result = $this->userObject->addUser($data);
        $this->set('message', $result);
    }


}
?>
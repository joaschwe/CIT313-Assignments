<?php
class LoginController extends Controller{
	
	protected $userObject;
	
   //public function add($num1 = 0,$num2 = 0,$num3 = 0){
		//$sum = $num1+$num2+$num3;
	   //$this->set('numbers',$sum);
   //}
   
   public function do_login() {
	   //handle login
	   $this->userObject = new Users();
	   
	   if($this->userObject->checkUser( $_POST['email'], $_POST['password'] )) {
			$userInfo = $this->userObject->getUserFromEmail($_POST['email']);

			$_SESSION['uID'] = $userInfo['uID'];
			$_SESSION['last_name'] = $userInfo['last_name'];
			$_SESSION['first_name'] = $userInfo['first_name'];
			$_SESSION['user_type'] = $userInfo['user_type'];
			$_SESSION['password'] = $userInfo['password'];

			if( isset($_SESSION['redirect']) > 0 ) {
			    $view = $_SESSION['view'];
			    unset($_SESSION['redirect']);
			    header('Location: ' . BASE_URL.$view);
            } else {
                header('Location: ' . BASE_URL);
            }
			

	   } else  {
	   		echo '<br/>bad user<br/>';
	   		echo var_dump($_POST) . '<br/>';

	   }

	}

    public function logout() {
        //undo the session id
        unset($_SESSION['uID']);

        //close the session
        session_write_close();

        //send to the homepage
        header('Location: ' . BASE_URL);
    }
	
}
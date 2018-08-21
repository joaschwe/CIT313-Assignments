<?php
class LoginController extends Controller{

   protected $userObject;

   public function index() {
    
   }
   
   public function do_login() {


    
       //instantiate new users object
       $this->userObject = new Users();



       if($this->userObject->checkUser($_POST['email'], $_POST['password'])) {

           $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

           $_SESSION['uID'] = $userInfo['uID'];

          if($this->userObject->isActive($userInfo['uID'])){

                //$_SESSION['uID'] = $userInfo['uID'];

               if(strlen($_SESSION['redirect']) > 0 ) {
                  $view = $_SESSION['redirect'];
                  unset($_SESSION['redirect']);
                  header('Location: '.BASE_URL.$view);
              }
           else {
               header('Location: '.BASE_URL);
           }
        }
           else{
                $this->set('error', "Your account is still awaiting approval from an administrator");
              }

       }

       else {
            
            //if false is returned from checkUser method, display error message
           $this->set('error','Wrong password / email combination');
       }
     

   }





   public function logout() {

    //unset the session id
        unset($_SESSION['uID']);

    // close the session
        session_write_close();

        $this->set('message', 'you have successfully logged out.');

        header('Location: ' . BASE_URL);

    }

}

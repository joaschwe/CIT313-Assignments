 <?php

class AjaxController extends Controller{
	
    protected   $postObject, 
                $userObject, 
                $categoryObject;
        
        public function index() {
            $this->set("response", "Invalid Request");
        }
        
        public function get_post_content() {
            $this->postObject = new Post();
            $post = $this->postObject->getPost($_GET['pID']);
            $this->set('response', $post['content']);
        }

        public function deleteComment(){
            $data = $_POST['id'];
            $this->commentObject = new Comments;
            $this->commentObject->deleteComment($data);
        }

        public function getComments(){
            $data = $_POST['id'];
            $this->commentObject = new Comments;
            $comment=$this->commentObject->getComments($data);
            $this->set('response',$comment);
        }

        public function postComment(){

        $data = array(
            "uID"=>$_POST['userid'],
            "commentText"=>$_POST['data'],
            "postID"=>$_POST['postid']
            );
            $this->commentObject = new Comments;
            $this->commentObject->insertComment($data);
        }
}
?>

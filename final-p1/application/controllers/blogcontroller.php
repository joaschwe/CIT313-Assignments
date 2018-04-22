<?php
class BlogController extends Controller{
	
	public $postObject;
	public $commentObject;
  
   	public function post($pID){
		$this->postObject = new Post();
		$post = $this->postObject->getPost($pID);	    
	  	$this->set('post',$post);
   	}
	
	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}



	public function comment($postID) {
	    $this->commentObject = new Comment();
	    $comments = $this->commentObject->getPostComments($postID);
	    $this->set('comments', $comments);
}


    public function add(){
        $this->commentObject = new Comment();
//        $this->getCategories();
        $this->set('task', 'save');
    }

    public function save(){
        $this->commentObject = new Comment();
        $data = array( 'commentID'=>$_POST['commentID'], 'uID'=>$_POST['uID'], 'commentText'=>$_POST['commentText'], 'date'=>$_POST['date'], 'postID'=>$_POST['postID'] );

        $result = $this->commentObject->addComment($data);
        $this->set('message', $result);

    }

    public function remove() {
        $this->commentObject = new Comment();
        $data = array( 'commentID'=>$_POST['commentID'] );
        $result = $this->commentObject->deleteComment($data);
        $this->set('message', $result);
    }


}
?>

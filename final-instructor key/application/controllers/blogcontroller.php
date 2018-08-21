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

    public function deleteComments(){
           $commentObject = new Comments();
           
           $this->set('task', 'deleteComment');
       }
       
       public function deleteComment(){
           $this->commentObject = new Comments();
           $commentID = $_POST['commentID'];
           $result = $this->commentObject->delete($commentID);
           $this->set('message', $result);
       }

       public function category($categoryID){

        $this->postObject = new Post();
		$this->catObject = new Categories();
        $posts = $this->postObject->getCategoryPosts($categoryID);
		$cats = $this->catObject->getCategory($categoryID);
		

        $this->set('posts',$posts);
		$this->set('cats',$cats);
         //var_dump($posts);

  }
    
}

?>

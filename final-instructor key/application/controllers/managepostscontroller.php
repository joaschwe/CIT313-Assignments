<?php

class ManagePostsController extends Controller{
    
    public $postObject;

    protected $access = "1";
    
    public function index() {
        $this->postObject = new Post;
        $outcome = $this->postObject->getAllPosts();
        $this->set('posts',$outcome);
    }

    public function add(){
        $this->postObject = new Post();
        $this->getCategories();
        $this->set('task', 'save');
    }
    
    public function save(){
        $this->postObject = new Post();
        $data = array(
            
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'category'=>$_POST['category'],
            'date'=>$_POST['date']

            );
            
        $result = $this->postObject->addPost($data);
        $this->set('message', $result);
    }
    
    public function edit($pID){
        $this->postObject = new Post();
        $post = $this->postObject->getPost($pID);
        $this->getCategories();
            
        $this->set('pID', $post['pID']);
        $this->set('title', $post['title']);
        $this->set('content', $post['content']);
        $this->set('date', $post['date']);
        $this->set('category', $post['categoryID']);
        $this->set('task', 'update');
    }

    /*
    *post object
    *
    */
    public function delete($pID){
        //instantiate new post object
        $this->postObject = new Post();
        $postDeleted = $this->postObject->delete($pID);
        //if not deleted, error message
        if(!$postDeleted){
            $this->set('message', "Error deleting post.");
        }
        else{
        //if deleted, confirmation message
            $this->set('message', "Post Deleted.");
        }
        //if no error. return all the posts again
        $outcome = $this->postObject->getAllPosts();
        //set posts
        $this->set('posts',$outcome);

        var_dump($pID);
    }
    
    public function getCategories(){
        $this->postObject = new Categories();
        $categories = $this->postObject->getCategories();
        $this->set('categories',$categories);
    }
    
    public function update(){
        $data = array(
            'title'=>$_POST['title'],
            'content'=>$_POST['content'],
            'category'=>$_POST['category'],
            'date'=>$_POST['date'],
            'pID'=>$_POST['pID']
            );

        $this->postObject = new Post();
        
        $result = $this->postObject->updatePost($data);
        $outcome = $this->postObject->getAllPosts();
        $this->set('posts',$outcome);
        $this->set('message', $result);
        $this->getCategories();
        $this->set('task', 'update');
    }

    //try deleting post this way
   /* public function delete($pID) {
        $pID = $_GET['pID'];
        $this->postObject = new Post();
        $post = $this->postObject->delete($pID);
        $this->set('pID', $post);
    }*/

    


    
}
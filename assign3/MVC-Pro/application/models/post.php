<?php
class Post extends Model{
	
	function getPost($pID){

        //added categoryID, uID and date per Assign3
//		$sql =  'SELECT pID, title, content FROM posts WHERE pID = ?';
		$sql =  'SELECT pID, title, content, categoryID, uID, date FROM posts WHERE pID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($pID));
		
		$post = $results;
	
		return $post;
	
	}
		
	public function getAllPosts($limit = 0){
		
		if($limit > 0){
			
			$numposts = ' LIMIT '.$limit;
		}

		//added categoryID, uID and date per Assign3
//		$sql =  'SELECT pID, title, content FROM posts'.$numposts;
		$sql =  'SELECT pID, title, content, categoryID, uID, date FROM posts'.$numposts;

		// perform query
		$results = $this->db->execute($sql);
		
		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;
	
	}
	
	public function addPost($data){
		
		$sql='INSERT INTO posts (title,content,date,categoryID) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;
		
	}

	public function updatePost($data){

		$sql='UPDATE posts SET title=?,content=?,date=?,categoryID=? WHERE pID=?';
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;

	}

}
<?php
class Post extends Model{

    function getPost($pID){
        $sql = 'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryid = p.categoryid
		INNER JOIN users u on u.uid = p.uid
		WHERE p.pID = ?
		';
        $results = $this->db->getrow($sql, array($pID));

        $post = $results;

        return $post;

    }

    public function getUserPosts($uID){

        $sql = 'select * from posts where uID = ?';

        $results = $this->db->execute($sql, $uID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getCatPosts($cID){

        $sql = 'select * from posts where categoryID = ?';

        $results = $this->db->execute($sql, $cID);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;
    }

    public function getAllPosts($limit = 0){
        if($limit > 0){

            $numposts = ' LIMIT '.$limit;
        }

        $sql =  'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
		INNER JOIN categories c on c.categoryid = p.categoryid
		INNER JOIN users u on u.uid = p.uid'.$numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }

        return $posts;

    }

    public function addPost($data){

        $sql='INSERT INTO posts (title,content,category,date,uID) VALUES (?,?,?,?,1)';
        $this->db->execute($sql,$data);
        $message = 'Post added.';
        return $message;

    }

    public function updatePost($data) {

        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
        $this->db->execute($sql, $data);
        $message = "Post updated.";
        return $message;
    }

    
    /*public function delete($pID) {
        $sql = 'DELETE * 
                FROM posts 
                WHERE pID = ?';
                
        $this->db->execute($sql, $pID);
        $message = 'Post Deleted';
        return $message;
    }*/

    public function delete($pID){

        $sql = "DELETE FROM posts WHERE pID=?";
        $outcome =$this->db->execute($sql,array($pID));
        return $outcome;
    }

    public function getCategoryPosts($categoryID){
		$sql =  'SELECT posts.pID,posts.title,posts.date,posts.uID,posts.categoryID,posts.content,      users.first_name,users.last_name,categories.name 
                FROM posts
                INNER JOIN users ON
                posts.uID = users.uID
                INNER JOIN categories ON
                posts.categoryID = categories.categoryID
                WHERE categories.categoryID = ?';

        $results = $this->db->execute($sql,array($categoryID));

        while ($row=$results->fetchrow()) {
            $posts[] = $row;
        }
        //var_dump($posts);
        return $posts;
    }

}
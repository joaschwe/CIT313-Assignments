<?php
class Comment extends Model {
    
    function getComment($pID){
//        'SELECT com.commentID, com.uID, com.commentText, com.date, com.postID, cat.name as name, u.first_name, u.last_name
//        FROM comments com
//		INNER JOIN categories cat on cat.categoryid = com.categoryid
//		INNER JOIN users u on u.uID = com.uID
//		WHERE com.pID = ?
//		';
        $sql = 'SELECT com.commentID, com.uID, com.commentText, com.date, com.postID, u.first_name, u.last_name 
        FROM comments com
		
		INNER JOIN users u on u.uID = com.uID
		WHERE com.postID = ?';
        $results = $this->db->getrow($sql, array($pID));
        $comment = $results;
        return $comment;
    }
    
//    function getPost($pID){
//        $sql = 'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name 
//		FROM posts p
//		INNER JOIN categories c on c.categoryid = p.categoryid
//		INNER JOIN users u on u.uid = p.uid
//		WHERE p.pID = ?
//		';
//        $results = $this->db->getrow($sql, array($pID));
//        $post = $results;
//        return $post;
//    }
    public function getPostComments($postID){
        $sql = 'select * from comments where postID = ?';
        $results = $this->db->execute($sql, $postID);
        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }
        return $comments;
    }
//    public function getCatPosts($cID){
//        $sql = 'select * from posts where categoryID = ?';
//        $results = $this->db->execute($sql, $cID);
//        while ($row=$results->fetchrow()) {
//            $posts[] = $row;
//        }
//        return $posts;
//    }
//    public function getAllComments($limit = 0){
//        if($limit > 0){
//            $numposts = ' LIMIT '.$limit;
//        }
//        $sql =  'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name 
//		FROM posts p
//		INNER JOIN categories c on c.categoryid = p.categoryid
//		INNER JOIN users u on u.uid = p.uid'.$numposts;
//        // perform query
//        $results = $this->db->execute($sql);
//        while ($row=$results->fetchrow()) {
//            $posts[] = $row;
//        }
//        return $posts;
//    }
    public function addComment($data){
        $sql='INSERT INTO comments (commentID,uID,commentText,date,postID) VALUES (?,1,?,?,?)';
        $this->db->execute($sql,$data);
        $message = 'Comment added.';
        return $message;
    }

    public function deleteComment($data) {
        $sql = 'DELETE FROM comments WHERE commentID = ?';
        $this->db->execute($sql, $data);
        $message = 'Comment deleted.';
        return $message;
    }
}

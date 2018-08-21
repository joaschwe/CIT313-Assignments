<?php
    class Comments extends Model{

        public function getComments($pID){

            $row = array();
            $x = array();
            $y=array();

            //instantiate new Users for isAdmin method.
            $user = new Users;

            $sql = "SELECT comments.commentText, comments.date,comments.commentID, users.first_name, users.last_name 
                    FROM comments, users 
                    WHERE comments.postID = ? 
                    AND users.uID=comments.uID 
                    ORDER BY comments.date DESC";

            $results = $this->db->execute($sql,array($pID));

            while($row = $results->fetchrow()){

                $rows[] = $row;
                //var_dump($row);
            }

            if(isset($rows)){
                

                foreach($rows as $row){

                    foreach($row as $key=>$value){
                        
                        $x[$key]=$value;
                        
                    }

                    $y[]=$x;
                }


                foreach($y as $row){
                    $comment.= "<div class='well'>";
                    
                    if($user->isAdmin()){
                    //add button to close 


                    $comment .= "<button type='button' class='close moveleft'>Delete</button>";
                    }

                    $comment .= $row['commentText'];
                    $comment .= "<br>";
                    $comment .= $row['first_name']. " ".$row['last_name'];
                    $comment .= "<br>";
                    $comment .= $row['date'];
                    $comment .= "<br>";
                    $comment .= "<form action='#' method='POST'><input id='commentID' type='hidden' value='".$row['commentID']."'></form>";
                    //end comment div
                    $comment .= "</div>";

                    /*$comment .= "<div>";
                    $comment .= "<form action='<? echo BASE_URL;?>blog/post/deleteComment'>";
                    $comment .=  "<button id='' type='submit' class='btn btn-primary'>Delete</button>
                        </form>";
                    $comment .= "</div>";*/
                    

                }
                //var_dump($comment);
                return $comment;
                

            }


        }
        //still not working !!!!!!
        public function deleteComment($commentID){


        $sql = 'DELETE FROM comments WHERE commentID = '.$commentID;
		//trigger_error($sql, E_USER_ERROR);
        $this->db->execute($sql);
        $message = 'Comment Deleted';
        return $message;
    }

      
        public function insertComment($data){

            $sql="INSERT INTO comments (uID,commentText,`date`,postID) VALUES (?,?,now(),?)";
            $this->db->execute($sql,$data);

        }

 
    }


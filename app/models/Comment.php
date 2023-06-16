<?php
class Comment {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCommentsByPost($post_id, $user_id){
        $this->db->query('SELECT * FROM comments WHERE post_id = :post.id AND user_id = :user.id');
        $this->db->bind(':post.id', $post_id);
        $this->db->bind(':user.id', $user_id);

        $row = $this->db->resultSet();
        return $row;
    }

    public function addComment($data){
        $this->db->query('INSERT INTO comments(user_id, post_id, content) VALUES (:user_id, :post_id, :content)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':post_id', $data['post_id']);
        $this->db->bind(':content', $data['content']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}

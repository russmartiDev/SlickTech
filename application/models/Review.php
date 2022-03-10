<?php
class Review extends CI_Model
{
    function get_all_review($id)
    {   
        $review = array();
        $comment = $this->db->query("SELECT comments.id  AS id, comments.created_at AS date, comments.content, CONCAT(users.first_name, ' ', users.last_name) AS name FROM comments LEFT JOIN users ON users.id = comments.user_id WHERE comments.product_id = ? ORDER BY date DESC", array($id))->result_array();
        foreach($comment as $comment_row)
        {
            $replies = $this->db->query("SELECT CONCAT(users.first_name, ' ', users.last_name) AS name, replies.content, replies.created_at AS date FROM replies LEFT JOIN users ON users.id = replies.user_id WHERE  replies.comment_id =?", array($comment_row["id"]))->result_array();
            $review[] = array("comment"=>$comment_row, "replies" => $replies) ;
            
        }
        return $review;
    }

    function get_reply($id)
    {
        $query ="SELECT CONCAT(users.first_name, ' ', users.last_name) AS name, replies.content, replies.created_at AS date FROM replies LEFT JOIN users ON users.id = replies.user_id WHERE  replies.comment_id =?";
        return $this->db->query( $query , array($id))->result_array();
    }
    
    function add_comment($comment)
    {
        $query ="INSERT INTO `Comments` (`product_id`, `user_id`, `content`, `created_at`, `updated_at`)
        VALUES (?, ?, ?, NOW(), NOW())";
        $values = array($comment["product_id"], $comment["user_id"],$comment["content"]);

        return $this->db->query($query, $values);
    }

    function add_reply($reply)
    {
        $query ="INSERT INTO `replies` (`user_id`, `content`, `comment_id`, `created_at`, `updated_at`)
        VALUES (?, ?, ?, NOW(), NOW())";
        $values = array($reply["user_id"], $reply["content"], $reply["comment_id"]);

        return $this->db->query($query, $values);
    }

    function comment_validation()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_id", "user id", "trim|required");
        $this->form_validation->set_rules("product_id", "product id", "trim|required");
        $this->form_validation->set_rules("content", "content", "trim|required");

        if($this->form_validation->run() === FALSE)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

    function reply_validation()
    {
        $this->load->library("form_validation");

        $this->form_validation->set_rules("user_id", "user id", "trim|required");
        $this->form_validation->set_rules("comment_id", "product id", "trim|required");
        $this->form_validation->set_rules("content", "content", "trim|required");

        if($this->form_validation->run() === FALSE)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}
?>
<?php

require_once('../DataAccess/CommentDAO.php');

class CommentBusiness{

    protected $CommentDao;

    function __construct($con){
        $this->CommentDao = new CommentDAO($con);
    }

    public function getComments(){
        $comments = $this->CommentDao->getAll(); 

        return $comments;
    }

    public function getComment($id){
        $comment = $this->CommentDao->getOne($id); 

        return $comment;
    }
    public function saveComment($datos){
        $this->CommentDao->save($datos);
    }
    
}
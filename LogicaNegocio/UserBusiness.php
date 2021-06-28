<?php

require_once('../DataAccess/UserDAO.php');

class UserBusiness{

    protected $UserDAO;

    function __construct($con){
        $this->UserDAO = new UserDAO($con);
    }

    public function getUsers(){
        $users = $this->UserDAO->getAll(); 

        return $users;
    }

    public function getUser($id){
        $users = $this->UserDAO->getOne($id); 

        return $users;
    }
    public function saveUser($datos){
        $datos['password'] = password_hash($datos['password'],PASSWORD_DEFAULT);
        $this->UserDAO->save($datos);
       
    }
    
    public function modifyUser($id,$datos){
        if(!empty($datos['password'])){
            $datos['password'] = password_hash($datos['password'],PASSWORD_DEFAULT);
        }
        $this->UserDAO->modify($id,$datos);
    }

    public function deleteUser($id){ 
        $this->UserDAO->delete($id);
    }

}
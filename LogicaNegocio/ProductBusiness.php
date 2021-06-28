<?php

require_once('../DataAccess/ProductDAO.php');

class ProductBusiness{

    protected $ProductDAO;

    function __construct($con){
        $this->ProductDAO = new ProductDAO($con);
    }

    public function getProducts(){
        $products = $this->ProductDAO->getAll(); 

        return $products;
    }

    public function getProduct($id){
        $product = $this->ProductDAO->getOne($id); 

        return $product;
    }
    // public function saveUser($datos){
    //     $datos['password'] = password_hash($datos['password'],PASSWORD_DEFAULT);
    //     $this->UserDAO->save($datos);
       
    // }
    
    // public function modifyUser($id,$datos){
    //     if(!empty($datos['password'])){
    //         $datos['password'] = password_hash($datos['password'],PASSWORD_DEFAULT);
    //     }
    //     $this->UserDAO->modify($id,$datos);
    // }

    // public function deleteUser($id){ 
    //     $this->UserDAO->delete($id);
    // }

}
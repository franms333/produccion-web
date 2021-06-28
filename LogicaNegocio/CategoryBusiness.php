<?php

require_once('../DataAccess/CategoryDAO.php');

class CategoryBusiness{

    protected $CategoryDAO;

    function __construct($con){
        $this->CategoryDAO = new CategoryDAO($con);
    }

    public function getCategories(){
        $categories = $this->CategoryDAO->getAll(); 

        return $categories;
    }

    public function getCategory($id){
        $category = $this->CategoryDAO->getOne($id); 

        return $category;
    }
}
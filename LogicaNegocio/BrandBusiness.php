<?php

require_once('../DataAccess/BrandDAO.php');

class BrandBusiness{

    protected $BrandDAO;

    function __construct($con){
        $this->BrandDAO = new BrandDAO($con);
    }

    public function getBrands(){
        $brands = $this->BrandDAO->getAll(); 

        return $brands;
    }

    public function getBrand($id){
        $brand = $this->BrandDAO->getOne($id); 

        return $brand;
    }
}
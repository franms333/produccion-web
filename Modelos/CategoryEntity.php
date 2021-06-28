<?php

require_once ('BaseEntity.php');

class CategoryEntity extends BaseEntity
{
    private $category_id;
    private $name;

    public function __construct()
    {
        parent::__construct();

    }
    /**
     * Defino los Getters
     * 
     */
     
    public function getNombre()
    {
        return $this->name;
    }
    public function getCategoryID()
    {
        return $this->category_id;
    }
   
    /**
     * Defino los Setters
     * 
     */
    
    public function setNombre($name)
    {
        $this->name = $name;
    }
    public function setCategoryID($category_id)
    {
        $this->category_id = $category_id;
    }
}

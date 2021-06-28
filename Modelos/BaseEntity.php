<?php

class BaseEntity
{
    protected $id;
    protected $fechaCreacion;
    protected $fechaModificacion;

    public function __construct()
    {
    }
    /**
     * Defino los Getters
     *
     */
    public function getId()
    {
        return $this->id;
    }
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }
    public function getFechaModificacion()
    {
        return $this->fechaModificacion;
    }
  
    
    /**
     * Defino los Setters
     *
     */
    public function setId($id, $field = null)
    {
        $this->{$field} = $id;
    }

    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    }
    
    public function setFechaModificacion($fechaModificacion)
    {
        $this->fechaModificacion = $fechaModificacion;
    }
}

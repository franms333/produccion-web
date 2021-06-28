<?php

require_once __DIR__.'/DAO.php';
// require_once('PerfilDAO.php');
require_once __DIR__.'/../Modelos/UserEntity.php';

class UserDAO extends DAO
{
    protected $perfilDAO;

    public function __construct($con)
    {
        parent::__construct($con);
        $this->table = 'users';
        // $this->perfilDAO = new PerfilDAO($con);
    }

    public function getOne($id)
    {
        $sql = "SELECT user_id, first_name, last_name, email, password FROM users WHERE id = $id";
        $resultado = $this->con->query($sql, PDO::FETCH_CLASS, 'UserEntity')->fetch();
        return $resultado;
    }

    public function getAll($where = array())
    {
        $sql = "SELECT user_id, first_name, last_name, email, password FROM $this->table";
        $resultado = $this->con->query($sql, PDO::FETCH_CLASS, 'UserEntity')->fetchAll();
        // foreach($resultado as $index=>$user){
        //     $resultado[$index]->setPerfiles($this->perfilDAO->getAllByUser($user->getId()));
        // }
        return $resultado;
    }

    public function save($datos = array())
    {
        $perfiles = $datos['perfiles'];
        unset($datos['perfiles']);
        
        $save = parent::save($datos);
        $id = $this->con->lastInsertId();

        // $sql = '';
        // foreach($perfiles as $perfil){
        //     $sql .= 'INSERT INTO user_perfil VALUES('.$id.','.$perfil.');';
        // }
        // $this->con->exec($sql);

        return $save;
    }

    public function modify($id, $datos = array(), ?string $id_field = null)
    {
        $perfiles = $datos['perfiles'];
        unset($datos['perfiles']);
        $modify = parent::modify($id, $datos);

        // $sql = 'DELETE FROM user_perfil WHERE user = '.$id;
        // foreach($perfiles as $perfil){
        //     $sql .= 'INSERT INTO user_perfil VALUES('.$id.','.$perfil.');';
        // }
        // $this->con->exec($sql);

        return $modify;
    }
}

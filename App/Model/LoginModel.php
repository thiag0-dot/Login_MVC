<?php 

namespace APP\Model;

use APP\DAO\LoginDAO;

class LoginModel extends Model
{
    public $id, $nome, $email, $senha;

    public function autenticar()
    {
        $dao = new LoginDAO();

        $dados_usuario_logado = $dao->selectByEmailAndSenha($this->email, $this->senha);

        if(is_object($dados_usuario_logado))
            return $dados_usuario_logado;
        else
            null;
    }   

    public function save()
    {
        include 'DAO/LoginDAO.php';
        $dao = new LoginDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }else
        {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/LoginDAO.php';

        $dao = new LoginDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        include 'DAO/LoginDAO.php';

        $dao = new LoginDAO();

        $obj = $dao->selectById($id);

        return($obj) ? $obj : new LoginDAO();
    }

    public function delete(int $id)
    {
        include 'DAO/LoginDAO.php';

        $dao = new LoginDAO();

        $dao->delete($id);
    }

}
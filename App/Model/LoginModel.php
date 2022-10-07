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
}
<?php 
require_once 'arquivoLog.php';
class conexao extends arquivoLog {
    private $server, $user, $password, $conexao, $erro;

    public function __construct($server="mysql:host=localhost;dbname=cadastro", $user="sistemaTeste", $password="@teste2018Cep"){
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;

        $this->set_conexao();
    }

    private function set_conexao(){
        try{
            if(is_null($this->conexao)):
            $this->conexao = new PDO($this->server, $this->user, $this->password);
           
            endif;
        }catch(PDOException $e){
            $this->erro = '<center><h4>Falha com a conexão, informe ao suporte!</h4></center>';
            parent::criarLog('log/',0700,'log_con.txt', 'a', $e);
        }
    }

    public function getConexao(){
        return $this->conexao;
    }

    public function msgUsuario(){
        return $this->erro;
    }

}


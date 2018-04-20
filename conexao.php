<?php
require_once 'arquivoLog.php';
class conexao extends arquivoLog{
private $dsn, $user , $password,
        $conexao, $error_con;

    public function __construct($dsn, $user,$password){

        $this->dsn = $dsn;
        $this->user = $user;
        $this->$password = $password;

        $this->set_con();
        
    }

    private function set_con(){
        try{
                $this->conexao = new PDO($this->dsn,$this->user,$this->password);
        
    }catch(PDOException $e){
        $this->error_con = '<center><h4>Falha com a conexão, informe ao suporte!</h4></center>';
        parent::criarLog('log/',0700,'log_con.txt', 'a', $e->getMessage().PHP_EOL.
                                                            'OCORREU NA LINHA: '.$e->getLine());
        }
    }

    public function getConnexao(){
        return $this->conexao;
    }

    public function msgUsuario(){
        return $this->error_con;
    }
}


<?php
require_once 'conexao.php';
class confirm extends conexao{

    private $query, $run;

    public function __construct(){
        parent::__construct();
        
    }

    private function set_start($s){

        if (is_object(parent::getConexao())):
            $this->query = parent::getConexao()->prepare($s);
            
        else:
            die(parent::msgUsuario());
        endif;
    }

    private function do_run(){
        $this->query->execute($this->run);
    }
    public function run($r = []){
        $this->run = $r;
        $this->do_run();
        return $this->query;
    }

    public final function insert($tabela,$valores){
        $this->set_start("INSERT INTO ".$tabela." SET ".$valores."");
        return $this;
    }

    public final function select($filtro, $tabela, $condicao = ''){
        $this->set_start("SELECT ".$filtro." FROM ".$tabela." ".$condicao."");
        return $this;
    }
}
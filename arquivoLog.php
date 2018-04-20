<?php 
abstract class arquivoLog{

    private $arquivo;

    private function c_dir($pathnome,$permissao){
        if (!is_dir($pathnome)):
            mkdir($pathnome,$permissao);
        endif;
    }

    protected function criarLog($pathnome,$permissao,$arquivonome,$mode,$string){
        $this->c_dir($pathnome,$permissao);

        $this->arquivo = fopen($pathnome.$arquivonome,$mode);
        fwrite($this->arquivo, date("d/m/Y").PHP_EOL.
                                    $string.PHP_EOL.PHP_EOL);

        fclose($this->arquivo);

    }

}
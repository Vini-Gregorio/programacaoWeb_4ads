<?php
define('HOST','localhost');
define('DATABASENAME','empresa');
define('USER','root');
define('PASSWORD','');

class Conexao {
protected $con;

function __construct(){
  $this->conDB();
}

function conDB()
{
    try{
        $this->con = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    catch (PDOException $e)
    {
        echo "Deu ruim a conexao: ".$e->getMessage();
        die();
    }
    
}

function getConexao(){
    return $this->con;
}

}
?>
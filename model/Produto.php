<?php

require_once "../configuration/conexao.php";

class Produto {
    public $codigo;
    public $produto;
    public $data_validade;
    public $preco;

    public function __construct($codigo, $produto, $data_validade, $preco) {
        $this->codigo = $codigo;
        $this->produto = $produto;
        $this->data_validade = $data_validade;
        $this->preco = $preco;
    }

    public function salvar() {
       $conexao = new Conexao();
        $conn = $conexao->getConexao();
        $sql = "INSERT INTO produtos (codigo, produto, data_validade, preco) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$this->codigo, $this->produto, $this->data_validade, $this->preco]);
    }

    public static function listarTodos() {
        $conexao = new Conexao();
        $conn = $conexao->getConexao();
        $sql = "SELECT * FROM produtos";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>


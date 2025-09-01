<?php
require_once  "../model/Produto.php";

class ProdutoController {
    public function cadastrar($dados) {
        $produto = new Produto($dados['codigo'], $dados['produto'], $dados['data_validade'], $dados['preco']);
        if ($produto->salvar()) {
            header("Location: ../index.php?msg=Produto cadastrado com sucesso!");
            exit;
        } else {
            echo "Erro ao cadastrar produto.";
        }
    }

    public function consultar() {
        return Produto::listarTodos();
    }
}
?>

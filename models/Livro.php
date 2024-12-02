<?php

class Livro{

    public $id;
    public $titulo;
    public $autor;
    public $ano_de_lancamento;
    public $descricao;
    public $usuario_id;
    public $nome;
    public $email;
    public $senha;
    public $livro_id;
    public $avaliacao;
    public $avalicao;
    public $nota;
    public $imagem;

    public static function make ($item){
        $livro = new self();
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->descricao = $item['descricao'];

        return $livro;
    }


}
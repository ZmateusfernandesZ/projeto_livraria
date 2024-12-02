<?php

require 'validacao.php';

// recebe o form de email e senha
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'email' => ['required', 'email'],
        'senha' => ['required']
    ], $_POST);

    if($validacao->naoPassou('login')){
        header('location: /login');
        exit();
    }    
    //pega usuario só com e-mail
    $usuario = $database->query(
        query:" select * from usuarios where email = :email",
        class: Usuario::class, 
        params: compact('email'))->fetch();

    

    if($usuario){
        //pega a senha do banco e verifica com a que ele esta mandando
        $senhaDoPost = $_POST['senha'];
        $senhaDoBanco = $usuario->senha;

        if (! password_verify($senhaDoPost, $senhaDoBanco)){
            
            flash()->push('validacoes_login', ['Usuário ou senha incorretos! 😓']);
            header('location: /login');
            exit();


        }
        //se não passou ele trava e não cria uma sessão nova 

        $_SESSION['auth'] = $usuario;

        
        flash()->push('mensagem', 'Seja bem vindo '.$usuario->nome . '!');
        header('location: /');
        exit();

    }

}

//faz consulta no DB, se existir, adiciona na sessão do user autenticado.




//mudar a info da nav bar para mostrar o user

view ('login');
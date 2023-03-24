<?php
    include 'conexao.php';

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagemInput"];

        $sql = $pdo->prepare("INSERT INTO suporte(nome,email,telefone,mensagem) values('$nome','$email','$telefone','$mensagem')");
        $sql->execute();
        
        header('Location: index.php');
        exit;
     
?>
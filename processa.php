<?php

    /*
    # Exemplo de programa que pode usar o metodo GET ou POST
    */

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fixo = $_POST["fixo"];
    $celular = $_POST["celular"];
    $mensagem = $_POST["mensagem"];
    $sexo = $_POST["sexo"];
    //$estilo = $_POST["estilo"];


    echo "Bem-vindo, ".$nome;
    echo "</br>";
    echo "Seu email é ".$email;    
    echo "</br>";
    echo "Seu telefone fixo é ".$fixo;
    echo "</br>";
    echo "Seu telefone celular é ".$celular;
    echo "</br>";
    echo "Sua mensagem é ".$mensagem;
    echo "</br>";
    echo "Seu sexo é ".$sexo;
    echo "</br>";
    // echo "Seus estilo(s): ".$estilo;
    ///*
    echo "Seus estilo(s): ";
    foreach ($_POST["estilo"] as $item ){
        echo $item;
    }
    //*/

?>
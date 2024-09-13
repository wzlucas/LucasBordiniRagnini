<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //recebe os dados do formulario


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    if (empty($nome) | empty($email)) {

        echo "Todos os campos são obrigatórios!";
    }else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        echo "Formato de email inválido!";
    } else {

        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email);

        header("Location: obrigado.php");
        exit();
    }
}
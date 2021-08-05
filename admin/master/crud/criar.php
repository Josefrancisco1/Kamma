<?php
session_start();
include_once '../../../db.php'; 
//conexao.php somente faz a conexão com banco de dados, define as credenciais e atrubi a variável $conn
//$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
 
//$btn = filter_input(INPUT_POST, 'pedido', FILTER_SANITIZE_STRING);
 
if(isset($_POST['CadUsuario'])){
    //Recebe os dados do form
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $contacto = filter_input(INPUT_POST, 'contacto', FILTER_SANITIZE_NUMBER_INT);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
   

 
    //Insere os dados no banco
    $inserir = "INSERT INTO user_details (nome, email, contacto, senha) VALUES (:nome, :email, :contacto, :senha)";
 
    $insert_data = $db->prepare($inserir);
    $insert_data->bindParam(':nome', $nome);
    $insert_data->bindParam(':email', $email);
    $insert_data->bindParam(':contacto', $contacto);
    $insert_data->bindParam(':senha', $senha);

    if($insert_data->execute()){
        $_SESSION['msg'] = "<p style='color:tomato;'>Enviado com sucesso</p>";
        header("Location:../gerir_utilizador.php"); 
    }else{
        $_SESSION['msg'] = "<p style='color:tomato;background:#fff;'>Não foi possível enviar suas informações, verifique e tente novamente.</p>";
        header("Location:../gerir_utilizador.php"); //Se não apresenta o erro
    }
}else{
    $_SESSION['msg'] = "<p style='color:tomato;'>Não foi possível enviar suas informações, verifique e tente novamente.</p>";
    header("Location:../gerir_utilizador.php"); 
}
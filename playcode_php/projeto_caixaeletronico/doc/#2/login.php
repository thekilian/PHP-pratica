<?php
session_start();
require "config.php";

if(isset($_POST['agencia']) && !empty($_POST['agencia'])) {
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);

    // conexão com DB para verificar os dados:
    $sql = $pdo->prepare("SELECT * from contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    // verificar se houve retorno na consulta
    if($sql->rowCount() > 0) { // se rowCount for maior que zero, significa que dados foram encontrados
        $sql = $sql->fetch(); // pegar dados

        // adicionar à sessão 'banco' (recebe o id daquela conta) e sustitui a sessão:
        $_SESSION['banco'] = $sql['id'];

        //redirecionar para index e parar execução
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Caixa Eletrônico</title>
</head>
<body>
    <form method="POST">
        Agência:<br/>
        <input type="text" name="agencia"/><br/><br/>

        Conta:<br/>
        <input type="text" name="conta"/><br/><br/>

        Senha:<br/>
        <input type="password" name="senha"/><br/><br/>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
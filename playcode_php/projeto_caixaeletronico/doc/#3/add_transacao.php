<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Caixa Eletrônico</title>
</head>
<body>
    <form method="POST">
        Tipo de transação:<br/>
        <select name="tipo">
            <option value="0">Depósito</option>
            <option value="1">Retirada</option>
        </select><br><br>

        valor:<br>
        <input type="text" name="valor" pattern="[0-9.,]{1,}"><br><br> <!-- expressão regular -->
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>
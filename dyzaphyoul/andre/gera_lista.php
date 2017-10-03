<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Presença</title>
</head>
<body>
<h1>Lista de Presença</h1>

<table border=1>
<th>Código Aluno</th>
<th>Nome</th>
<th>Assinatura</th>

<?php

for($i = 1; $i <= 30; $i++){
    echo '<tr>';

    echo "<td> {$i})". str_repeat('_', 15) . '</td>';
    echo "<td>". str_repeat('_', 50) . '</td>';
    echo "<td>". str_repeat('_', 30) . '</td>';
        
    echo '</tr>';
}



?>
</table>
    
</body>
</html>
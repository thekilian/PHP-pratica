<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dyzaphyoul</title>
    <style>
        body {
            font-family: Helvetica;
        }
        table {
            width: 95%;
            border: 1px solid #000;;
        }
    </style>
</head>
<body>
    
    <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Cód Aluno</th>
            <th>Nome</th>
            <th>Assinatura</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $user_data = array(
            0 => 0,
            1 => 12345,
            2 => "Alunin",
            3 => "__________"
        );
        
        foreach($user_data as $valor) {
            echo "<tr>";
            echo "<td>".$user_data[0]."</td>";
            echo "<td>".$user_data[1]."</td>";
            echo "<td>".$user_data[2]."</td>";
            echo "<td>".$user_data[3]."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
    </table>

</body>
</html>
<table border="1">
    <?php

    $array = [
        'nome' => 'Henrique',
        'idade' => 90,
        'empresa' => 'MarteLab',
        'cor' => 'Azul',
        'profissao' => 'Dev'
    ];

    foreach ($array as $chave => $value) {

        echo "<tr>";
        echo "<th>$chave</th>";
        echo "<td>$value</td>";
        echo "</tr>";
    }

    ?>

</table>
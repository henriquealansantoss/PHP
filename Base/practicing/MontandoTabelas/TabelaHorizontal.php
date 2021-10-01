<table border="1">
    <?php

    $array = [
        'nome' => 'Henrique',
        'idade' => 90,
        'empresa' => 'MarteLab',
        'cor' => 'Azul',
        'profissao' => 'Dev'
    ];

    echo "<tr>";
    $chaves = array_keys($array);
    foreach ($chaves as $chave) {
        echo "<th>" . $chave . "</th>";
    }
    echo "</tr>";
    echo "<tr>";
    $values = array_values($array);
    foreach ($values as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";

 <?php
echo "--------- condicional if ----------" . "<br>";
    $idade = 14;
    if ($idade < 18) {
        echo "Menor de idade.";
    } else {
        echo "Maior de idade.";
    };

    echo "--------- Ternario ----------" . "<br>";
    echo ($idade < 18) ? "<br>" . "Menor de idade." : "<br>" . "Maior de idade.";

    echo "--------- NULL CAO ----------" . "<br>";
    $nome = "Henrique";

    echo "--------- forma antiga com isset e ternario. ----------" . "<br>";
    //forma antiga com isset e ternario.
    $nomeCompleto = "<br>" . $nome;
    $nomeCompleto .= isset($sobrenome) ? $sobrenome : ""; // se por acaso não existir set o espaço em branco
    echo $nomeCompleto;

    echo "--------- forma atual NULL CAO = ?? forma mais simples de fazer ----------" . "<br>";
    // forma atual NULL CAO = ?? forma mais simples de fazer
    echo $nomeCompleto .= $sobrenome ?? " ";

    echo "<br>";


    echo "--------- condicional switch ----------" . "<br>";
    // condicional switch

    $media = 'video';

    switch ($media) {
        case 'video':
            echo 'Video ok';
            break;
        case 'foto':
            echo 'Foto ok';
            break;
        default:
            echo 'Sem valor';
            break;
    }

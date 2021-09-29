<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./layout/style.css">
    <title>Cadastro de nomes</title>
</head>

<body>
    <?php
    session_start();
    require_once('./template/header.php');
    ?>

    <form action="receb.php" method="POST">
        <label>
            Novo nome: <br>
            <input type="text" name="nome" id="nome" required />
        </label>
        <input type="submit" value="Adicionar" />
        <br>
        <h3>Lista de nomes:</h3>
        <ul>
            <?php
            if (isset($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                $_SESSION['erro'] = '';
                if (file_exists('nomes.txt')) {
                    $nomestxt = file_get_contents('nomes.txt');
                    $arrayNomes = explode("\n", $nomestxt);

                    foreach ($arrayNomes as $id => $nome) {
                        echo "<li>" . ucwords($nome) . "</li>";
                    }
                }
            } else {
                if (file_exists('nomes.txt')) {
                    $nomestxt = file_get_contents('nomes.txt');
                    $arrayNomes = explode("\n", $nomestxt);

                    foreach ($arrayNomes as $id => $nome) {
                        echo "<li>" . ucwords($nome) . "</li>";
                    }
                }
            }

            ?>

        </ul>
    </form>

    <a href="excluir.php" class="button">Apagar Lista</a>
</body>

</html>
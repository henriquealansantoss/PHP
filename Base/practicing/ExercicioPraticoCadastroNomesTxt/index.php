<form action="receb.php" method="POST">
    <label>
        Novo Nome: <br>
        <input type="text" name="nome" id="nome" required />
    </label>
    <input type="submit" value="Adicionar" />
    <br>


    <h3>Lista de nomes:</h3>
    <ul>
        <?php
        if(file_exists('nomes.txt')){
            $nomestxt = file_get_contents('nomes.txt');
            $arrayNomes = explode("\n", $nomestxt);

         foreach ($arrayNomes as $nome) {
            echo "<li>".$nome."</li>";
            }
        }else{

        }
        
        ?>

    </ul>
</form>
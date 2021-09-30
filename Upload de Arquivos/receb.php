
<?php

echo '<pre>';
print_r($_FILES);

$typesPermission = array('image/jpeg', 'image/jpg', 'image/png');
if (in_array($_FILES['arquivo']['type'], $typesPermission)) {
    $nomeArquivo = md5(time() . rand(0, 1000)) . '.jpg'; //para mudar o nome dos arquivos no recebimento 
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nomeArquivo);
    echo 'Arquivo salvo com sucesso!';
} else {
    echo 'Tipo de arquivo não suportado!';
}

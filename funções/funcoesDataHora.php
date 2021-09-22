<?php

// date para retrnar a data - informar o padrão desejado
// normalmente o servidor pode retornar uma hora errada, pois está seguindo o horario de outra região.

echo date('d/m/Y H:i:s') . '<br>';
echo date("d");

echo '<br>' . '--------------' . '<br>';

// padrão internacional
$data = '2021/09/22';
$time=strtotime($data);
echo date('d/m/Y', $time);

echo '<br>' . '--------------' . '<br>';

// resumido
echo date('d/m/Y', strtotime($data));


// site php documentação com todas as funções e uso de datas
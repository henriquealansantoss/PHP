<?php

$data = '2020-09-21';
$time = strtotime($data); // milisecond
$dataNum = date('w', $time); // num dia
$dataformat = date('d/m/Y', $time); // dd/mm/YYYY

function Data($dataNum, $dataformat)
{
    if ($dataNum == 1) {
        echo "{$dataformat} - Segunda-feira";
    } elseif ($dataNum == 2) {
        echo "{$dataformat} - Terça-feira";
    } elseif ($dataNum == 3) {
        echo "{$dataformat} - Quarta-feira";
    } elseif ($dataNum == 4) {
        echo "{$dataformat} - Quinta-feira";
    } elseif ($dataNum == 5) {
        echo "{$dataformat} - Sexta-feira";
    } elseif ($dataNum == 6) {
        echo "{$dataformat} - Sabado";
    } elseif ($dataNum == 7) {
        echo "{$dataformat} - Domingo";
    };
};

Data($dataNum, $dataformat); 



// Outra forma de resolver o exercicio.


// //receber data em formato internacional e retornar padrão BR com dia da semana em português
// //27-10-2020 - Terça-Feira

// $date = '1986-04-29';

// $time = strtotime($date);

// $desiredDate =date('d-m-Y',$time);

// $week = array(
// 'Sun'=>'Domingo',
// 'Mon'=>'Segunda-Feira',
// 'Tue'=>'Terca-Feira',
// 'Wed'=>'Quarta-Feira',
// 'Thu'=>'Quinta-Feira',
// 'Fri'=>'Sexta-Feira',
// 'Sat'=>'Sábado'
// );

// echo "O dia da semana referente a data: {$desiredDate} é {$week[date('D', $time)]}";
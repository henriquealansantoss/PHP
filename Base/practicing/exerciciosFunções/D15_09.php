
<?php

//arrow function
$func = fn ($param) => $param * 2;
echo $func(10);

echo "<br>" . "---------------" . "<br>";

// recursivas

function recurse($param, $m)
{
    $mult = $param * $m;
    echo $mult . "<br>";
    if ($mult < 1000) {
        recurse($mult, $m);
    }
};

recurse(20, 2);

echo "<br>" . "---------------" . "<br>";


// 
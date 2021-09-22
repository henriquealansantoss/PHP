<?php
$t = "-";
$tCompleto = "";


echo "--- minha forma ---"."<br>";
for ($i = 0; $i < 10; $i++) {
        $tCompleto .= $t;
};

for ($i = 0; $i < 10; $i++) {
    echo $tCompleto."<br>";
};
    

echo "--- forma encontrada ---"."<br>";

for ($i=0; $i < 10; $i++) { 

    for ($x = 0; $x < 10; $x++) {
        echo '-';
    };
    echo "<br>";
};



echo "--- praticando ---"."<br>";

$t= '-';
for ($i=0; $i < 10; $i++) { 

    for ($x=0; $x <10; $x++) { 
        echo $t;
    }
    echo "<br>";
}



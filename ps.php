<?php
require_once 'r.php';
require_once 'p.php';
require_once 's.php';


$la = [];
$lb = [];
$test = [];

function get_list($argv)
{
    global $la, $test;
    for ($i = 1; $i < count($argv); $i++) {
        if ($argv[$i] != "-faster" && $argv[$i] != "-swap") {
            array_push($la, intval($argv[$i]));
        }
    }
    $test = $la;
    /*$la = explode(",", $_POST['number']);*/
}

function swap()
{
    $itteration = [];
    $f = 1;
    global $la;
    for ($i = 0; $i < count($la) - 1; $i++) {
        if ($f == 0) {
            $i = 0;
            $f = 1;
        }
        $tmp_1 = $la[$i];
        $tmp_2 = $la[$i + 1];
        if ($tmp_1 > $tmp_2) {
            $nb = 0;
            while ($la[0] != $tmp_1) {
                ra();
                $nb++;
                array_push($itteration, 'ra');
            }
            sa();
            array_push($itteration, 'sa');
            for ($a = 0; $a < $nb; $a++) {
                rra();
                array_push($itteration, 'rra');
            }
            $f = 0;
        }
    }
    return $itteration;
}

function max_val()
{
    global $la, $lb;
    $itteration = [];
    while (!empty($la)) {
        pb();
        array_push($itteration, 'pb');
    }
    while (!empty($lb)) {
        $tmp = $lb[0];
        $index = 0;
        for ($i = 0; $i < count($lb); $i++) {
            if ($lb[$i] > $tmp) {
                $tmp = $lb[$i];
                $index = $i;
            }
        }
        if ($index < count($lb) / 2) {
            while ($lb[0] != $tmp) {
                rb();
                array_push($itteration, 'rb');
            }
        } else {
            while ($lb[0] != $tmp) {
                rrb();
                array_push($itteration, 'rrb');
            }
        }
        pa();
        array_push($itteration, 'pa');
    }
    return $itteration;
}


function final_list($tab)
{
    $nb = 0;
    foreach ($tab as $value) {
        if ($nb == count($tab) - 1) {
            echo $value;
        } else {
            echo $value . " ";
            $nb++;
        }
    }
    echo "\n";
}

/*get_list($argv);
if (end($argv) == '-swap') {
    $tab = swap();
    $algo = 'swap';
    if ($test != $la)
    {
        final_list($la);
        echo count($tab) . " itterations\n";
        echo "Algo : " . $algo . "\n";
    }
} elseif (end($argv) == '-faster') {
    $algo = 'max_val';
    $tab = max_val();
    if ($test != $la)
    {
        final_list($la);
        echo count($tab) . " itterations\n";
        echo "Algo : " . $algo . "\n";
    }
} else {
    $tab = max_val();
}
if ($test != $la)
{
    final_list($tab);
}
else{
    echo "\n";
}*/
$moyenne = 0;
for ($g=0; $g<100; $g++)
{
    for ($i=0;$i<100;$i++)
    {
        array_push($la, rand());
    }
    $tab = swap();
    $nb = count($tab);
    $moyenne += $nb;
    $la = [];
}
$moyenne = $moyenne/100;
echo $moyenne;
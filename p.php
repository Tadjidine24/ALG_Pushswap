<?php
// array_unshift — Empile un ou plusieurs éléments au début d'un tableau
// array_shift — Dépile un élément au début d'un tableau
function pa()
{
    global $la, $lb;
    if (!empty($lb)) {
        $element = array_shift($lb);
        array_unshift($la, $element);
    }
}

function pb()
{
    global $la, $lb;
    if (!empty($la)) {
        $element = array_shift($la);
        array_unshift($lb, $element);
    }
}

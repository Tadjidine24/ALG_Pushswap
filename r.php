<?php

function ra()
{
    global $la;
    $element = array_shift($la);
    array_push($la, $element);
}

function rb()
{
    global $lb;
    $element = array_shift($lb);
    array_push($lb, $element);
}

function rr()
{
    ra();
    rb();
}

function rra()
{
    global $la;
    $element = array_pop($la);
    array_unshift($la, $element);
}

function rrb()
{
    global $lb;
    $element = array_pop($lb);
    array_unshift($lb, $element);
}

function rrr()
{
    rra();
    rrb();
}
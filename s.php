<?php 
function sa()
{
    global $la;
    if (count($la) >= 2) {
        $tmp = $la[0];
        $la[0] = $la[1];
        $la[1] = $tmp;
    }
}

function sb()
{
    global $lb;
    if (count($lb) >= 2) {
        $tmp = $lb[0];
        $lb[0] = $lb[1];
        $lb[1] = $tmp;
    }
}

function sc()
{
    sa();
    sb();
}
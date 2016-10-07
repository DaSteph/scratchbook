<?php

class BFNumbers
{

    private $myData = array();

    public function __construct($str = '')
    {
        if (!empty($str)){
            $this->fromDecimalString($str);

        }
    }

    public function mul($int)
    {

    }

    public function bfAdd(BFNumbers $b)
    {

    }

    public function fromDecimalString($str)
    {

    }

    public function fromFactorialString($str)
    {

    }

    public function getAsDecimalString()
    {

    }

    public function getAsFactorialString()
    {

    }
}


function dec2FactString($nb)
{
    $maxBase = 0;
    while (fac($maxBase) < $nb) {
        $maxBase++;
    }
    $maxBase--; // we stepped over :O


    $res = '';

    for ($i = $maxBase; $i >= 0; $i--) {
        $fac = fac($i);
        $div = intdiv($nb, $fac);
        $nb = $nb % $fac;
        $res .= $div;
    }
    return $res;
}

function factString2Dec($str)
{
    $parts = str_split($str);
    $res = '0';
    $base = 0;
    while (!is_null($digit = array_pop($parts))) {
        $res = bcadd($res, bcmul($digit, fac($base)));
        $base++;
    }
    return $res;
}

function fac($nb)
{
    $res = '1';
    for ($i = 1; $i <= $nb; $i++) {
        $res = bcmul($res, $i);
    }
    return $res;
}

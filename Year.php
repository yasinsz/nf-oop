<?php

namespace NeueFische\Helper;

class Year
{
    function __construct()
    {
        $d = new \DateTime();
        echo 'Es ist ' . $d->format('Y');
    }
}
<?php

namespace NeueFische\Helper;

class Hour
{
    function __construct()
    {
        $d = new \DateTime();
        echo 'Es ist ' . $d->format('H') . ' Uhr';
    }
}
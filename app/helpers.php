<?php

function productImage($path)
{
    return $path && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('realphotos/not-found.png');
}

function presentPrice($price)
{
    return number_format($price / 100, 2);
}

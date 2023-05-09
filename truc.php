<?php

$a = "truc";

function foo(): void
{
    $a = "francis";
}

foo();

echo $a;

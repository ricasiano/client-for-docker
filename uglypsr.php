<?php
$a = 1;
if (1 === $a) {
    echo 2;
}

class A
{
    public function noVisibility(): int
    {
        return 1;
    }
}

$classA = new A();
$classA->noVisibility();





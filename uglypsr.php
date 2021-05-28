<?php
/**
 * @file
 * Description of what this module (or file) is doing.
 */
$a = 1;
if (1 === $a) {
    echo 2;
}

/**
 * Class A
 */
class A
{
    /**
     * @return int
     */
    public function noVisibility(): int
    {
        return 1;
    }
}

$classA = new A();
$classA->noVisibility();





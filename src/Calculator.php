<?php

namespace App;

/**
 * Simple class for our unit tests.
 */
class Calculator
{

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     */
    public function plus($a, $b)
    {
        return $a + $b;
    }

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == -1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 0
     */
    public function minus($a, $b)
    {
        return $a - $b;
    }

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 0
     * @assert (1, 0) == 0
     * @assert (1, 1) == 1
     * @assert (3, 2) == 6
     */
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    /**
     * @assert (0, 1) == 0
     * @assert (1, 1) == 1
     * @assert (6, 2) == 3
     */
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new InvalidArgumentException('Cannot divide by zero');
        }
        return $a / $b;
    }

    public function modulo($a, $b)
    {
        return $a % $b;
    }

}

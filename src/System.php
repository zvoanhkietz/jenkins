<?php

/**
 * 
 */

namespace App;

/**
 * All methods of system should be defined here
 */
trait System
{

    /**
     * Create new object
     * 
     * @param string $className
     * @param array $params
     * @return mixed
     */
    public function createObject(string $className, array $params = [])
    {
        return new $className(...$params);
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Show largest possible random value
     * 
     * @link http://php.net/manual/en/function.getrandmax.php
     * @return int The largest possible random value returned by <b>rand</b>
     */
    public function getrandmax()
    {
        return getrandmax();
    }

    /**
     * (PHP 4, PHP 5)<br/>
     * Generate a random integer
     * 
     * @link http://php.net/manual/en/function.rand.php
     * @param $min [optional]
     * @param $max [optional]
     * @return int A pseudo random value between <i>min</i>
     * (or 0) and <i>max</i> (or <b>getrandmax</b>, inclusive).
     */
    public function rand($min = 0, $max = null)
    {
        if ($max === null) {
            $max = $this->getrandmax();
        }
        return rand($min, $max);
    }

}

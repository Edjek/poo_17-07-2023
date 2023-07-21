<?php

class Mathematique
{
    /**
     * @param float $x
     * @param float $y
     *
     * @return float
     */
    public static function addition(float $x, float $y): float
    {
        return $x + $y;
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return float
     */
    public static function soustraction(float $x, float $y): float
    {
        return $x - $y;
    }
    /**
     * @param float $x
     * @param float $y
     *
     * @return float
     */
    public static function multiplication(float $x, float $y): float
    {
        return $x * $y;
    }

    /**
     * @param float $x
     * @param float $y
     *
     * @return float
     */
    public static function division(float $x, float $y): float|string
    {
        $res = self::isNull($y);
        if ($res == true) {
            return $x / $y;
        } else {
            return "Vous n'avez pas le droit de divisser par 0";
        }
    }

    /**
     * @param float $a
     *
     * @return bool
     */
    private static function isNull(float $a): bool
    {
        if ($a === 0) {
            return false;
        } else {
            return true;
        }
    }
}

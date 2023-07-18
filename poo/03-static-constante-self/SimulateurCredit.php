<?php

// Une méthode static est une méthode qui peut être appelée sans avoir besoin d'instancier la classe.

class SimulateurCredit
{
    // Une constante est une valeur qui ne peut pas être modifiée.
    // Une constante est statique.
    private const TAUX = 3.8;

    // creer un setter static qui permet d'initialiser le quotient
    private static float $quotient;

    public static function setQuotient(float $quotient): void
    {
        self::$quotient = $quotient;
    }

    private static function calculTaux($somme): float
    {
        return self::TAUX * $somme / self::$quotient;
    }

    // method static qui affiche "votre calcul de taux sera de : XXX"
    public static function displayCalculTaux($somme): string
    {
        return "Votre calcul de taux sera de :" . self::calculTaux($somme);
    }
}

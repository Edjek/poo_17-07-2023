<?php

/**
 * Une méthode static est une méthode qui peut être appelée sans avoir besoin d'instancier la classe.
 */
class SimulateurCredit
{
    /**
     * Une constante est une valeur qui ne peut pas être modifiée.
     * Une constante est statique.
     *
     * @var float
     */
    private const TAUX = 3.8;

    /**
     * creer un setter static qui permet d'initialiser le quotient
     *
     * @var float
     */
    private static float $quotient;

    /**
     * @param float $quotient
     *
     * @return void
     */
    public static function setQuotient(float $quotient): void
    {
        self::$quotient = $quotient;
    }

    /**
     * @param float $somme
     *
     * @return float
     */
    private static function calculTaux(float $somme): float
    {
        return self::TAUX * $somme / self::$quotient;
    }

    /**
     * method static qui affiche "votre calcul de taux sera de : XXX"
     *
     * @param float $somme
     *
     * @return string
     */
    public static function displayCalculTaux(float $somme): string
    {
        return "Votre calcul de taux sera de :" . self::calculTaux($somme);
    }
}

<?php

/**
 * Sparbuch
 * Stellt ein Sparbuch dar
 * @author Max Muster
 */
class Sparbuch
{
    // Eigenschaften
    public $glaeubiger = "";
    public $kontonummer = "";
    private $guthaben = 0.0;
    public $waehrung = "€";

    /**
     * __construct
     * Ermöglicht die Zuweisung aller Attribute
     *
     * @param  mixed $glaeubiger
     * @param  mixed $kontonummer
     * @param  mixed $startguthaben
     * @param  mixed $waehrung Mögliche Werte €, $ oder Euro, Dollar, Pfund, Yen
     * @return void
     */
    public function __construct(string $glaeubiger = "", string $kontonummer = "", float $startguthaben = 0.0, string $waehrung = "€")
    {
        $this->glaeubiger = $glaeubiger;
        $this->kontonummer = $kontonummer;
        $this->guthaben = $startguthaben;
        $this->waehrung = $waehrung;
    }

    /**
     * einzahlen
     *
     * @param  mixed $value
     * @return void
     */
    public function einzahlen(float $value)
    {
        if ($value > 0)
            $this->guthaben += $value;
    }

    /**
     * abheben Dient dem Abheben einer bestimmten Summe
     *
     * @param  mixed $value Der abzuhebende Wert darf nicht größer sein als das Guthaben
     * @return void
     */
    public function abheben(float $value)
    {
        if (($this->guthaben - $value) >= 0 and ($value > 0))
            $this->guthaben -= $value;
    }

    /**
     * getGuthaben
     *
     * @return float Das aktuelle Guthaben
     */
    public function getGuthaben(): float
    {
        return $this->guthaben;
    }


    /**
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        return $this->glaeubiger . ": " . $this->kontonummer . " Guthaben: " . $this->guthaben . " " . $this->waehrung;
    }
}

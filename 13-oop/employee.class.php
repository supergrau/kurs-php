<?php
require_once "./person.class.php";

class Employee extends Person
{
    private DateTime $hireddate;
    private DateTime $fireddate;
    private bool $fired = false;

    public function __construct(string $lastname = "n.", string $firstname = "n.", $birthdate = "1800-01-01", $hireddate = "1800-01-01")
    {
        parent::__construct($lastname, $firstname, $birthdate);
        // $this->lastname = $lastname;
        // $this->firstname = $firstname;
        // $this->birthdate = new DateTime($birthdate);
        $this->hireddate = new DateTime($hireddate);
        $this->fireddate = new DateTime("1800-01-01");
        $this->fired = false;
    }

    public function dismissed($fireddate = "1800-01-01")
    {
        $this->fireddate = new DateTime($fireddate);
        $this->fired = true;
    }

    public function __toString()
    {
        $msg = parent::__toString() . " hired: " .  $this->hireddate->format('l, d. F Y');
        if ($this->fired) $msg .= " fired: " . $this->fireddate->format('l, d. F Y');

        return $msg;
    }
}

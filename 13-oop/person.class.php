<?php

/**
 * Person
 */
class Person
{
    protected string $lastname = "";
    protected string $firstname = "";
    protected DateTime $birthdate;

    /**
     * __construct
     *
     * @param  mixed $lastname
     * @param  mixed $firstname
     * @param  mixed $birthdate
     * @return void
     */
    public function __construct(string $lastname = "n.", string $firstname = "n.", $birthdate = "1970-01-01")
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthdate = new DateTime($birthdate);
    }

    /**
     * __toString
     *
     * @return void
     */
    public function __toString()
    {
        return $this->lastname . ", " . $this->firstname . ": birthdate: " . $this->birthdate->format('l, d. F Y');
    }

    /**
     * getLastname
     *
     * @return void
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * getFirstname
     *
     * @return void
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * getBirthdate
     *
     * @return void
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * setLastname
     *
     * @param  mixed $lastname
     * @return void
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * setFirstname
     *
     * @param  mixed $firstname
     * @return void
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * setBirthdate
     *
     * @param  mixed $birthdate
     * @return void
     */
    public function setBirthdate(string $birthdate)
    {
        $this->birthdate = $birthdate;
    }
}

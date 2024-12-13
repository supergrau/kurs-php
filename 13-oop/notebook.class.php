<?php
require_once "./harddisk.class.php";

class Notebook
{
    private Harddisk $harddisk;

    public function __construct(Harddisk $harddisk)
    {
        if (!$harddisk->getInstalled()) {
            $this->harddisk = $harddisk;
            $this->harddisk->installation();
        } else {
            $this->harddisk = null;
        }
    }

    public function changeHarddisk(Harddisk $harddisk)
    {
        if (!$harddisk->getInstalled()) {
            $this->harddisk->expansion();
            $this->harddisk = $harddisk;
            $this->harddisk->installation();
        }
    }

    public function __toString()
    {
        $msg = "Notebook ";

        if (isset($this->harddisk))
            return $msg . "with " . $this->harddisk;
        else
            return $msg . "without " . $this->harddisk;
    }
}

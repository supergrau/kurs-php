<?php
class Harddisk
{
    private bool $installed = false;
    private string $serialnumber;
    public function __construct(string $serialnumber)
    {
        $this->serialnumber = $serialnumber;
    }

    public function installation()
    {
        $this->installed = true;
    }

    public function expansion()
    {
        $this->installed = false;
    }

    public function __toString()
    {
        $msg = "HD: " . $this->serialnumber;
        if ($this->installed)
            return $msg . ", installed";
        else
            return $msg . ", not installed";
    }

    public function getInstalled(): bool
    {
        return $this->installed;
    }
}

<?php

namespace App\Entity;

class Customer
{ 
    private $phone;

    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    public function fullName()
    {
        return "{$this->first_name} {$this->last_name}"; 
    }

    public function fullAddress()
    {
        return "{$this->address_1} {$this->address_2} {$this->town} {$this->postcode}"; 
    }

    public function formattedPhoneNumber()
    {   
        $pattern = "^[+]*|\d"; 
        $replace = " ^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$";
        $phone = $this->telephone;
        return preg_replace($pattern, $replace, $phone);
    }
    
}
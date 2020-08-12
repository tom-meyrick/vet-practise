<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "telephone",
        "email",
        "address_1",
        "address_2",
        "town",
        "postcode"
    ];

    public function fullName()
    {
        return "{$this->first_name} {$this->last_name}"; 
    }

    public function fullAddress()
    {
        return "{$this->address_1} {$this->address_2} {$this->town} {$this->postcode}"; 
    }

    public static function hasEmail()
    {
        $email = $this->email;
        $owners = Owner::all();
        foreach ($owners as $owner) {
           return $email === $owner->email; 
        }
    }

    public function formattedPhoneNumber()
    {   
        $pattern = "^[+]*|\d"; 
        $replace = " ^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$";
        $phone = $this->telephone;
        return preg_replace($pattern, $replace, $phone);
    }
    
}
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

    public function fullName() : string
    {
        return "{$this->first_name} {$this->last_name}"; 
    }

    public function fullAddress() : string
    {
        return "{$this->address_1} {$this->address_2} {$this->town} {$this->postcode}"; 
    }
    
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{

    public function fullName()
    {
        return "{$this->owner->first_name} {$this->owner->last_name}"; 
    }

    public function fullAddress()
    {
        return "{$this->owner->address_1}, {$this->owner->address_2}, {$this->owner->town}, {$this->owner->postcode}"; 
    }
    
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        "owner_id",
        "name",
        "type",
        "dob",
        "email",
        "weight",
        "height",
        "biteyness",
    ];

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class); 
    }

    public function setTreatments(array $strings) : Animal
    {
        $treatments = Treatment::fromStrings($strings); 
        $this->treatments()->sync($treatments->pluck("id")); 
        return $this;
    }

    public function getTreatments()  : string
    {
       $treatments = $this->treatments->pluck("name");
       return $treatments->implode(", ");
    }

    public function weightInKg()
    {
        return "{$this->weight}kg";
    }

    public function heightInCm()
    {
        return "{$this->height}cm";
    }

    public function biteynessCalc()
    {
        return "{$this->biteyness}/5";
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class); 
    }

    public function dangerous()
    {
        return $this->biteyness > 3; 
    }
}

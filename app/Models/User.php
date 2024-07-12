<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $incrementing = false;

    protected $primaryKey = null;
    protected $table = "User";
    protected $guarded = [];


    public function getFullNameAttribute()
    {
        $name = json_decode($this->Name);
        return "{$name->title} {$name->first} {$name->last}";
    }

    function getTitleAttribute()
    {
        $name = json_decode($this->Name);
        return "{$name->title}";
    }

    function getFirstNameAttribute()
    {
        $name = json_decode($this->Name);
        return "{$name->first}";
    }

    function getLastNameAttribute()
    {
        $name = json_decode($this->Name);
        return "{$name->last}";
    }

    function getCityAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->city}";
    }

    function getStateAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->state}";
    }

    function getStreetNameAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->street->name}";
    }

    function getStreetNumberAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->street->number}";
    }

    function getCountryAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->country}";
    }

    function getPostcodeAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->postcode}";
    }

    function getTimezoneOffsetAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->timezone->offset}";
    }

    function getTimezoneDescriptionAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->timezone->description}";
    }

    function getLatitudeAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->coordinates->latitude}";
    }

    function getLongitudeAttribute()
    {
        $location = json_decode($this->Location);
        return "{$location->coordinates->longitude}";
    }
}

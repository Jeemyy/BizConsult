<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    // Protected $fillable = [];
    protected $guarded = ['id'];


    ##----------------------------------> RELARIONSHIP
    ##----------------------------------> ATTRIBUTES
    ##----------------------------------> CUSTOM FUNCTION
    ##----------------------------------> SCOPES
    ##----------------------------------> ACCESSORS & MUTATORS
}

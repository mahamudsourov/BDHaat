<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthyFood extends Model
{
    // Explicitly tell Laravel to use the correct table
    protected $table = 'healthy_foods';

    // Optional: Allow mass assignment for these fields
    protected $fillable = ['image', 'brand', 'name', 'price'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['empname', 'age', 'location', 'email', 'skills', 'telephone'];
    // public function scopeFilter($)
}

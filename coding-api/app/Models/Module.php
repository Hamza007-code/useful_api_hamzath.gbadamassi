<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    /** @use HasFactory<\Database\Factories\ModulesFactory> */
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class);
    }
}


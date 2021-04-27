<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'view_3d';
    public $timestamps = false;

    public function getDateAttribute($value)
    {
        return date('d.m.Y', strtotime($value));
    }
}

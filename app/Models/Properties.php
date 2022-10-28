<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'properties';
    protected $fillable = [
        'properties_name',
        'type',
        'model',
        'image',
        'properties_description',
        'price',
        'notelp'
    ];
}

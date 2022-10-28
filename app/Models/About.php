<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['banner', 'banner_text', 'banner_span', 'description', 'visi', 'misi'];
    public $timestamps = false;
}

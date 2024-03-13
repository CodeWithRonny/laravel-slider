<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = "slider";
    protected $fillable = [ 'id', 'title', 'image', 'url', 'tagline', 'is_active','created_at', 'updated_at'];
}

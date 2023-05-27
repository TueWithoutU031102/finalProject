<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type', 'price','image' ,'description'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

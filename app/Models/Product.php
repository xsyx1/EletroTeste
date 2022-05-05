<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'voltage',
        'brand'
    ];

    public static function brand()
    {
        return [
            1 => 'Electrolux',
            'Brastemp',
            'Fischer',
            'Samsung',
            'LG'
        ];
    }
}

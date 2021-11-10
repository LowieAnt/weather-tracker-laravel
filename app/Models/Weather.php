<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $fillable = [
        'rainfall',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

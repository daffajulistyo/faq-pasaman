<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description'];

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}

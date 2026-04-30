<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'question',
        'answer',
        'is_active'
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}

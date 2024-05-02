<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaModel extends Model
{
    use HasFactory;
    protected $fillable= [
        'title',
        'user_id',
        'is_complete',
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}

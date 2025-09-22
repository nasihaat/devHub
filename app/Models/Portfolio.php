<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'title',
        'description',
        'live_link',
        'github_link',
        'image',
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}

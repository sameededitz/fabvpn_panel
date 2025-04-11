<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class servers extends Model
{
    protected $fillable = ['name', 'android', 'ios', 'macos', 'windows', 'longitude', 'latitude', 'type', 'status'];

    protected $casts = [
        'android' => 'boolean',
        'ios' => 'boolean',
        'macos' => 'boolean',
        'windows' => 'boolean',
    ];
    public function isPremium()
    {
        return $this->type === 'premium';
    }

    public function isActive()
    {
        return $this->status === 'active';
    }
}

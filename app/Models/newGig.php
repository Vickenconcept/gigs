<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newGig extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Role()
    {
        return $this->hasMany(Role::class);
    }
    protected $fillable = [
        'country',
        'role',
        'password',
        'company',
        'address',
        'minimum',
        'maximum',
        'state_region',
    ];
    // public $guarded = ['country',
    // 'role',
    // 'password',
    // 'company',
    // 'address',
    // 'state/region',];
}

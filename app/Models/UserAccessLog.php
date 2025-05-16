<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccessLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'url',
        'ip_address',
        'method',
        'user_agent',
    ];

    protected $casts = [
        'id' => 'integer',
        'userId' => 'integer'
    ];
}

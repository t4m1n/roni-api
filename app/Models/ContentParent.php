<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentParent extends Model
{
    use HasFactory;

    protected $table = 'content_parents';
    protected $primaryKey = 'id';

    protected $fillable = [
        'statusenabled',
        'description',
        'sequence',
    ];

    protected $casts = [
        'statusenabled' => 'integer',
        'sequence' => 'integer',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentChild extends Model
{
    use HasFactory;

    protected $table = 'content_childs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'statusenabled',
        'contentparentid',
        'description',
        'sequence',
    ];

    protected $casts = [
        'statusenabled' => 'integer',
        'sequence' => 'integer',
        'contentparentid' => 'integer'
    ];
}

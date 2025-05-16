<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemantauanChild extends Model
{
    use HasFactory;

    protected $table = 'pemantauan_childs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'statusenabled',
        'pemantauanparentid',
        'description',
        'sequence',
    ];

    protected $casts = [
        'statusenabled' => 'integer',
        'sequence' => 'integer',
        'pemantauanparentid' => 'integer'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemantauanParent extends Model
{
    use HasFactory;

    protected $table = 'pemantauan_parents';
    protected $primaryKey = 'id';

    protected $fillable = [
        'statusenabled',
        'description',
        'sequence',
    ];
}

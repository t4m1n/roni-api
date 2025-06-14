<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemantauanT extends Model
{
    use HasFactory;

    protected $table = 'pemantauan_t';
    protected $primaryKey = 'norec';

    protected $fillable = [
        'statusenabled',
        'userid',
        'pemantauanchildid',
        'status'
    ];

    protected $casts = [
        'statusenabled' => 'integer',
        'pemantauanchildid' => 'integer',
        'status' => 'integer',
    ];

    public $timestamps = true;
}

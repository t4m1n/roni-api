<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PernyataanT extends Model
{
    use HasFactory;

    protected $table = 'pernyataan_t';
    protected $primaryKey = 'norec';

    protected $fillable = [
        'statusenabled',
        'userid',
        'status'
    ];
}

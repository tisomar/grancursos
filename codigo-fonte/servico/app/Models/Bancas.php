<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bancas extends Model
{
    use HasFactory;

    protected $table = 'bancas';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'descricao',
    ];
}

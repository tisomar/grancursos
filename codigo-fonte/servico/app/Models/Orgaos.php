<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orgaos extends Model
{
    use HasFactory;

    protected $table = 'orgaos';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'descricao',
        'sigla',
    ];
}

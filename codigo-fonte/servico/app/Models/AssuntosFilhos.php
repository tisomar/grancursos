<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Assuntos;

class AssuntosFilhos extends Model
{
    use HasFactory;

    protected $table = 'assuntos_filhos';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function assuntoPai()
    {
        return $this->hasOne(
            Assuntos::class,
            'id',
            'id_assunto_pai'
        );
    }

    public function assuntoFilho()
    {
        return $this->hasOne(
            Assuntos::class,
            'id',
            'id_assunto_filho'
        );
    }
}

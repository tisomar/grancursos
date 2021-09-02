<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Questoes extends Model
{
    use HasFactory;

    protected $table = 'questoes';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'descricao',
        'id_orgao',
        'id_banca',
        'id_assunto'
    ];


    public function orgao()
    {
        return $this->hasOne(
            Orgaos::class,
            'id',
            'id_orgao'
        );
    }

    public function banca()
    {
        return $this->hasOne(
            Bancas::class,
            'id',
            'id_banca'
        );
    }

    public function assunto()
    {
        return $this->hasOne(
            Assuntos::class,
            'id',
            'id_assunto_'
        );
    }

}

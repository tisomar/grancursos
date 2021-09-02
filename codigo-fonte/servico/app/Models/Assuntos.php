<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assuntos extends Model
{
    use HasFactory;

    protected $table = 'assuntos';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public $hidden = [
        'pivot'
    ];

    protected $fillable = [
        'descricao',
    ];

    public function pai()
    {
        return $this->hasOneThrough(
            Assuntos::class,
            AssuntosFilhos::class,
            'id_assunto_filho',
            'id',
            'id',
            'id_assunto_pai'
        );
    }

    public function filhos()
    {
        return $this->belongsToMany(
            Assuntos::class,
            'assuntos_filhos',
            'id_assunto_pai',
            'id_assunto_filho'
        );
    }

    public function questoes($arrParam = [])
    {
        $questoes = $this->hasMany(
            Questoes::class,
            'id_assunto',
            'id'
        );

        if ($arrParam) {
            $questoes->where($arrParam);
        }

        return $questoes;
    }

    public function quantidadeQuestoes($arrParam = [])
    {

        $quantidadeQuestoes = $this->questoes($arrParam)->count();


        $filhos = $this->filhos()->get();
        if ($filhos->isNotEmpty()) {
            foreach ($filhos as $filho) {

                $quantidadeQuestoes += $filho->quantidadeQuestoes($arrParam);
            }
        }
//        dd($quantidadeQuestoes);
        return $quantidadeQuestoes;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAssuntosRaiz($query)
    {
        return $query->doesntHave('pai');
    }
}

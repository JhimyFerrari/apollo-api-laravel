<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    protected $table = 'ufs';

    protected $primaryKey = 'codigo_ibge';

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'codigo_ibge',
        'nome',
        'sigla',
    ];

    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'uf_codigo_ibge', 'codigo_ibge');
    }
}

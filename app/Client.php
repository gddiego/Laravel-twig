<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelo_descricao extends Model
{
    protected $fillable = [
        'descricao', 'detalhes', 'marca', 'aluguel',
    ];

    protected $guarded = [
        'id',
        // 'created_at',
        // 'update_at'
    ];
    protected $table = 'public.modelo_descricao';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'valor_de',
        'valor_ate',
        'dias_atraso_de',
        'dias_atraso_ate',
        'dias_vencto',
        'id_tiponegocio',
        'data_ultimo_contato_de',
        'data_ultimo_contato_ate',
        'tipo_evento_ultimo_contato',
        'id_evento',
        'cadastro_dia_de',
        'cadastro_dia_ate',
        'forcar_aleatoriedade',
        '',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    use HasFactory;

    protected $fillable = [
        'nome',
        'referencia',
        'codigo',
        'valor',
        'ativo',
        'imagem',
    ];

    protected function casts(): array
    {
        return [
            'valor' => 'decimal:2',
            'ativo' => 'boolean',
        ];
    }

    public function scopeAtivos($query)
    {
        return $query->where('ativo', true);
    }
}

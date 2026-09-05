<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'curso'];

    public function scopeDoCurso($query, string $curso)
    {
        return $query->where('curso', $curso);
    }

    public function scopeNomeContem($query, string $palavra)
    {
        return $query->where('nome', 'like', "%{$palavra}%");
    }

    public function scopeRecentes($query)
    {
        return $query->where('created_at', '>=', now()->subDays(7));
    }
}
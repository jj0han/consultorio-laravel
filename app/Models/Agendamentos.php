<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_paciente',
        'id_doutor',
        'data',
        'descricao',
    ];

    protected $table = 'consultas';
}

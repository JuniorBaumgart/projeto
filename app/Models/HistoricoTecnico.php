<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoTecnico extends Model
{
    protected $table = 'historico_tecnico';
    protected $fillable = ['id_tecnico'];
}

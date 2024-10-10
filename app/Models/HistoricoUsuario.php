<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoUsuario extends Model
{
    protected $table = 'historico_usuario';
    protected $fillable = ['id_usuario'];
}

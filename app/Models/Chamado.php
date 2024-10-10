<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $table = 'chamado';
    protected $fillable = ['descricao', 'status', 'id_usuario', 'id_tecnico', 'id_categoria'];
}

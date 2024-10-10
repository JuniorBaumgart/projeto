<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoChamado extends Model
{
    protected $table = 'historico_chamado';
    protected $fillable = ['id_chamado'];
}

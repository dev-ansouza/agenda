<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['nome', 'email','telefone', 'mensagem', 'anexo', 'ip_remetente', 'dt_envio'];
}
